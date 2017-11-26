<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    public function evaluation()
    {
        return $this->belongsTo('App\Evaluation');
    }

    public function onlineEvaluations()
    {
        return $this->hasMany('App\OnlineEvaluation');
    }

    public function questions(){
        return $this->hasMany('App\Question');
    }
}
