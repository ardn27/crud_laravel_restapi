<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjaman extends Model
{
    protected $table = 'pinjaman';
    protected $primaryKey = 'id';
    protected $fillable = ['mahasiswa_id', 'buku_id', 'tgl_pinjam', 'kondisi'];
    use HasFactory;

    public function mahasiswa(){
        return $this->belongsTo(Mahasiswa::class, 'mahasiswa_id', 'id');
    }

    public function buku(){
        return $this->belongsTo(Buku::class, 'buku_id', 'id');
    }
}
