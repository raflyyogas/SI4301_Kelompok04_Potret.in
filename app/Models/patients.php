<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class patients extends Model
{
    public function vaccines() {
        return $this->hasOne('App\Models\vaccines');
    }
    use HasFactory;

    protected $table ='patients';
    protected $primaryKey = 'id';
    protected $foreignKey = 'vaccine_id';

    protected $fillable =[
        'vaccine_id','name','nik','alamat','image_ktp','no_hp'
    ];
}
