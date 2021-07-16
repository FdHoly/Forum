<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class areportController extends Controller
{
    //
    public function allreport()
    {
        $data = Report::all();
        // return $data;
        return view('admin.views.admReport', compact('data'));
    }
}
