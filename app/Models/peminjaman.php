<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_peminjaman', 'tanggal_pinjam', 'tanggal_kembali', 'id_buku', 'id_agt'
    ];
}
