@extends('layouts.temp')

@section('title')
List Karyawan
@endsection
@section('content')
<div class="row">
    <div class="col-sm 12">
        <div class="card">
            <div class="card-block">
                <span class="pull-right"><a href="{{ url('/karyawan/karyawan/create') }}" class="btn btn-primary">Tambah Data Karyawa</a></span>
            </div>
        </div>
    </div>
</div>
<div class="row">

@foreach($motors as $data)

    <!-- Column -->
<!--     <div class="col-sm-4">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">{{$data->nik}}</h4>
                <div class="text-right">
                
                </div>
                <span class="text-primary">Id User</span><span class="pull-right">{{$data->id_user}}</span><br>
                <span class="text-primary">Id Jabatan</span><span class="pull-right">{{$data->id_jabatan}}</span><br>
                <span class="text-primary">Id Golongan</span><span class="pull-right">{{$data->id_golongan}}</span><br>
                <span class="text-primary">Gambar</span><span class="pull-right">{{$data->gambar}}</span><br>               
            </div>
        </div>
    </div> -->
    <div class="col-lg-4 col-xlg-3 col-md-5">
        <div class="card">
            <div class="card-block">
                <center class="m-t-30"> <img width="150" class="img-circle" src="{{asset('/img/'.$data->gambar)}}" style="width:160px;height:160px">
                    <h4 class="card-title m-t-10">{{$data->nik}}</h4>
                    </center>
                    <div ?>
                       <span class="text-primary">Id User</span><span class="pull-right">{{$data->id_user}}</span><br>
                    <span class="text-primary">Id Jabatan</span><span class="pull-right">{{$data->id-jabatan}}</span><br>
                    <span class="text-primary">Id Golongan</span><span class="pull-right">{{$data->id-golongan}}</span><br>
                    <span class="text-primary">gambar</span><span class="pull-right">{{$data->gambar}}</span><br>
                    </div>

                   <br>
                <span class="pull-right"><a href="" class="btn btn-danger">Transaksi</a></span> <span class="pull-left"><a href="{{ route('karyawans.edit', $data->id) }}"  class="btn btn-success">Ubah</a></span> <!-- <span <a href="{{ route('karyawans.destroy', $data->id) }}"  class="btn btn-warning">Hapus</a></span>
 -->            
            </div>
        </div>
    </div>
@endforeach
    <!-- Column -->
 </div>
@endsection
