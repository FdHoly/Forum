<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\Groups;
use App\Models\Pengumuman;
use App\Models\Rapat;
use App\Models\ReplyUtas;
use App\Models\Report;
use App\Models\UserGroup;
use Carbon\Carbon;
use App\Models\Utas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPUnit\TextUI\XmlConfiguration\Group;

class postController extends Controller
{
    public function listpost(Request $request)
    {
        $userGroup = UserGroup::where('id_users', Auth::user()->id_users)->pluck('id_groups'); # Auth::user()->id
        $univGroup = Groups::where('id_univ', Auth::user()->id_univ)->pluck('id_groups'); # Auth::user()->id


        // return $univGroup;
        // return dd($request->input('filter'));

        if ($userGroup->isEmpty() || ($userGroup->isEmpty() && $request->has('filter'))) {
            $allutas = [];
            $admAuth = [];
            $pengumuman = [];
            $group =  [];
            $rapat = [];
            $acara = [];
        } else {
            if ($request->has('filter')) {
                $idUniv = Auth::user()->id_univ;
                $allutas = Utas::with(["group", "replyutas", "user"])->whereIn('id_groups', $univGroup)->latest()->get();
            } else {
                $allutas = Utas::with(["group", "replyutas", "user"])->whereIn('id_groups', $userGroup)->latest()->get();
            }
            $admAuth = UserGroup::where('id_users', Auth::user()->id_users)->get(); # Auth::user()->id
            $group = Groups::whereIn('id_groups', $userGroup)->get();
            $pengumuman = Pengumuman::whereIn('id_groups', $userGroup)->latest()->get();
            $acara = Events::whereIn('id_groups', $userGroup)->latest()->get();
            $rapat = Rapat::whereIn('id_groups', $userGroup)->latest()->get();
        }
        // $dataRandom = Groups::select('*')->inRandomOrder()->get()->random(5);
        $dataRandom = Groups::select('*')->inRandomOrder()->limit(5)->get();


        // return $allutas;
        return view('user.views.index', [
            "admAuth" => $admAuth,
            "group" => $group,
            "DataRandom" => $dataRandom,
            "allutas" => $allutas,
            "pengumuman" => $pengumuman,
            "acara" => $acara,
            "rapat" => $rapat,
        ]);
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

    public function replyPost(Request $request, $id)
    {
        $post = new ReplyUtas();

        $post->konten = $request->input('konten');
        $post->id_utas = $id;
        $post->id_users = Auth::user()->id_users;

        $post->save();
        return back();
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

    public function editPost(Request $request, Utas $utas)
    {
        $fields = $request->validate([
            'konten' => 'required',
            'status' => 'required',
        ]);

        $utas->update($fields);
        return back();
    }
    // public function report(Request $request)
    // {
    //     $group = Groups::create(
    //         [
    //             'nama' => $request->nama_grup,
    //             'deskripsi' => $request->deskripsi,
    //             'id_univ' => $request->universitas,
    //         ]
    //     );}

    public function reportPost(Request $request)
    {
        $report = new Report();

        $report->id_utas = $request->input('id_utas');
        $report->id_users = $request->input('id_users');
        $report->id_groups = $request->input('id_groups');
        $report->alasan = $request->input('alasan');

        $report->save();
        return back();
    }
    public function deletePost(Utas $id)
    {
        $id->delete();
        return back();
    }
}
