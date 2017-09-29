<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function competence(){
        return $this->belongsTo('App\Competence');
    }

    public function evaluation(){
        return $this->belongsTo('App\Evaluation');
    }
}
