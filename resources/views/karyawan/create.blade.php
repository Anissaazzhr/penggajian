@extends('layouts.temp')

@section('title')
List Karyawan
@endsection
@section('content')



<div class="row">
    <!-- Column -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">Tambah Data Karyawan</h4>
                <div class="text-right">
                
                </div>
               {!! Form::open(['url' => route('karyawans.store'), 'method' => 'post','files' => 'true', 'enctype' => 'multipart/form-data', 'class' => 'form-horizontal']) !!}
                    @include('karyawans._form')
                    {!! Form::close() !!}
               
            </div>
        </div>
    </div>
    <!-- Column -->
 </div>
@endsection
