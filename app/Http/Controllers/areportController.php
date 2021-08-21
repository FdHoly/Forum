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
    public function deleteReport($id)
    {
        // $userGroup = UserGroup::where('id_groups', $id)->where('id_users', Auth::user()->id_users)->first();
        $report = Report::where('id_reports', $id)->first();
        $report->delete();
        return back();
    }
}
