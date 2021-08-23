<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class areportController extends Controller
{
    //
    public function allreport(Request $request)
    {
        if ($request->has('searchID')) {
            $string = $request->input('searchID');
            $data = Report::where('id_users', $string)
                ->orWhere('id_utas', $string)
                ->get();
        } elseif ($request->has('search')) {
            $string = $request->input('search');
            $searchValues = preg_split('/\s+/', $string, -1, PREG_SPLIT_NO_EMPTY);
            $data = Report::whereHas('user', function ($query) use ($searchValues) {
                foreach ($searchValues as $value) {
                    $query->where('name', $value)
                        ->orWhere('name', 'like', "%{$value}%");
                }
            })->get();
        } else {
            $data = Report::all();
        }
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
