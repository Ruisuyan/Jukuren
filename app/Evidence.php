<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Evidence extends Model
{
    protected $table = 'evidences';

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
