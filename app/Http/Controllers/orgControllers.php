<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Utas;
use App\Models\Rapat;
use App\Models\Events;
use App\Models\Groups;
use App\Models\ReplyUtas;
use App\Models\UserGroup;
use App\Models\Pengumuman;
use App\Models\Universitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPUnit\TextUI\XmlConfiguration\Group;

class orgControllers extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function listorg()
    {
        $data = Groups::all();
        $userGroup = UserGroup::where('id_users', Auth::user()->id_users)->pluck('id_groups'); # Auth::user()->id

        return view('user.views.listorg', compact('data', 'userGroup'));
    }

    public function viewCreate()
    {
        $data = Universitas::all();
        return view('user.views.grupbaru', compact('data'));
    }

    public function createOrg(Request $request)
    {


        $file = $request->file('file');
        $path = $request->file->store('logo', 'public');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . "." . $extension;
        $file->move('uploads/logo', $filename);


        $group = Groups::create(
            [
                'nama' => $request->nama_grup,
                'deskripsi' => $request->deskripsi,
                'id_univ' => $request->universitas,
                'logo_url' => $filename
            ]
        );


        UserGroup::create([
            'id_users' => Auth::user()->id_users,
            'role' => '2',
            'id_groups' => $group->id_groups,
        ]);
        return redirect()->route('listorg');
    }

    public function detailOrg($id)
    {
        $sortDirect = 'desc';
        $userGroup = UserGroup::where('id_users', Auth::user()->id_users)->pluck('id_groups'); # Auth::user()->id

        $organisasi = Groups::with([
            'pengumuman', 'acara', 'rapat',

            // Ordering Utas
            'utas' => function ($query) use ($sortDirect) {
                $query->latest() // <- jadi ini di order dulu, baru dijoin table replyutas
                ;
            }
            // Ordering Utas

            , 'usergroup.user', 'universitas'
        ])->findOrFail($id);


        // return $organisasi;
        return view('user.views.proforganisasi', [
            "organisasi" => $organisasi,
            "userGroup" => $userGroup
        ]);
    }
    public function joinOrg($id)
    {
        # code...
        UserGroup::create([
            'role' => 1,
            'id_users' => Auth::user()->id_users,
            'id_groups' => $id,

        ]);
        return back();
    }
    public function leaveOrg($id)
    {
        $userGroup = UserGroup::where('id_groups', $id)->where('id_users', Auth::user()->id_users)->first();
        $userGroup->delete();
        return back();
    }
    public function deleteOrg($id)
    {
        // $userGroup = UserGroup::where('id_groups', $id)->where('id_users', Auth::user()->id_users)->first();
        $org = Groups::where('id_groups', $id)->first();
        $org->delete();
        return redirect()->route('index');
    }
}
