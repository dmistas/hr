<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table='cities';

    public function accounts()
    {
        return $this->hasMany('App/Models/Account', 'id_city', 'id');
    }
}
