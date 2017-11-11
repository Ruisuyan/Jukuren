<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cycle extends Model
{
    public function courses(){
        return $this->belongsToMany('App\Courses')->using('App\CourseXCycle');
    }
    use SoftDeletes;
}
