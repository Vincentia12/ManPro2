<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pemilik;
use App\Models\tanah;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware(['auth', 'verified']);
        $this->middleware(['auth']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');
        
            $data = Tanah::all();
            $pemilik = Pemilik::count();
            $tanah = Tanah::count();
    
            return view(
                'home',
                // 'admin.input_pengadaan',
                ['tanah' => $tanah],
                ['pemilik' => $pemilik],
                ['data' => $data]
                
            );
            // dd($data);
    }
    public function lokasi()
    {
        $tanahs = Tanah::all();

        return view('home',['tanahs' => $tanahs]);
    }
}
