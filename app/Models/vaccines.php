<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vaccines extends Model
{
    use HasFactory;

    protected $table ='vaccines';
    protected $primaryKey = 'id';

    protected $fillable =[
        'name','price','description','image'
    ];
}
