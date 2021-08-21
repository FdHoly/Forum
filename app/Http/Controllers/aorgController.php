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
    public function deleteOrg($id)
    {
        // $userGroup = UserGroup::where('id_groups', $id)->where('id_users', Auth::user()->id_users)->first();
        $org = Groups::where('id_groups', $id)->first();
        $org->delete();
        return back();
    }
}
