<?php

namespace App\Http\Controllers;

use App\Models\Groups;
use App\Models\Universitas;
use App\Models\User;
use App\Models\Utas;
use Illuminate\Http\Request;

class adminController extends Controller
{
    //
    public function index()
    {
        $user = User::all();
        $universitas = Universitas::all();
        $organisasi = Groups::all();
        $utas = Utas::all();
        return view('admin.views.admindex', [
            "user" => $user,
            "universitas" => $universitas,
            "organisasi" => $organisasi,
            "utas" => $utas,
        ]);
    }
}
