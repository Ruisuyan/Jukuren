<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    public function courses(){
        return $this->belongsToMany('App\Course','coursexcompetence','competence_id','course_id')->withPivot('id')->withTimestamps();        
        //Usar pivot para acceder a las variables de la otra tabla
    }
}
