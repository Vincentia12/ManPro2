@extends('layouts/index')
@section('content')
    @section('title')
        {{'halaman admin'}}
    @endsection
    @section('judul')
        {{'Dashboard'}}
    @endsection
<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-4 col-md-7 mb-5">
        <div class="card h-100 py-2"  style="border-left-width: 10px; border-left-color: #6d6d6d">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="h3 mb-0 font-weight-bold text-gray-900">7</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Total Tanah</div>
                    </div>
                    <div class="col-auto">
                        {{-- <i class="fa-duotone fa-circle-caret-right"></i> --}}
                        <i class="fa-solid fa-circle-chevron-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-4 col-md-7 mb-5">
        <div class="card h-100 py-2"  style="border-left-width: 10px; border-left-color: #6d6d6d">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="h3 mb-0 font-weight-bold text-gray-900">7</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Total Tanah yang Sudah ada Pemilik</div>
                    </div>
                    <div class="col-auto">
                        <i class="fa-solid fa-circle-chevron-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-4 col-md-7 mb-5">
        <div class="card h-100 py-2"  style="border-left-width: 10px; border-left-color: #6d6d6d">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="h3 mb-0 font-weight-bold text-gray-900">7</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Total Tanah Belum Ada Pemilik</div>
                    </div>
                    <div class="col-auto">
                        <i class="fa-solid fa-circle-chevron-right"></i>
                    </div>
                </div>
            </div>
        </div>         
    </div>

</div>

<!-- Content Row -->
{{-- <div class="row">
    <div class="card shadow mb-4  text-center my-3 col-12">
        <div class="col-xl-4 col-md-7 mb-5">
            <table border="1">
                <tr>
                    <td height="50"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td wight="50"></td>
                    <td height="50"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>
</div> --}}


{{-- <div class="row">

    <!-- Area Chart -->
    <div class="card shadow mb-4  text-center my-3 col-12">
        <div class="card-header text-white" style="background-color: #40B9CB;">
            Index Aset Terdata
        </div>
        <canvas id="myChart" width="400" height="100"></canvas>
        <div class="card-footer text-white" style="background-color: #40B9CB;">
            2 days ago
        </div>
    </div>
</div> --}}

                    
@endsection