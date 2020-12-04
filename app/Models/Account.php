<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $table = 'accounts';

    public function resumes()
    {
        return  $this->hasMany('App\Models\Cv', 'id_account', 'id');
    }

    public function city()
    {
        return $this->belongsTo('App\Models\City','id_city','id');
    }
}
