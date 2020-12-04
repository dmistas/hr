<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $table='experience';

    public function cvs()
    {
        return $this->belongsTo('App\Models\Cv', 'id_cv', 'id');
    }
}
