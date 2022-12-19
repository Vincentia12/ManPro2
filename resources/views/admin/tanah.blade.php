@extends('layouts/index')
@section('content')
@section('judul')
{{'Input Data / Tersertifikasi '}}
@endsection
@section('title')
{{'Input Data yang Tersertifikasi '}}
@endsection

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('tanah.store') }}" method="POST">
    @csrf

    <div class="card shadow mb-3 ">
        <div class="card-header py-2 " style="background-color: #C8C8C8;">
            <h6 class="m-0 font-weight-bold text-white text-center">Masukkan Data Aset Tanah</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="" style="margin:20px auto;" id="dataTable" width="100%" cellspacing="0">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group row">
                            <label for="jenis_klaster" class="col-sm-2 col-form-label">Jenis Cluster</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="jenis_klaster" name="jenis_klaster" placeholder="Masukkan ID Tanah">
                            </div>
                            <small class="text-danger">{{ $errors->first('jenis_klaster') }}</small>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group row">
                            <label for="lebar" class="col-sm-2 col-form-label">Lebar</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="lebar" name="lebar" placeholder="Masukkan Lebar (Cm)">
                            </div>
                            <small class="text-danger">{{ $errors->first('lebar') }}</small>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group row">
                            <label for="panjang" class="col-sm-2 col-form-label">Panjang</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="panjang" name="panjang" placeholder="Masukkan Panjang (Cm)">
                            </div>
                            <small class="text-danger">{{ $errors->first('panjang') }}</small>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group row">
                            <label for="luas" class="col-sm-2 col-form-label">Luas</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="luas" name="luas" placeholder="Masukkan Luas (m2)">
                            </div>
                            <small class="text-danger">{{ $errors->first('luas') }}</small>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group row">
                            <label for="blok" class="col-sm-2 col-form-label">Blok</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="blok" name="blok" placeholder="Masukkan Blok">
                            </div>
                            <small class="text-danger">{{ $errors->first('blok') }}</small>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group row">
                            <label for="no_rumah" class="col-sm-2 col-form-label">Nomor Rumah</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="no_rumah" name="no_rumah" placeholder="Masukkan Nomor Rumah">
                            </div>
                            <small class="text-danger">{{ $errors->first('no_rumah') }}</small>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group row">
                            <label for="harga" class="col-sm-2 col-form-label">Harga Unit</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="harga" name="harga" placeholder="Masukkan Harga">
                            </div>
                            <small class="text-danger">{{ $errors->first('harga') }}</small>
                        </div>
                    </div>

                </table>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                    <div class="form-group text-center">
                        <tr>
                            <td>
                                <br>
                                <button type="submit" class="btn btn-success text-center">Submit</button>
                            </td>
                        </tr>
                    </div>
                </div>
            </div>
        </div>
    </div>

</form>

@endsection