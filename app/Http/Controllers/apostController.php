<?php

namespace App\Http\Controllers;

use App\Models\Report;
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
    public function deletePost($id)
    {
        // $userGroup = UserGroup::where('id_groups', $id)->where('id_users', Auth::user()->id_users)->first();
        $post = Utas::where('id_utas', $id)->first();
        $post->delete();
        return back();
    }
}
