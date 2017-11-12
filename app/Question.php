<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Question extends Model
{
    use SoftDeletes; 
    public function competence(){
        return $this->belongsTo('App\Competence');
    }

    public function onlineEvaluation(){
        return $this->belongsTo('App\OnlineEvaluation');
    }
}
