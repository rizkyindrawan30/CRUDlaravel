<?php

namespace App\Http\Controllers;

use App\Models\peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjaman = peminjaman::latest()->paginate(30);
        $title = "Data Peminjaman Buku";
        return view('admin.pinjam.peminjamanbuku', compact('peminjaman', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $peminjaman = peminjaman::all();
        $title = "Peminjaman Buku";
        return view('admin.pinjam.inputpeminjamanbuku', compact('title', 'peminjaman'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return ($request);
        $messege = [
            'required' => 'Kolom :attribute Harus Lengkap',
            'date'     => 'Kolom :attribute Harus Tanggal',
            'numeric'  => 'Kolom :attribute Harus Angka',
        ];
        $validasi = $request->validate([
            'tanggal_pinjam'    => 'required',
            'tanggal_kembali'   => '',
            'kode_buku'         => 'required',
            'judul_buku'        => '',
            'NIS'               => 'required',
            'nama'              => 'required',
            'kelas'             => 'required',
            'jurusan'           => 'required'
        ], $messege);
        $validasi['id_peminjaman'] = Auth::id();
        peminjaman::create($validasi);
        return redirect('peminjamanbuku1')->with('success', 'Data Peminjaman Berhasil di Tambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peminjamanbuku = peminjaman::find($id);
        $title = "Peminjaman Buku";
        return view('admin.pinjam.updatepeminjamanbuku', compact('title', 'peminjamanbuku'));
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
            'tanggal_pinjam'    => 'required',
            'tanggal_kembali'   => 'required',
            'kode_buku'         => 'required',
            'judul_buku'        => 'required',
            'NIS'               => 'required',
            'nama'              => 'required',
            'kelas'             => 'required',
            'jurusan'           => 'required'
        ], $messege);
        $validasi['id_peminjaman'] = Auth::id();
        peminjaman::where('id', $id)->update($validasi);
        return redirect('pengembalian')->with('success', 'Data Peminjaman Berhasil di Edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peminjaman = peminjaman::find($id);
        if ($peminjaman != null) {
            peminjaman::where('id', $id)->delete();
        }
        return redirect('peminjamanbuku')->with('success', 'Data berhasil dihapus');
    }
}
