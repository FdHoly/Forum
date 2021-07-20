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
        return view('user.views.index', [
            "Data1" => $data1,
            "Data2" => $data2,
            "Data3" => $data3,
            "Data4" => $data4,
            "Data5" => $data5,
            "Data6" => $data6
        ]);
    }
}
