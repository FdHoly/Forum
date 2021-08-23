<?php

namespace App\Http\Controllers;

use App\Models\Groups;
use Illuminate\Http\Request;

class aorgController extends Controller
{
    //
    public function allorg(Request $request)
    {
        $data = Groups::all();
        if ($request->has('search')) {
            $string = $request->input('search');
            $searchValues = preg_split('/\s+/', $string, -1, PREG_SPLIT_NO_EMPTY);
            $data = Groups::where(function ($q) use ($searchValues) {
                foreach ($searchValues as $value) {
                    $q->where('nama', $value)
                        ->orWhere('nama', 'like', "%{$value}%");
                }
            })->get();
        }
        // return $data;
        return view('admin.views.admOrg', compact('data'));
    }
    public function deleteOrg($id)
    {
        // $userGroup = UserGroup::where('id_groups', $id)->where('id_users', Auth::user()->id_users)->first();
        $org = Groups::where('id_groups', $id)->first();
        $org->delete();
        return back();
    }
}
