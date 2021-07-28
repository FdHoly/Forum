<?php

namespace App\Http\Controllers;
use App\Models\Universitas;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class loginControllers extends Controller
{
    public function registerView()
    {
        $dataUniv = Universitas::all();
        return view('user.views.register10', compact('dataUniv'));
    }

    public function regist(Request $request)
    {   
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = 1;

        $file = $request->file('file');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . "." . $extension;
        $file->move('uploads/user', $filename);

        $user->profil_image_url = $filename;
        $user->save();
        return redirect()->route('index');
    }
}
