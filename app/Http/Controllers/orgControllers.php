<?php

namespace App\Http\Controllers;

use App\Models\Groups;
use App\Models\Universitas;
use Illuminate\Http\Request;

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
        $org->id_univ = $request->input('universitas');

        $file = $request->file('file');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . "." . $extension;
        $file->move('uploads/logo', $filename);

        $org->logo_url = $filename;

        $org->save();
        return redirect()->route('listorg');

    }
}
