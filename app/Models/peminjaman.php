<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_peminjaman', 'tanggal_pinjam', 'tanggal_kembali', 'kode_buku', 'judul_buku', 'NIS', 'nama', 'kelas', 'jurusan'
    ];

    public function getCreatedAtAttribute()
    {
        return peminjaman::parse($this->attributes['tanggal_pinjam'])->translatedFormat('1, d F Y');
    }
}
