<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    
    // menghubungkan model dengan tabel pasiens
    protected $table = 'pasiens';

    //mendeklarasikan kolom yang boleh diisi
    protected $fillable = ['nama', 'jk', 'tgl_lahir', 'alamat', 'telp', 'dokter_id'];

    // menghubungkan pasien ke model dokter
    public function dokter(){
        // karena status model saat ini adalah yang dititpkan id,
        // maka dapat menggunakan belongsTo atau belongToMany
        return $this->belongsTo(Dokter::class);
    }
}
