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

        <table id="data1" class="table table-bordered" cellspacing="0" style="text-align: center">
            {{-- <thead style="background-color: #9eb0b3; "> --}}
            <thead>
                <tr>
                    <th>
                        <center>No.</center>
                    </th>
                    <th>
                        <center>Jenis Cluster</center>
                    </th>
                    <th>
                        <center>Lebar</center>
                    </th>
                    <th>
                        <center>Panjang</center>
                    </th>
                    <th>
                        <center>Luas</center>
                    </th>
                    <th>
                        <center>Blok</center>
                    </th>
                    <th>
                        <center>Nomor Rumah</center>
                    </th>
                    <th>
                        <center>Harga</center>
                    </th>
                    <th>
                        <center>Action</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tanah as $tn)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $tn->jenis_klaster }}</td>
                    <td>{{ $tn->lebar }}</td>
                    <td>{{ $tn->panjang}}</td>
                    <td>{{ $tn->luas}}</td>
                    <td>{{ $tn->blok}}</td>
                    <td>{{ $tn->no_rumah}}</td>
                    <td>{{ $tn->harga}}</td>
                    <td>
                        <center>
                            <form action="{{ route('tanah.destroy',$tn->id) }}" method="POST">

                                <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#modalDetailTanah{{$tn->id}}">
                                    Detail
                                </button>
                                <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#modalEditTanah{{$tn->id}}">
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
@foreach ( $tanah as $tnh )
<div class="modal fade" id="modalEditTanah{{$tnh->id}}" tabindex="-1" role="dialog" aria-labelledby="modalEditTanahLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><b>Edit Data Pengadaan</b></h5>
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
                <form method="POST" action="{{ url('tanah/update', $tnh->id) }}">
                    @csrf
                    <div class="mb-4">
                        <label for="message-text" class="col-form-label">Jenis Cluster</label>
                        <select class="form-control" name="jenis_klaster">
                            <option value="{{$tnh->jenis_klaster}}">-{{ $tnh->jenis_klaster }} </option>
                            <option value=""></option>
                            <option value="">Pilih Jenis Cluster</option>
                            <option value="Anggrek">Anggrek</option>
                            <option value="Jasmine">Jasmine</option>
                            <option value="Maple">Maple</option>
                        </select>
                        <small class="text-danger">{{ $errors->first('jenis_klaster') }}</small>
                    </div>
                    <div class="mb-4">
                        <label for="message-text" class="col-form-label">Lebar</label>
                        <input type="text" class="form-control" id="lebar" name="lebar" value="{{ $tnh->lebar }}">
                        <small class="text-danger">{{ $errors->first('lebar') }}</small>
                    </div>
                    <div class="mb-4">
                        <label for="message-text" class="col-form-label">Panjang</label>
                        <input type="text" class="form-control" id="panjang" name="panjang" value="{{ $tnh->panjang }}">
                        <small class="text-danger">{{ $errors->first('panjang') }} </small>
                    </div>
                    <div class="mb-4">
                        <label for="message-text" class="col-form-label">Luas</label>
                        <input type="text" class="form-control" id="luas" name="luas" value="{{ $tnh->luas }}">
                        <small class="text-danger">{{ $errors->first('luas') }} </small>
                    </div>
                    <div class="mb-4">
                        <label for="message-text" class="col-form-label">Blok</label>
                        <input type="text" class="form-control" id="blok" name="blok" value="{{ $tnh->blok }}">
                        <small class="text-danger">{{ $errors->first('blok') }}</small>
                    </div>
                    <div class="mb-4">
                        <label for="message-text" class="col-form-label">Nomor Rumah</label>
                        <input type="text" class="form-control" id="no_rumah" name="no_rumah" value="{{ $tnh->no_rumah }}">
                        <small class="text-danger">{{ $errors->first('no_rumah') }}</small>
                    </div>
                    <div class="mb-4">
                        <label for="message-text" class="col-form-label">Harga Unit</label>
                        <input type="text" class="form-control" id="harga" name="harga" value="{{ $tnh->harga }}">
                        <small class="text-danger">{{ $errors->first('harga') }}</small>
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

<!-- Modal Detail Tanah -->
@foreach ( $tanah as $list )
<div class="modal fade" id="modalDetailTanah{{$list->id}}" tabindex="-1" role="dialog" aria-labelledby="modalEditJadwalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><b>Detail Data Jadwal</b></h5>
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
                                <td>Jenis Cluster</td>
                                <td>:</td>
                                <td>{{ $list->jenis_klaster }}</td>
                            </tr>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <tr>
                                <td>Lebar</td>
                                <td>:</td>
                                <td>{{ $list->lebar }}</td>
                            </tr>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <tr>
                                <td>Panjang</td>
                                <td>:</td>
                                <td>{{ $list->panjang }}</td>
                            </tr>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <tr>
                                <td>Luas</td>
                                <td>:</td>
                                <td>{{ $list->luas }}</td>
                            </tr>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <tr>
                                <td>Blok / Nomor</td>
                                <td>:</td>
                                <td>{{ $list->blok }} / {{ $list->no_rumah }}</td>
                            </tr>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <tr>
                                <td>Harga Unit</td>
                                <td>:</td>
                                <td>{{ $list->harga }}</td>
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