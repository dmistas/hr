<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employment extends Model
{
    use HasFactory;

    protected $table='employment';

    public function cvs()
    {
        return $this->belongsToMany(Cv::class, 'cv_empl', 'id_empl', 'id_cv');
    }
}
