<?php

namespace App\Http\Controllers;

use App\Models\anggota;
use App\Models\jekel;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function GuzzleHttp\Promise\all;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggota = anggota::join('jekels', 'anggotas.id_jekel', '=', 'jekels.id_jk')
            ->join('kelas', 'anggotas.kelas', '=', 'kelas.id_kls')
            ->paginate(5);
        $title = "Anggota Pepustakaan";
        return view('admin.anggotaperpus', compact('anggota', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::all();
        $jekel = jekel::all();
        $title = "Input Anggota Perpustakaan";
        return view('admin.inputanggota', compact('title', 'jekel', 'kelas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messege = [
            'required' => 'Kolom :attribute Harus Lengkap',
            'date'     => 'Kolom :attribute Harus Tanggal',
            'numeric'  => 'Kolom :attribute Harus Angka',
        ];
        $validasi = $request->validate([
            'NIS'         => 'required|unique:anggotas|max:255',
            'nama'        => 'required',
            'kelas'       => 'required',
            'id_jekel'    => 'required',
            'jurusan'     => 'required',
            'alamat'      => 'required'
        ], $messege);
        $validasi['id_anggota'] = Auth::id();
        anggota::create($validasi);
        return redirect('anggotaperpus')->with('success', 'Data berhasil tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $anggota = anggota::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelas = Kelas::all();
        $jekel = jekel::all();
        $anggota = anggota::find($id);
        $title = "Edit Data Anggota";
        return view('admin.inputanggota', compact('title', 'anggota', 'jekel', 'kelas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $messege = [
            'required' => 'Kolom :attribute Harus Lengkap',
            'date'     => 'Kolom :attribute Harus Tanggal',
            'numeric'  => 'Kolom :attribute Harus Angka',
        ];
        $validasi = $request->validate([
            'NIS'         => 'required',
            'nama'        => 'required',
            'kelas'       => 'required',
            'id_jekel'    => 'required',
            'jurusan'     => 'required',
            'alamat'      => 'required'
        ], $messege);
        $validasi['id_anggota'] = Auth::id();
        anggota::where('id', $id)->update($validasi);
        return redirect('anggotaperpus')->with('success', 'Data berhasil edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $anggota = anggota::find($id);
        if ($anggota != null) {
            anggota::where('id', $id)->delete();
        }
        return redirect('anggotaperpus')->with('success', 'Data berhasil dihapus');
    }
}
