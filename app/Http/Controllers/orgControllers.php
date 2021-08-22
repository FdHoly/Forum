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
    public function listorg(Request $request)
    {
        $userGroup = UserGroup::where('id_users', Auth::user()->id_users)->pluck('id_groups'); # Auth::user()->id
        $univGroup = Groups::where('id_univ', Auth::user()->id_univ)->pluck('id_groups'); # Auth::user()->id

        if ($request->has('search')) {
            $string = $request->input('search');
            $searchValues = preg_split('/\s+/', $string, -1, PREG_SPLIT_NO_EMPTY);
            $data = Groups::where(function ($q) use ($searchValues) {
                foreach ($searchValues as $value) {
                    $q->where('nama', $value)
                        ->orWhere('nama', 'like', "%{$value}%");
                }
            })->get();
        } elseif ($request->input('filter') === 'semua') {
            $data = Groups::all();
        } else {
            $data = Groups::whereIn('id_groups', $univGroup)->get();
        }


        return view('user.views.listorg', compact('data', 'userGroup'));
    }

    public function viewCreate()
    {
        $data = Universitas::all();
        return view('user.views.grupbaru', compact('data'));
    }

    public function createOrg(Request $request)
    {
        $request->validate([
            'nama_grup' => 'required|unique:groups,nama',
            'deskripsi' => 'required',
            'universitas' => 'required',
            'file' => 'required',
        ]);
        $path = $request->file->store('logo', 'public');
        $group = Groups::create(
            [
                'nama' => $request->nama_grup,
                'deskripsi' => $request->deskripsi,
                'id_univ' => $request->universitas,
                'logo_url' => $path
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
        $userAuth = UserGroup::where('id_users', Auth::user()->id_users)->where('id_groups', $id)->first(); # Auth::user()->id
        // return $userAuth;
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
            "userGroup" => $userGroup,
            "userAuth" => $userAuth
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
    public function editOrg(Request $request, Groups $group)
    {
        $fields = $request->validate(
            [
                'deskripsi' => 'required',
                'logo_url' => 'image'
            ]
        );
        if ($request->file('logo_url')) {
            $fields['logo_url'] = $request->logo_url->store('logo', 'public');
        }
        $group->update($fields);
        return back();
    }
    public function manageOrg($id)
    {

        $userGroupx = UserGroup::where('id_users', Auth::user()->id_users)->where('id_groups', $id)->first();
        if (!$userGroupx) {
            abort(403);
        }
        // return $userGroupx->role;
        if (($userGroupx->role) == 1) {
            abort(403);
        }
        // if (($userGroupx->role) == 2) {
        //     abort(403);
        // }

        $sortDirect = 'desc';
        $userGroup = UserGroup::where('id_users', Auth::user()->id_users)->pluck('id_groups'); # Auth::user()->id
        $userAuth = UserGroup::where('id_users', Auth::user()->id_users)->where('id_groups', $id)->first(); # Auth::user()->id
        // return $userAuth;
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

        $dataUser = UserGroup::with(['user'])->where('id_groups', $id)->get();
        // $dataUser = User::whereIn('id_users', $user)->get();

        // return $dataUser;
        return view('user.views.manageOrganisasi', [
            "organisasi" => $organisasi,
            "userGroup" => $userGroup,
            "userAuth" => $userAuth,
            "dataUser" => $dataUser
        ]);
        // return view('user.views.manageOrganisasi');
    }
    public function kickUser($id)
    {
        $user = UserGroup::where('id_groups', $id)->first();
        $user->delete();
        return back();
    }
    public function editUser(Request $request, UserGroup $id)
    {
        $userGroup = UserGroup::where('id_users', Auth::user()->id_users)->where('id_groups', $id->id_groups)->first();
        if (!$userGroup->role >= 2) {
            abort(403);
        }

        $fields = $request->validate([
            'role' => 'required',
        ]);

        $id->update($fields);
        return back();
    }
}
