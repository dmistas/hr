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
        return $this->belongsTo('App\Models\Account', 'id_account', 'id');
    }

    public function experiences()
    {
        return $this->hasMany('App\Models\Experience', 'id_cv', 'id');
    }

    public function employments()
    {
        return $this->belongsToMany(
            Employment::class,
            'cv_empl',
            'id_cv',
            'id_empl');
    }

    public function work_schedule()
    {
        return $this->belongsToMany(
            WorkSchedule::class,
            'cv_ws',
            'id_cv',
            'id_ws');
    }

    public function specialization()
    {
        return $this->belongsTo('App\Models\Specialization', 'id_specialization', 'id');
    }

}
