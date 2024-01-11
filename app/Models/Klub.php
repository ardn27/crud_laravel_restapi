<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klub extends Model
{
    protected $table = 'klubs';
    protected $fillable = ['id_klub','logo_klub', 'nama_klub', 'tgl_berdiri', 'kota_klub', 'peringkat', 'harga_klub'];
    protected $fillie;
    use HasFactory;

}
