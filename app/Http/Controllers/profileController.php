<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Utas;
use App\Models\Rapat;
use App\Models\Events;
use App\Models\Groups;
use App\Models\Report;
use App\Models\UserGroup;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class profileController extends Controller
{
    //
    public function profileIndex()
    {
        $prof = User::with(["group", "replyutas", "utas"])->findOrFail(Auth::user()->id_users);
        // return $prof;
        $userGroup = UserGroup::where('id_users', Auth::user()->id_users)->pluck('id_groups'); # Auth::user()->id
        $org = Groups::whereIn('id_groups', $userGroup)->get();
        $pengumuman = Pengumuman::whereIn('id_groups', $userGroup)->get();
        $acara = Events::whereIn('id_groups', $userGroup)->get();
        $rapat = Rapat::whereIn('id_groups', $userGroup)->get();
        // $allutas = Utas::with(["group", "replyutas", "user"])->findOrFail(Auth::user()->id_users);
        // return $prof;
        return view('user.views.profile', [
            "org" => $org,
            "prof" => $prof,
            "pengumuman" => $pengumuman,
            "acara" => $acara,
            "rapat" => $rapat,
        ]);
    }

    public function profileShow($email)
    {
        $prof = User::with(["group", "replyutas", "utas"])->where('email', $email)->first();

        $userGuest = UserGroup::where('id_users', $prof->id_users)->pluck('id_groups'); # Auth::user()->id
        $userAuth = UserGroup::where('id_users', Auth::user()->id_users)->pluck('id_groups'); # Auth::user()->id
        $userGroup = UserGroup::whereIn('id_groups', $userAuth)
            ->where('id_users', $prof->id_users)
            ->pluck('id_groups');
        $org = Groups::whereIn('id_groups', $userGuest)->get();
        $pengumuman = Pengumuman::whereIn('id_groups', $userGroup)->get();
        $acara = Events::whereIn('id_groups', $userGroup)->get();
        $rapat = Rapat::whereIn('id_groups', $userGroup)->get();
        // $allutas = Utas::with(["group", "replyutas", "user"])->findOrFail(Auth::user()->id_users);
        // return $userAuth;
        return view('user.views.profileShow', [
            "org" => $org,
            "prof" => $prof,
            "pengumuman" => $pengumuman,
            "acara" => $acara,
            "rapat" => $rapat,
        ]);
    }
    public function MyOrg()
    {
        $userGroup = UserGroup::where('id_users', Auth::user()->id_users)->pluck('id_groups'); # Auth::user()->id
        $org = Groups::whereIn('id_groups', $userGroup)->get();
        // return $org;
        return view('user.views.organisasiku', [
            "org" => $org,
        ]);
    }
    public function HisOrg($email)
    {

        $user = User::where("email", $email)->firstOrFail();
        $userGroup = UserGroup::where('id_users', $user->id_users)->pluck('id_groups'); # Auth::user()->id
        $org = Groups::whereIn('id_groups', $userGroup)->get();
        // return $org;
        return view('user.views.organisasiShow', [
            "org" => $org,
            "prof" => $user
        ]);
    }
    public function reportShow()
    {
        $userGroup = UserGroup::where([['id_users', Auth::user()->id_users], ['role', '>', 1]])->pluck('id_groups'); # Auth::user()->id
        // return $userGroup;
        if ($userGroup->isEmpty()) {
            abort(403);
        }
        $org = Groups::whereIn('id_groups', $userGroup)->get();
        $report = Report::whereIn('id_groups', $userGroup)->get();
        $utasReport = Report::whereIn('id_groups', $userGroup)->pluck('id_utas');
        $allutas = Utas::with(["group", "replyutas", "user"])->whereIn('id_utas', $utasReport)->get();

        // return $allutas;
        return view('user.views.reportview', [
            "org" => $org,
            "allutas" => $allutas,
            "report" => $report
        ]);
    }
    public function profileMe()
    {

        // return $user;
        return view('user.views.editprofile');
    }

    public function editProfile(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'biodata' => 'string',
                // 'oldPass' => 'required|string',
            ]
        );
        $user = User::find(Auth::user()->id_users);

        if (!$request->oldPass) {
            return back()->with('error', 'Please Enter Password');
        }

        if (!Hash::check($request->oldPass, Auth::user()->password)) {
            return back()->with('error', 'Wrong password');
        }

        if ($request->password) {
            if ($request->password != $request->cPass) {
                return back()->with('error', 'Password not match');
            }
            $user->update([
                'name' => $request->name,
                'biodata' => $request->biodata,
                'password' => Hash::make($request->password),
                // 'profile_image_url' => $path
            ]);
        } else {
            $user->update([
                'name' => $request->name,
                'biodata' => $request->biodata,
                // 'profile_image_url' => $path

            ]);
        }
        if ($request->file('profilePic')) {
            $profilePic = $request->profilePic->store('avatar', 'public');
            $user->update([
                'profil_image_url' => $profilePic
            ]);
        }
        if ($request->file('backgroundPic')) {
            $backgroundPic = $request->backgroundPic->store('avatar', 'public');
            $user->update([
                'background_image_url' => $backgroundPic
            ]);
        }

        return redirect()->route('editprofile')->with('status', 'Profile Changed');
    }
}
