<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cycle extends Model
{
    public function courses(){
        return $this->belongsToMany('App\Courses');
    }
}
