<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswas';
    protected $fillable = ['nama', 'nbi', 'jurusan', 'tgl_lahir', 'alamat', 'jenis_kelamin', 'image'];
    public $timestamps = false;
    protected $fillie;
    use HasFactory;
}
