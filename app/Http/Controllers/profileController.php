<?php

namespace App\Http\Controllers;

use App\Models\User;
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

    public function profileShow($nama)
    {
        $prof = User::with(["group", "replyutas", "utas"])->where('name', $nama)->first();

        $userGroup = UserGroup::where('id_users', $prof->id)->pluck('id_groups'); # Auth::user()->id
        $org = Groups::whereIn('id_groups', $userGroup)->get();
        $pengumuman = Pengumuman::whereIn('id_groups', $userGroup)->get();
        $acara = Events::whereIn('id_groups', $userGroup)->get();
        $rapat = Rapat::whereIn('id_groups', $userGroup)->get();
        // $allutas = Utas::with(["group", "replyutas", "user"])->findOrFail(Auth::user()->id_users);
        // return $prof;
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
    public function HisOrg($name)
    {

        $user = User::where("name", $name)->firstOrFail();
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
        $userGroup = UserGroup::where([['id_users', Auth::user()->id_users], ['role', 2]])->pluck('id_groups'); # Auth::user()->id
        $org = Groups::whereIn('id_groups', $userGroup)->get();
        $report = Report::whereIn('id_groups', $userGroup)->get();
        // return $userGroup;
        return view('user.views.reportview', [
            "org" => $org,
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
                'oldPass' => 'required|string',
            ]
        );
        if (!Hash::check($request->oldPass, Auth::user()->password)) {
            return back()->with('error', 'Wrong password');
        }
        if ($request->password) {
            if ($request->password != $request->cPass) {
                return back()->with('error', 'Password not match');
            }
            User::find(Auth::user()->id_users)->update([
                'name' => $request->name,
                'biodata' => $request->biodata,
                'password' => Hash::make($request->password)
            ]);

            return redirect()->route('editprofile')->with('status', 'Profile and Password Changed');
        }
        User::find(Auth::user()->id_users)->update([
            'name' => $request->name,
            'biodata' => $request->biodata,
        ]);
        return redirect()->route('editprofile')->with('status', 'Profile Changed');
    }
}
