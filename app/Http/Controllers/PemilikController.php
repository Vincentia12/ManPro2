<?php

namespace App\Http\Controllers;

use App\Models\pemilik;
use App\Models\tanah;
use Illuminate\Http\Request;



class PemilikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tanah = Tanah::all();
        $pemilik = Pemilik::all();

        return view(
            'admin.pemilik',
            // 'admin.input_pengadaan',
            ['tanah' => $tanah],
            ['pemilik' => $pemilik]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pemilik');
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
            'tanah_id' => 'required',
            'nama' => 'required',
            'no_ktp' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'no_tlp' => 'required',
        ]);

        Pemilik::create($request->post());

        return redirect()->route('pemilik.index')
            ->with('success', 'Data Pemilik Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('pemilik.index', compact('pemilik'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.pemilik', compact('pemilik'));
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
        $pemilik = Pemilik::find($id)->update($request->all());

        return back()->with('success', ' Data telah diperbaharui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(pemilik $pemilik)
    {
        $pemilik->delete();

        return redirect()->route('pemilik.index')
            ->with('success', 'Pemilik Berhasil Dihapus!');
    }
}
