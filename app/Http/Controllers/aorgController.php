<?php

namespace App\Http\Controllers;

use App\Models\Groups;
use Illuminate\Http\Request;

class aorgController extends Controller
{
    //
    public function allorg()
    {
        $data = Groups::all();
        // return $data;
        return view('admin.views.admOrg', compact('data'));
    }
}
