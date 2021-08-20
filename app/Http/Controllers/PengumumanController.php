<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Utas;
use App\Models\Rapat;
use App\Models\Events;
use App\Models\Groups;
use App\Models\UserGroup;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PengumumanController extends Controller
{
    //
    public function pengumumanIndex()
    {
        $prof = User::with(["group", "replyutas", "utas"])->findOrFail(Auth::user()->id_users);
        // return $prof;
        $userGroup = UserGroup::where('id_users', Auth::user()->id_users)->pluck('id_groups'); # Auth::user()->id
        $admUser = UserGroup::where('id_users', Auth::user()->id_users)->get();
        // $group = Groups::whereIn('id_groups', $userGroup)->get();
        $org = Groups::whereIn('id_groups', $userGroup)->get();
        $pengumuman = Pengumuman::with(['group.usergroup' => function ($query) {
            $query->where('id_users', Auth::user()->id_users);
        }])->whereIn('id_groups', $userGroup)->latest()->get();
        $acara = Events::with(['group.usergroup' => function ($query) {
            $query->where('id_users', Auth::user()->id_users);
        }])->whereIn('id_groups', $userGroup)->latest()->get();
        $rapat = Rapat::with(['group.usergroup' => function ($query) {
            $query->where('id_users', Auth::user()->id_users);
        }])->whereIn('id_groups', $userGroup)->latest()->get();
        // return $admUser;
        // $allutas = Utas::with(["group", "replyutas", "user"])->findOrFail(Auth::user()->id_users);
        // return $prof;
        return view('user.views.pengumuman', [
            "org" => $org,
            "admUser" => $admUser,
            "prof" => $prof,
            "pengumuman" => $pengumuman,
            "acara" => $acara,
            "rapat" => $rapat,
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'id_groups' => 'required',
            'tipe' => 'required',
            'konten' => 'required',
        ]);

        if ($request->tipe == "pengumuman") {
            Pengumuman::create([
                'id_users' => Auth::user()->id_users,
                'judul' => $request->judul,
                'id_groups' => $request->id_groups,
                'konten' => $request->konten,
            ]);
        } elseif ($request->tipe == "acara") {
            Events::create([
                'id_users' => Auth::user()->id_users,
                'judul' => $request->judul,
                'id_groups' => $request->id_groups,
                'konten' => $request->konten,
            ]);
        } elseif ($request->tipe == "rapat") {
            Rapat::create([
                'id_users' => Auth::user()->id_users,
                'judul' => $request->judul,
                'id_groups' => $request->id_groups,
                'konten' => $request->konten,
            ]);
        }
        return back();
    }
}