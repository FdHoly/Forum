<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\Groups;
use App\Models\Pengumuman;
use App\Models\Rapat;
use App\Models\ReplyUtas;
use Carbon\Carbon;
use App\Models\Utas;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

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
    public function listdata($id)
    {   

        $dataAll = User::with('utas.replyutas.user', 'UserGroup.group')->where('id_users', $id)->get();
        return $dataAll;
        // $data1 = Utas::all();
        // $data2 = Pengumuman::all();
        // $data3 = Events::all();
        // $data4 = Rapat::all();
        // $data5 = ReplyUtas::all();
        // $data6 = Groups::all();
        // $dataR = Utas::with(["ReplyUtas"])->get();
        // $dataRandom = Groups::all()->random(1);
        // return view('user.views.profile', [
        //     "Data1" => $data1,
        //     "Data2" => $data2,
        //     "Data3" => $data3,
        //     "Data4" => $data4,
        //     "Data5" => $dataR,
        //     "Data6" => $data6,
        //     "DataRandom" => $dataRandom
        // ]);
        // return $dataRandom;
    }
}
