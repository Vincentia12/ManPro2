@extends('layouts/index')
@section('content')
@section('judul')
{{'Laporan Data Tanah'}}
@endsection


<!-- Content Row -->
<div class="card shadow mb-3 ">
    <div class="card-header py-2 " style="background-color: #40B9CB;">
        <h6 class="m-0 font-weight-bold text-white text-center">Tabel Data Tanah</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
        </div>

        <table id="data1" class="table table-bordered" cellspacing="0">
            <thead>
                <tr>
                    <th>
                        <center>No.</center>
                    </th>
                    <th>
                        Jenis Cluster
                    </th>
                    <th>
                        Blok / Nomor Rumah
                    </th>
                    <th>
                        Nama Pemilik
                    </th>
                    <th>
                        <center>Action</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pemilik as $item)
                <tr>
                    <td>
                        <center>{{ ++$i }}.</center>
                    </td>
                    <td>
                        {{ $item->tanah->jenis_klaster }}
                    </td>
                    <td>
                        {{ $item->tanah->blok }} / {{ $item->tanah->no_rumah }}
                    </td>
                    <td>
                        {{ $item->nama }}
                    </td>
                    <td>
                        <center>
                            <form action="{{ route('pemilik.destroy',$item->id) }}" method="POST">

                                <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#modalDetailPemilik{{$item->id}}">
                                    Detail
                                </button>
                                <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#modalEditPemilik{{$item->id}}">
                                    Edit
                                </button>
                                @csrf
                                @method('DELETE')

                                <button type=" submit" class="btn btn-danger btn-md">
                                    Hapus
                                </button>
                            </form>
                        </center>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

<!-- Modal Edit Tanah -->
@foreach ( $pemilik as $pmk )
<div class="modal fade" id="modalEditPemilik{{$pmk->id}}" tabindex="-1" role="dialog" aria-labelledby="modalEditPemilikLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><b>Edit Data Pemilik</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @csrf
                @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif
                <form method="POST" action="{{ url('pemilik/update', $pmk->id) }}">
                    @csrf
                    <div class="mb-4">
                        <label for="message-text" class="col-form-label">Jenis Cluster</label>
                        <select class="form-control" name="jenis_klaster">
                            <option value="{{$pmk->jenis_klaster}}">-{{ $pmk->tanah->jenis_klaster }} Blok {{ $pmk->tanah->blok }} / {{ $pmk->tanah->no_rumah }}</option>
                            <option value=""></option>
                            <option value="">Pilih Jenis Cluster</option>
                            @foreach ($tanah as $item)
                            <option value="{{$item->id}}">{{ $item->jenis_klaster}} Blok {{ $item->blok}}</option>
                            @endforeach
                        </select>
                        <small class="text-danger">{{ $errors->first('jenis_klaster') }}</small>
                    </div>
                    <div class="mb-4">
                        <label for="message-text" class="col-form-label">Nama Pemilik</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $pmk->nama }}">
                        <small class="text-danger">{{ $errors->first('nama') }}</small>
                    </div>
                    <div class="mb-4">
                        <label for="message-text" class="col-form-label">Nomor KTP</label>
                        <input type="text" class="form-control" id="no_ktp" name="no_ktp" value="{{ $pmk->no_ktp }}">
                        <small class="text-danger">{{ $errors->first('no_ktp') }} </small>
                    </div>
                    <div class="mb-4">
                        <label for="message-text" class="col-form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{ $pmk->tempat_lahir }}">
                        <small class="text-danger">{{ $errors->first('tempat_lahir') }} </small>
                    </div>
                    <div class="mb-4">
                        <label for="message-text" class="col-form-label">Tanggal Lahir</label>
                        <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ $pmk->tanggal_lahir }}">
                        <small class="text-danger">{{ $errors->first('tanggal_lahir') }}</small>
                    </div>
                    <div class="mb-4">
                        <label for="message-text" class="col-form-label">Pekerjaan</label>
                        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="{{ $pmk->pekerjaan }}">
                        <small class="text-danger">{{ $errors->first('pekerjaan') }}</small>
                    </div>
                    <div class="mb-4">
                        <label for="message-text" class="col-form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $pmk->alamat }}">
                        <small class="text-danger">{{ $errors->first('alamat') }}</small>
                    </div>
                    <div class="mb-4">
                        <label for="message-text" class="col-form-label">Nomor Telepon</label>
                        <input type="text" class="form-control" id="no_tlp" name="no_tlp" value="{{ $pmk->no_tlp }}">
                        <small class="text-danger">{{ $errors->first('no_tlp') }}</small>
                    </div>

                    <div class="modal-footer mt-3">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary "><i class="fa fa-save"></i> Update Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach

<!-- Modal Detail Pemilik -->
@foreach ( $pemilik as $pm )
<div class="modal fade" id="modalDetailPemilik{{$pm->id}}" tabindex="-1" role="dialog" aria-labelledby="modalEditPemilikLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><b>Detail Data Pemilik</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @csrf
                @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif
                <table class="" style="margin:20px auto;" id="dataTable" width="100%" cellspacing="0">
                    <div class="mb-4">
                        <div class="form-group">
                            <tr>
                                <td>Jenis Cluster / Blok</td>
                                <td>:</td>
                                <td>{{ $pm->tanah->jenis_klaster }} Blok {{ $pm->tanah->blok }} / {{ $pm->tanah->no_rumah }} </td>
                            </tr>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <tr>
                                <td>Nama Pemilik</td>
                                <td>:</td>
                                <td>{{ $pm->nama }}</td>
                            </tr>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <tr>
                                <td>Nomor KTP</td>
                                <td>:</td>
                                <td>{{ $pm->no_ktp }}</td>
                            </tr>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <tr>
                                <td>Tempat Lahir</td>
                                <td>:</td>
                                <td>{{ $pm->tempat_lahir }}</td>
                            </tr>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td>:</td>
                                <td>{{ $pm->tanggal_lahir }}</td>
                            </tr>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <tr>
                                <td>Pekerjaan</td>
                                <td>:</td>
                                <td>{{ $pm->pekerjaan }}</td>
                            </tr>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td>{{ $pm->alamat }}</td>
                            </tr>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <tr>
                                <td>Telephone</td>
                                <td>:</td>
                                <td>{{ $pm->no_tlp }}</td>
                            </tr>
                        </div>
                    </div>


                </table>
            </div>
            <div class="modal-footer mt-3">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
@endforeach






@endsection