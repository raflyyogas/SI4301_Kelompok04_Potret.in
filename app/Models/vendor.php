<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vendor extends Model
{
    protected $table = 'vendor';
    public function jasa(){
        return $this->hasMany('App\Models\jasa');
    }
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = [
        'namaVendor',
        'noHp',
        'email',
        'password',
    ];
    protected $hidden = [
        'password',
    ];
    
}
