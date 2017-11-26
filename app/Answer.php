<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function onlineEvaluation()
    {
        return $this->belongsTo('App\OnlineEvaluation');
    }
}
