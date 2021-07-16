<?php

namespace App\Http\Controllers;

use App\Models\Utas;
use Illuminate\Http\Request;

class apostController extends Controller
{
    //
    public function allpost()
    {
        $data = utas::all();
        // return $data;
        return view('admin.views.admPost', compact('data'));
    }
}
