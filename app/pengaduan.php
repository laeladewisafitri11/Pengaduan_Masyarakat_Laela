<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengaduan extends Model
{
    public $timestamps = 'false';
    protected $primaryKey = 'id_pengaduan';
    protected $table = 'pengaduans';
    protected $fillable = ['tgl_pengaduan', 'nik', 'isi_laporan', 'foto', 'status'];
}