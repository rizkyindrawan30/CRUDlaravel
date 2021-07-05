<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class databuku extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_buku', 'judul_buku', 'pengarang', 'bahasa', 'penerjemah', 'penerbit', 'tempat_terbit', 'cetakan', 'tahun_terbit',
        'kode_lemari', 'jumlah_buku', 'ISBN', 'klasifikasi', 'kode_buku'
    ];
}
