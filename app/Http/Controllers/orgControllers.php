<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\Groups;
use App\Models\Pengumuman;
use App\Models\Rapat;
use App\Models\ReplyUtas;
use App\Models\Universitas;
use App\Models\User;
use App\Models\UserGroup;
use App\Models\Utas;
use Illuminate\Http\Request;
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
        return view('user.views.listorg', compact('data'));
    }

    public function viewCreate()
    {
        $data = Universitas::all();
        return view('user.views.grupbaru', compact('data'));
    }

    public function createOrg(Request $request)
    {
        $org = new Groups();

        $org->nama = $request->input('nama_grup');
        $org->deskripsi = $request->input('deskripsi');
        $org->id_univ = $request->get('universitas');

        $file = $request->file('file');
        $path = $request->file->store('logo', 'public');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . "." . $extension;
        $file->move('uploads/logo', $filename);

        $org->logo_url = $filename;

        $org->save();
        return redirect()->route('listorg');
    }

    public function detailOrg($id)
    {
        $organisasi = Groups::with(['pengumuman', 'acara', 'rapat', 'utas.replyutas', 'usergroup.user', 'universitas'])->findOrFail($id);
        return view('user.views.proforganisasi', [
            "organisasi" => $organisasi
        ]);
    }
}
