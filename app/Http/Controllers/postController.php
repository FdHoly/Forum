<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\Groups;
use App\Models\Pengumuman;
use App\Models\Rapat;
use App\Models\ReplyUtas;
use App\Models\UserGroup;
use Carbon\Carbon;
use App\Models\Utas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPUnit\TextUI\XmlConfiguration\Group;

class postController extends Controller
{
    //
    public function listpost()
    {
        $allutas = Utas::with(["group", "replyutas", "user"])->where('status', '2')->get();
        $userGroup = UserGroup::where('id_users', Auth::user()->id_users)->pluck('id_groups'); # Auth::user()->id

        $pengumuman = Pengumuman::whereIn('id_groups', $userGroup)->get();
        $acara = Events::whereIn('id_groups', $userGroup)->get();
        $rapat = Rapat::whereIn('id_groups', $userGroup)->get();

        $dataRandom = Groups::select('*')->inRandomOrder()->get()->random(5);
        // return $dataRandom;
        // $dataRandom = Groups::all()->inRandomOrder()->get;
        return view('user.views.index', [

            "DataRandom" => $dataRandom,
            "allutas" => $allutas,
            "pengumuman" => $pengumuman,
            "acara" => $acara,
            "rapat" => $rapat,
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
}
