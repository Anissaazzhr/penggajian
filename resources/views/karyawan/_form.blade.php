<div class="form-group{{ $errors->has('id') ? ' has-error': '' }}">
    {!! Form::label('id', 'Id', ['class' => 'col-md-2 control-label']) !!}

    <div class="col-md-4">
        {!! Form::text('id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group{{ $errors->has('nik') ? ' has-error': '' }}">
{!! Form::label('nik', 'Nik', ['class' => 'col-md-2 control-label']) !!}

    <div class="col-md-4">
        {!! Form::text('nik', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nik', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group{{ $errors->has('id_jabatan') ? ' has-error': '' }}">
{!! Form::label('id_jabatan', 'Id_jabatan', ['class' => 'col-md-2 control-label']) !!}

    <div class="col-md-4">
        {!! Form::text('id_jabatan', null, ['class' => 'form-control']) !!}
        {!! $errors->first('id_jabatan', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group{{ $errors->has('id_golongan') ? ' has-error': '' }}">
{!! Form::label('id_golongan', 'Id_golongan', ['class' => 'col-md-2 control-label']) !!}

    <div class="col-md-4">
        {!! Form::number('id_golongan', null, ['class' => 'form-control']) !!}
        {!! $errors->first('id_golongan', '<p class="help-block">:message</p>') !!}
    </div>
<div class="form-group{{ $errors->has('gambar') ? ' has-error': '' }}">
    {!! Form::label('gambar', 'Gambar', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-4">
        {!! Form::file('gambar', null, ['class' => 'form-control']) !!}
        @if (isset($karyawan) && $karyawan->gambar)
            <p>
                {!! Html::image(asset('img/'.$karyawan->gambar), null, ['class' => 'img-rounded img-responsive']) !!}
            </p>
        @endif
        {!! $errors->first('gambar', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-4 col-md-offset-2">
        {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
