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
        $data1 = Utas::all();
        $data2 = Pengumuman::all();
        $data3 = Events::all();
        $data4 = Rapat::all();
        $data5 = ReplyUtas::all();
        $data6 = Groups::all();
        $dataR = Utas::with(["ReplyUtas"])->get();
        return view('user.views.index', [
            "Data1" => $data1,
            "Data2" => $data2,
            "Data3" => $data3,
            "Data4" => $data4,
            "Data5" => $dataR,
            "Data6" => $data6
        ]);
        // return $dataR;
    }
    // public function reply($id)
    // {
    //     $dataR = ReplyUtas::with('user', 'replyutas.user', 'group')->where('id_groups', $id)->get(); // Ini GET Data berisi Utas per Group with Reply nya.
    //     return view('user.views.index', compact('dataR'));
    // }
}
