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

                                <a class="btn btn-info btn-md" href="{{ route('tanah.show',$tn->id) }}">
                                    Detail
                                </a>
                                <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#modalEditPelaksana{{$tn->id}}">
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
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
    </div>
</div>



</tbody>
</table>
</div>
</div>
</div>
@endsection