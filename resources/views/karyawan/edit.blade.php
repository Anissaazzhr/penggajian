@extends('layouts.temp')

@section('title')
List karyawan
@endsection
@section('content')
<div class="row">
    <!-- Column -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">Ubah Data Karyawan</h4>
                <div class="text-right">
                
                </div>
                    {!! Form::model($karyawan, ['url' => route('karyawans.update', $karyawan->id), 'method' => 'put', 'class' => 'form-horizontal']) !!}
                    @include('karyawans._form')
                    {!! Form::close() !!}
                </div>
        </div>
    </div>
</div>
@endsection
