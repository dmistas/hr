<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    use HasFactory;

    protected $table='cvs';

    public function account()
    {
        return $this->belongsTo('App\Models\Acount', 'id', 'id_account');
    }
}
