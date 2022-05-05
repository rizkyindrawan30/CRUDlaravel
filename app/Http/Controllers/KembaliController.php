<?php

namespace App\Http\Controllers;

use App\Models\peminjaman;
use Illuminate\Http\Request;

class KembaliController extends Controller
{
    public function pengembalian()
    {
        $peminjaman = peminjaman::all();
        $title = "Data Pengembalian Buku";
        return view('admin.pinjam.pengembalianbuku', compact('peminjaman', 'title'));
    }
}
