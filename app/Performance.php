<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    public function competence()
    {
        return $this->belongsTo('App\Competence');
    }

    public function courses(){
        return $this->belongsToMany('App\Course','coursexperformance','performance_id','course_id')->withPivot('id')->withTimestamps();        
        //Usar pivot para acceder a las variables de la otra tabla
    }
    
}
