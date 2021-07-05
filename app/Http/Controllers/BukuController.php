<?php

namespace App\Http\Controllers;

use App\Models\databuku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use League\CommonMark\Inline\Element\Strong;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $databuku = databuku::latest()->paginate(4);
        $title = "Data Buku";
        return view('admin.databuku', compact('title', 'databuku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Input Buku";
        return view('admin.inputbuku', compact('title'));
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
            'judul_buku'    => 'required',
            'pengarang'     => 'required',
            'bahasa'        => 'required',
            'penerjemah'    => 'required',
            'penerbit'      => 'required',
            'tempat_terbit' => 'required',
            'cetakan'       => 'required',
            'tahun_terbit'  => 'required',
            'kode_lemari'   => 'required',
            'jumlah_buku'   => 'required',
            'ISBN'          => 'required',
            'klasifikasi'   => 'required',
            'kode_buku'     => 'required'
        ], $messege);
        $validasi['id_buku'] = Auth::id();
        databuku::create($validasi);
        return redirect('databuku')->with('success', 'Task Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $databuku = databuku::find($id);
        $title = "Detail Buku";
        return view('admin.detailbuku', compact('databuku', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $databuku = databuku::find($id);
        $title = "Edit Buku";
        return view('admin.inputbuku', compact('title', 'databuku'));
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
            'judul_buku'    => 'required',
            'pengarang'     => 'required',
            'bahasa'        => 'required',
            'penerjemah'    => 'required',
            'penerbit'      => 'required',
            'tempat_terbit' => 'required',
            'cetakan'       => 'required',
            'tahun_terbit'  => 'required',
            'kode_lemari'   => 'required',
            'jumlah_buku'   => 'required',
            'ISBN'          => 'required',
            'klasifikasi'   => 'required',
            'kode_buku'     => 'required'
        ], $messege);
        $validasi['id_buku'] = Auth::id();
        databuku::where('id', $id)->update($validasi);
        return redirect('databuku')->with('success', 'Data berhasil tersimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $databuku = databuku::find($id);
        if ($databuku != null) {
            databuku::where('id', $id)->delete();
        }
        return redirect('databuku')->with('success', 'Data berhasil diHapus');
    }
}
