<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    protected $fillable = [('id', 'nik', 'id_user', 'id_jabatan', 'id_golongan', 'gambar' ];

    public function id_jabatan()
    {
    	return $this->hasMany('App\Id_jabatan');
    }

    public function id_golongan()
    {
    	return $this->hasMany('App\Id_golongan');
    }
}
