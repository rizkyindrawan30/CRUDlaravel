<?php

namespace App\Http\Controllers;

use App\Models\databuku;
use Illuminate\Http\Request;

class DatabukuController extends Controller
{
    function index()
    {
        $title = "Perpustakaan";
        return view('admin.dashboard', compact('title'));
    }

    function detail($cetakan)
    {
        $buku = databuku::find($cetakan);
        return view('admin.detailbuku', compact('buku'));
    }
}
