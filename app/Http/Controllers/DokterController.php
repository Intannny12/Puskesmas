<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Pasien;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index(){
       $dokters = Dokter::all(); 
        return view('admin.dokter.index', [
            'dokters' =>$dokters,
        ]);
    }

    public function create(){
        return view('admin.dokter.create');
    }

    public function store(Request $request)
    {
        //validasi data
        $request->validate([
            'nama' => 'required|min:3',
            'spesialis' => 'required',
            'alamat' => 'required',
            'telp' => 'required|numeric',
        ]);


        //simpan data hasil form ke table dokters
        Dokter::create([
            'nama' => $request->nama,
            'spesialis' => $request-> spesialis,
            'alamat' => $request-> alamat,
            'telp' => $request-> telp,

        ]);

        return redirect('/dokter');
    }

    //method untuk menampilkan halaman edit
    public function edit($id){
        // Cari pasien berdasarkan id
        $dokter = Dokter::find($id);

        return view('admin.dokter.edit', [
            'dokter' => $dokter,
        ]);
    }
    
    //method untuk menyimpan hasil edit
    public function update($id, Request $request){
        //validasi data
        $request->validate([
            'nama' => 'required|min:3',
            'spesialis' => 'required',
            'alamat' => 'required',
            'telp' => 'required|numeric',
        ]);

        //cari pasien berdasarkan id
        $dokter = Dokter::find($id);

        //simpan hasil edit
        $dokter->update([
            'nama' => $request->nama,
            'spesialis' => $request-> spesialis,
            'alamat' => $request-> alamat,
            'telp' => $request-> telp,

        ]);

        return redirect('/dokter')->with('success', 'Data dokter berhasil diubah.');
    }
        //method untuk menghapus data dokter
    public function destroy(Request $request){
        Dokter::destroy($request->id);

        return redirect('/dokter')->with('success', 'Data dokter berhasil dihapus.');
    }
}

