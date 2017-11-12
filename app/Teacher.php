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
    use SoftDeletes;
}
