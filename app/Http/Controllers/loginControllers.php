<?php

namespace App\Http\Controllers;
use App\Models\Universitas;


use App\Models\User;
use Illuminate\Http\Request;

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

    }
}
