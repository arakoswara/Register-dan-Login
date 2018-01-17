<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apotik extends Model
{
    protected $table = 'apotik';
    protected $fillable = ['name', 'address', 'longitude', 'lattitude'];
    protected $primaryKey = 'apotik_id';
}
