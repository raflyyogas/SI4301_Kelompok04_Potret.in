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

    public function customer(){
        return $this->belongsToMany('App\Models\customer');
    }

    use HasFactory;
    
    protected $fillable = [
        'namaJasa',
        'deskripsi',
        'gambar',
        'harga',
        'lokasi',
        'idVendor',
        'idKategori',
    ];
}
