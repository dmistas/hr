<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkSchedule extends Model
{
    use HasFactory;

    protected $table='work_schedule';

    public function cvs()
    {
        return $this->belongsToMany(Cv::class, 'cv_ws', 'id_ws', 'id_cv');
    }
}
