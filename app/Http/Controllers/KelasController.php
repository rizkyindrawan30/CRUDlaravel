<?php

namespace App\Http\Controllers;

use App\Models\anggota;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    function kelasx(Request $request){
        $kelasx = anggota::join('jekels', 'anggotas.id_jekel', '=', 'jekels.id_jk')
        ->join('kelas', 'anggotas.kelas', '=', 'kelas.id_kls')->where('kelas', '=', '1')
        ->get();
        $title = "Anggota Pepustakaan";
        return view('admin.kelas.kelasx', compact('kelasx', 'title'));
    }
    function kelasxi(Request $request){
        $kelasx = anggota::join('jekels', 'anggotas.id_jekel', '=', 'jekels.id_jk')
        ->join('kelas', 'anggotas.kelas', '=', 'kelas.id_kls')->where('kelas', '=', '2')
        ->get();
        $title = "Anggota Pepustakaan";
        return view('admin.kelas.kelasx', compact('kelasx', 'title'));
    }
    function kelasxii(Request $request){
        $kelasx = anggota::join('jekels', 'anggotas.id_jekel', '=', 'jekels.id_jk')
        ->join('kelas', 'anggotas.kelas', '=', 'kelas.id_kls')->where('kelas', '=', '3')
        ->get();
        $title = "Anggota Pepustakaan";
        return view('admin.kelas.kelasx', compact('kelasx', 'title'));
    }
}
