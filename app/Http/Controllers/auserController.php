<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class auserController extends Controller
{
    //
    public function alluser(Request $request)
    {

        if ($request->has('search')) {
            $string = $request->input('search');
            $searchValues = preg_split('/\s+/', $string, -1, PREG_SPLIT_NO_EMPTY);
            $data = User::where(function ($q) use ($searchValues) {
                foreach ($searchValues as $value) {
                    $q->where('name', $value)
                        ->orWhere('name', 'like', "%{$value}%");
                }
            })->get();
        } else {
            $data = User::all();
        }
        // return $data;
        // with('utas')->get()
        return view('admin.views.admUser', compact('data'));
    }
    public function deleteUser($id)
    {
        // $userGroup = UserGroup::where('id_groups', $id)->where('id_users', Auth::user()->id_users)->first();
        $user = User::where('id_users', $id)->first();
        $user->delete();
        return back();
    }
}
