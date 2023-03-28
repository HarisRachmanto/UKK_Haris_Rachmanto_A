<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Petugas extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table = 'petugas';
    public $primaryKey = 'id_petugas';
    protected $fillable = ['nama_petugas','username','password','telp','level'];
}
