<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Pengaduan;

class Masyarakat extends Authenticatable
{
    use HasFactory;
    protected $table = 'masyarakats';
    protected $fillable = ['nik','nama','username','password','telp'];

    public function pengaduan()
    {
        return $this->belongsTo(Pengaduan::class);
    }
}
