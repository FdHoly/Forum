<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Utas;
use Illuminate\Http\Request;

class apostController extends Controller
{
    //
    public function allpost(Request $request)
    {
        $data = utas::all();
        if ($request->has('searchID')) {
            $string = $request->input('searchID');
            $data = Utas::where('id_utas', $string)->get();
        }
        if ($request->has('search')) {
            $string = $request->input('search');
            $searchValues = preg_split('/\s+/', $string, -1, PREG_SPLIT_NO_EMPTY);
            $data = Utas::where(function ($q) use ($searchValues) {
                foreach ($searchValues as $value) {
                    $q->where('judul', $value)
                        ->orWhere('judul', 'like', "%{$value}%");
                }
            })->get();
        }
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
