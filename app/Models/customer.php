<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table = 'customer';

    public function jasa(){
        return $this->belongsToMany('App\Models\jasa');
    }

    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = [
        'username',
        'password',
        'email',
        'nama',
        'noHp',
        'alamat',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
