<?php

namespace App\Http\Controllers;

use App\Models\pemilik;
use App\Models\tanah;
use Illuminate\Http\Request;

class TanahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemilik = Pemilik::all();
        $tanah = Tanah::all();

        return view(
            'admin.tanah',
            ['pemilik' => $pemilik],
            ['tanah' => $tanah],
        )->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tanah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            // 'id' => 'required',
            'jenis_klaster' => 'required',
            'lebar' => 'required',
            'panjang' => 'required',
            'luas' => 'required',
            'blok' => 'required',
            'no_rumah' => 'required',
            'harga' => 'required'
        ]);

        Tanah::create($request->post());

        return redirect()->to('tanah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tanah $tanah)
    {
        return view('admin.tanah', compact('tanah'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(tanah $tanah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(tanah $tanah)
    {
        $tanah->delete();

        return redirect()->route('tanah.index')
            ->with('success', 'Tanah Berhasil Dihapus!');
    }
}
