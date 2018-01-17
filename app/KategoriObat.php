<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriObat extends Model
{
    protected $table = 'kategori_obat';
    protected $fillable = ['kategori_obat_nama'];
    protected $primaryKey = 'kategori_obat_id';
}
