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

<form action="{{ route('pemilik.store') }}" method="POST">
    @csrf

    <div class="card shadow mb-3 ">
        <div class="card-header py-2 " style="background-color: #C8C8C8;">
            <h6 class="m-0 font-weight-bold text-white text-center">Masukkan Data Pemilik</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="" style="margin:20px auto;" id="dataTable" width="100%" cellspacing="0">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group row">
                            <label for="tanah_id" class="col-sm-2 col-form-label">Id Tanah</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="tanah_id">
                                    <option> Pilih Kepemilikan </option>
                                    @foreach ($tanah as $item)
                                    <option value="{{$item->id}}">{{ $item->jenis_klaster }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <small class="text-danger">{{ $errors->first('tanah_id') }}</small>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
                            </div>
                            <small class="text-danger">{{ $errors->first('nama') }}</small>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group row">
                            <label for="no_ktp" class="col-sm-2 col-form-label">Nomor KTP</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="no_ktp" name="no_ktp" placeholder="Masukkan Nomor KTP">
                            </div>
                            <small class="text-danger">{{ $errors->first('no_ktp') }}</small>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group row">
                            <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan Tempat Lahir">
                            </div>
                            <small class="text-danger">{{ $errors->first('tempat_lahir') }}</small>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group row">
                            <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="dd/mm/yy">
                            </div>
                            <small class="text-danger">{{ $errors->first('tanggal_lahir') }}</small>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group row">
                            <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Masukkan Pekerjaan">
                            </div>
                            <small class="text-danger">{{ $errors->first('pekerjaan') }}</small>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat">
                            </div>
                            <small class="text-danger">{{ $errors->first('alamat') }}</small>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group row">
                            <label for="no_tlp" class="col-sm-2 col-form-label">Nomor Telepon</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="no_tlp" name="no_tlp" placeholder="Masukkan Nomor telepon">
                            </div>
                            <small class="text-danger">{{ $errors->first('no_tlp') }}</small>
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