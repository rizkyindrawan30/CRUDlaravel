<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class databuku extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_buku', 'judul_buku', 'penerbit', 'pengarang', 'jumlah_hal', 'no_rak', 'ISBN', 'tahun_terbit'
    ];
}
