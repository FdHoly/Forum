<?php

namespace App\Http\UserControllers;

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
}
