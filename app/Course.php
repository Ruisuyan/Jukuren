<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function performances(){
        return $this->belongsToMany('App\Performance','coursexperformance');
    }
}
