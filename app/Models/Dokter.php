<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;
    // menghubungkan model dengan table dokter 
    protected $table = 'dokters';

    // mengdeklarasiakn kolom yang boleh diisi
    protected $fillable = ['nama', 'spesialis', 'alamat', 'telp'];

}
