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
        Dokter::create([
            'nama' => $request->nama,
            'spesialis' => $request->spesialis,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
        ]);
        
        return redirect('/dokter');
    }

}

