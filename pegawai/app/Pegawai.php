<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'pegawai';
    protected $fillable = [
        'nip',
        'nama_pegawai',
        'tempat_lahir',
        'alamat',
        'tanggal_lahir',
        'jenis_kelamin',
        'jabatan',
    ];
}
