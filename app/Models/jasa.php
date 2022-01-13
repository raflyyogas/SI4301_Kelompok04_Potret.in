<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jasa extends Model
{
    protected $table = 'jasa';
    
    public function kategori(){
        return $this->belongsTo('App\Models\kategori');
    }

    public function transaksi(){
        return $this->belongsTo('App\Models\transaksi');
    }

    use HasFactory;
}
