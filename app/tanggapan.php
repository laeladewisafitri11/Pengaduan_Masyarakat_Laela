<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tanggapan extends Model
{
    public $timestamps = 'false';
    protected $primaryKey = 'id_tanggapan';
    protected $table = 'tanggapans';
    protected $fillable = ['id_pengaduan','tgl_tanggapan', 'tanggapan', 'nik'];
}