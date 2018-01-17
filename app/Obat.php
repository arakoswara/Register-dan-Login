<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Apotik;
use App\KategoriObat;

class Obat extends Model
{
    protected $table = 'obat';
    protected $fillable = ['nama_obat', 'kategori_obat_id', 'apotik_id'];

    public function get_obat()
    {
        $field = ['obat_nama', 'apotik.name AS nama_apotik', 'kategori_obat.kategori_obat_nama AS nama_kategori'];
        $result = Obat::select($field);
        $result->join('apotik', 'obat.apotik_id', '=', 'apotik.apotik_id');
        $result->join('kategori_obat', 'kategori_obat.kategori_obat_id', '=', 'obat.kategori_obat_id');
        
        return $result->get();
    }
}
