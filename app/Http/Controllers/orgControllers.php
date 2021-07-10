<?php

namespace App\Http\Controllers;
use App\Models\Groups;
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
}
