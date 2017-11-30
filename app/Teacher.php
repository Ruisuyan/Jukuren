<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Teacher extends Model
{
    public function schedules()
    {
        return $this->hasMany('App\Schedule');
    }
    public function evaluations()
    {
        return $this->hasMany('App\Evaluation');
    }
    use SoftDeletes;
}
