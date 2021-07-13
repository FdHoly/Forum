<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class auserController extends Controller
{
    //
    public function alluser()
    {
        $data = User::all();
        // return $data;
        // with('utas')->get()
        return view('admin.views.app-contact', compact('data'));
    }
}
