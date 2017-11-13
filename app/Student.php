<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Student extends Model
{
    public function schedules()
    {
        return $this->belongsToMany('App\Schedule')->using('App\ScheduleXStudent');
    }
    
    use SoftDeletes;
}
