<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    use HasFactory;

    protected $table='specialization';

    public function cvs()
    {
        return $this->hasMany('App\Models\Cv', 'id_specialization', 'id');
    }
}
