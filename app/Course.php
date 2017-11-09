<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes;
    public function performances(){
        return $this->belongsToMany('App\Performance');
    }

    public function cycles(){
        return $this->belongsToMany('App\Cycle');
    }
}
