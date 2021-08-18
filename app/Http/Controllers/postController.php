<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\Groups;
use App\Models\Pengumuman;
use App\Models\Rapat;
use App\Models\ReplyUtas;
use Carbon\Carbon;
use App\Models\Utas;
use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\Group;

class postController extends Controller
{
    //
    public function listpost()
    {
        $data1 = Utas::orderBy('created_at', 'desc')->get();
        $data2 = Pengumuman::all();
        $data3 = Events::all();
        $data4 = Rapat::all();
        $data5 = ReplyUtas::all();
        $data6 = Groups::all();
        $dataR = Utas::with(["ReplyUtas"])->get();
        $dataRandom = Groups::all()->random(1);
        return view('user.views.index', [
            "Data1" => $data1,
            "Data2" => $data2,
            "Data3" => $data3,
            "Data4" => $data4,
            "Data5" => $dataR,
            "Data6" => $data6,
            "DataRandom" => $dataRandom
        ]);
        // return $dataRandom;
    }

    public function eventbar()
    {

        $data2 = Pengumuman::all();
        $data3 = Events::all();
        $data4 = Rapat::all();

        return view('user.views.event', [

            "Data2" => $data2,
            "Data3" => $data3,
            "Data4" => $data4,

        ]);
    }

    public function replyPost(Request $request)
    {
        $post = new ReplyUtas();

        $post->konten = $request->input('konten');
        $post->id_utas = $request->input('id_utas');
        $post->id_users = $request->input('id_users');

        $post->save();
        return redirect()->back();
        // return $request;
    }

    public function createPost(Request $request)
    {
        $post = new Utas();

        $post->judul = $request->input('judul');
        $post->konten = $request->input('konten');
        $post->status = $request->input('status');
        $post->id_users = $request->input('id_users');
        $post->id_groups = $request->input('id_groups');

        $post->save();
        return redirect()->route('index');
    }
}
