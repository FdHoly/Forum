<?php

namespace App\Http\Controllers;

use App\Models\Groups;
use App\Models\UserGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class profileController extends Controller
{
    //
    public function MyOrg()
    {
        $userGroup = UserGroup::where('id_users', Auth::user()->id_users)->pluck('id_groups'); # Auth::user()->id
        $org = Groups::whereIn('id_groups', $userGroup)->get();
        // return $org;
        return view('user.views.organisasiku', [
            "org" => $org,
        ]);
    }
}
