<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Performance extends Model
{
    use SoftDeletes;
    public function competence()
    {
        return $this->belongsTo('App\Competence');
    }

    public function courses(){
        return $this->belongsToMany('App\Course')->using('App\CourseXPerformance');                
    }
    
}
