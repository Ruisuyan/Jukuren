<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Schedule extends Model
{
    use SoftDeletes;
    public function course()
    {
        return $this->belongsTo('App\Course');
    }
    public function cycle()
    {
        return $this->belongsTo('App\Cycle');
    }
    public function teacher()
    {
        return $this->belongsTo('App\Teacher');
    }
    public function students()
    {
        return $this->belongsToMany('App\Students')->using('App\ScheduleXStudent');
    }
    public function evaluations()
    {        
        return $this->hasMany('App\Evaluation');
    }
}
