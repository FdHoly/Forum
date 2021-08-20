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
    //->where('id_groups', function () {})
    public function listpost()
    {
        $allutas = Utas::with(["group", "replyutas", "user"])->orderBy('created_at', 'desc')->get();
        $userGroup = UserGroup::where('id_users', Auth::user()->id_users)->pluck('id_groups'); # Auth::user()->id
        $admAuth = UserGroup::where('id_users', Auth::user()->id_users)->get(); # Auth::user()->id

        $group = Groups::whereIn('id_groups', $userGroup)->get();
        $pengumuman = Pengumuman::whereIn('id_groups', $userGroup)->get();
        $acara = Events::whereIn('id_groups', $userGroup)->get();
        $rapat = Rapat::whereIn('id_groups', $userGroup)->get();

        $dataRandom = Groups::select('*')->inRandomOrder()->get()->random(5);

        // return $admAuth;

        return view('user.views.index', [
            "admAuth" => $admAuth,
            "group" => $group,
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
        $post->id_users = Auth::user()->id_users;

        $post->save();
        return redirect()->back();
        // return $request;
    }

    public function createPost(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
            'id_groups' => 'required|exists:groups,id_groups',
            'status' => 'required',
        ]);


        $post = new Utas();
        $post->judul = $request->input('judul');
        $post->konten = $request->input('konten');
        $post->status = $request->input('status');
        $post->id_users = Auth::user()->id_users;
        $post->id_groups = $request->input('id_groups');

        if ($request->image_url) {

            $path = $request->image_url->store('post', 'public');
            $post->image_url = $path;
        }
        $post->save();
        return redirect()->route('index');
    }
}
