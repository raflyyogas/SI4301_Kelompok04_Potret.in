<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $table = 'kategori';
    public function jasa(){
        return $this->hasMany('App\Models\jasa');
    }

    use HasFactory;
}
