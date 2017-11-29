<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Directevaluation extends Model
{
    public function student()
    {
        return $this->belongsTo('App\Student');
    }

    public function evaluation()
    {
        return $this->belongsTo('App\Evaluation');
    }
    use SoftDeletes;
}