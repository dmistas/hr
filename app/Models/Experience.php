<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Experience extends Model
{
    use HasFactory;

    protected $table = 'experience';
    protected $appends = ['range'];
    protected $fillable = [
        'organization',
        'position',
        'responsibility',
        'start_date',
        'stop_date',
        'id_cv',
        'work_until_now'
    ];

    public $timestamps = false;


    public function cvs()
    {
        return $this->belongsTo('App\Models\Cv', 'id_cv', 'id');
    }

    public function getRangeAttribute()
    {
        if ($this->work_until_now) {
            $range = Carbon::parse($this->start_date)->diffInMonths();
            return $range;
        }

        $range = Carbon::parse($this->start_date)->diffInMonths($this->stop_date);
        return $range;
    }

}
