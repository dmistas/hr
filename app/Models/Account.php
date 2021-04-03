<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Account extends Model
{
    use HasFactory;

    protected $table = 'accounts';
    protected $appends=['age'];

    protected $fillable = [
        'name',
        'surname',
        'middle_name',
        'birthday',
        'gender',
        'id_city',
        'email',
        'phone',
    ];

    public function resumes()
    {
        return $this->hasMany('App\Models\Cv', 'id_account', 'id');
    }

    public function city()
    {
        return $this->belongsTo('App\Models\City', 'id_city', 'id');
    }

    public function getAgeAttribute()
    {
        $age = Carbon::parse($this->birthday)->diffInYears();
        return $age;
    }
}
