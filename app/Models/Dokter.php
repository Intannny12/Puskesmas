<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;
    public static function getAll(){
        return [[
                    'nama' => 'Mahardian',
                    'spesialis' => 'THT',
                    'telp' => '085862621512',
                    'alamat' => 'Bogor'
                ],
                [
                    'nama' => 'Faiza',
                    'spesialis' => 'Organ Dalam',
                    'telp' => '083826964224',
                    'alamat' => 'Bandung',
                    
                ],
                [
                    'nama'=> 'Muhammad',
                    'spesialis' => 'Kulit',
                    'telp' => '085892681486',
                    'alamat' => 'Cilebut'
                    
                ],
        ];
    }
}
