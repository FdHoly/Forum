<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\Pengumuman;
use App\Models\Rapat;
use Carbon\Carbon;
use App\Models\Utas;
use Illuminate\Http\Request;

class postController extends Controller
{
    //
    public function listpost()
    {
        $data1 = Utas::all();
        $data2 = Pengumuman::all();
        $data3 = Events::all();
        $data4 = Rapat::all();
        return view('user.views.index', [
            "Data1" => $data1,
            "Data2" => $data2,
            "Data3" => $data3,
            "Data4" => $data4
        ]);
    }
}
