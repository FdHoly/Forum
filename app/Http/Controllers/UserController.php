<?php

namespace App\Http\Controllers;

use Exception;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Utas;
use App\Models\Rapat;
use App\Models\Events;
use App\Models\Groups;
use App\Models\ReplyUtas;
use App\Models\UserGroup;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class UserController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;



    public function register(Request $request)
    {
        try {
            $fields = $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6'
            ]);

            $fields['password'] = app('hash')->make($request->password);
            $fields['role'] = 'student';
            $user = User::create($fields);

            return response()->json([
                "status" => "success",
                "message" => "user registered",
                "data" => $user,
            ], 200);
        } catch (Exception $th) {

            return response()->json([
                "status" => "failed",
                'message' => $th,
                "data" => null
            ], 400);
        }
    }

    public function login(Request $request)
    {
        try {
            $fields = $this->validate($request, [
                "email" => "bail|required|email",
                "password" => "required"
            ]);


            $user = User::where(['email' => $fields['email']])->first();


            if ($user && Hash::check($fields['password'], $user->password)) {
                return response()->json([
                    "status" => "success",
                    "message" => "user login",
                    "data" => $user,
                ], 200);
            }


            return response()->json([
                "status" => "failed",
                'message' => "Invalid email or password",
                "data" => null
            ], 400);
        } catch (Exception $th) {
            return response()->json([
                "status" => "failed",
                'message' => $th,
                "data" => null
            ], 400);
        }
    }
    public function listdata()
    {
        $prof = User::with(["group", "replyutas", "utas"])->findOrFail(Auth::user()->id_users);
        $userGroup = UserGroup::where('id_users', Auth::user()->id_users)->pluck('id_groups'); # Auth::user()->id
        $pengumuman = Pengumuman::whereIn('id_groups', $userGroup)->get();
        $acara = Events::whereIn('id_groups', $userGroup)->get();
        $rapat = Rapat::whereIn('id_groups', $userGroup)->get();
        // $allutas = Utas::with(["group", "replyutas", "user"])->findOrFail(Auth::user()->id_users);
        // return $prof;
        return view('user.views.profile', [
            "prof" => $prof,
            "pengumuman" => $pengumuman,
            "acara" => $acara,
            "rapat" => $rapat,
        ]);

    }

    public function detailprofile($id)
    {
        $organisasi = User::all();
        return $organisasi;
        return view('user.views.profile', [
            "organisasi" => $organisasi
        ]);
    }
}
