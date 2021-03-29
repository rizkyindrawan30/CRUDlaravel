<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatabukuController extends Controller
{
    function index()
    {
        $title = "Perpustakaan";
        return view('admin.dashboard', compact('title'));
    }
}
