<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $table = 'transaksi';
    use HasFactory;
    
    protected $fillable = [
        'idCust',
        'idJasa',
        'status',
    ];
}
