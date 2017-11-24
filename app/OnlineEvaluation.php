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
    //belongsto evaluation
}
