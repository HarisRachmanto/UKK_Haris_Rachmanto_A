<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;
    protected $table = 'pengaduans';
    public $primarykey = 'id_pengaduan';
    protected $fillable = ['id_pengaduan','tgl_pengaduan','nik','isi_laporan','foto','status'];

    public function tanggapan(){
        return $this->hasOne(Tanggapan::class, 'id_pengaduan');
    }
}
