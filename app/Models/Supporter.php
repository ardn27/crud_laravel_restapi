<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supporter extends Model
{
    protected $table = 'supporters';
    protected $fillable=['id_supporter', 'nama', 'alamat', 'tgl_daftar', 'no_telepon', 'foto'];
    protected $fillie;
    use HasFactory;
}
