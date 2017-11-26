<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OnlineEvaluation extends Model
{
    use SoftDeletes;
    protected $table = 'onlineevaluations';

    public function poll(){
        return $this->belongsTo('App\Poll');
    }

    public function evaluation()
    {
        return $this->belongsTo('App\Evaluation');
    }
    
    public function student()
    {
        return $this->belongsTo('App\Student');
    }    
}
