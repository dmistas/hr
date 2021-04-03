<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\DocBlock\Tags\Property;

class Cv extends Model
{
    use HasFactory;

    protected $table = 'cvs';
    protected $exp_in_years;

    protected $appends = ['years_experience'];
    protected $fillable = [
        'id_specialization', 'salary', 'about', 'id_account', 'photo',
    ];

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

    public function getYearsExperienceAttribute()
    {
        $this-> exp_in_years = 0;
//        TODO it makes extra queries, need fix
        $exp = $this-> experiences()->get();
        $exp -> each(function ($item) {
            $this -> exp_in_years+=$item->range;
        });
        $years = (int)floor(($this->exp_in_years)/12);
        $months = $this->exp_in_years - $years*12;
        return ['years'=>$years, 'months'=>$months];
    }



}
