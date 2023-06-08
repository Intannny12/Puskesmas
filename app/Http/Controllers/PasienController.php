<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    // menampilkan semua data pasien
    public function index()
    {
       $pasiens = Pasien::all();
        return view('admin.pasien.index',
        [
            'pasiens' =>$pasiens,
        ]);
    }
 
    public function create()
    {
        return view('admin.pasien.create');
    
    }

    //method untuk menyimpan data ke database
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'nama' => 'required|min:3',
            'jk' => 'required',
            'tgl_lahir' => 'required|date',
            'alamat' => 'required',
            'telp' => 'required|numeric',

        ]);

        // Simpan data hasil form ke tabel pasiens
        Pasien::create([
            'nama' => $request->nama,
            'jk' => $request->jk,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
        ]);

        return redirect('/pasien');
    }
    
    // Method untuk menampilkan halaman edit
    public function edit($id)
    {
        // cari pasien berdasasrkan id
        $pasien = Pasien::find($id);
            
        return view('admin.pasien.edit', [
                'pasien' => $pasien,
        ]);

    }

    // Method untuk menyimpan hasil edit
    public function update($id, Request $request){
        // Validasi data
        $request->validate([
            'nama' => 'required|min:3',
            'jk' => 'required',
            'tgl_lahir' => 'required|date',
            'alamat' => 'required',
            'telp' => 'required|numeric',
        ]);

        // cari pasien berdasasrkan id
        $pasien = Pasien::find($id);

        // Simpan hasil edit
        $pasien->update([
            'nama' => $request->nama,
            'jk' => $request->jk,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
        ]);

        return redirect('/pasien')->with('success', 'Data pasien berhasil diubah.');
    }

    // method untuk menghapus data
    public function destroy(Request $request){
        Pasien::destroy($request->id);

        return redirect('/pasien')->with('success', 'Data pasien berhasil dihapus.');
    }
}