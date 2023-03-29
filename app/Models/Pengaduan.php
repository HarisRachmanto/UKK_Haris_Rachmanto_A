<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Masyarakat;

class Pengaduan extends Model
{
    use HasFactory;
    protected $table = 'pengaduans';
    public $primaryKey = 'id_pengaduan';
    protected $fillable = ['akses','nama','nik','isi_laporan','foto','status'];

    public function GetDataMasyarakat()
    {
        return $this->belongsTo(Masyarakat::class, 'nama', 'nama');
    }

    public function getDataTanggapan()
    {
        return $this->belongsTo(Tanggapan::class, 'id_pengaduan');
    }

    public function tanggapan(){
        return $this->hasOne(Tanggapan::class, 'id_pengaduan');
    }
}
