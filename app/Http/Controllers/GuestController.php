<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Support\Renderable;
use App\Models\pemilik;
use App\Models\tanah;

class GuestController extends Controller
{
    public function index()
    {
    //     return view('guest');
    // }

    // public function tamu()
    // {
        $tanah = Tanah::all();
        $pemilik = Pemilik::all();

        return view(
            'guest',
            ['pemilik' => $pemilik],
            ['tanah' => $tanah],
        )->with('i', (request()->input('page', 1) - 1) * 5);
    }

}
