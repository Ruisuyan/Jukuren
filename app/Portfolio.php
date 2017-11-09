<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Portfolio extends Model
{
    // public function student()
    // {
    //     return $this->belongsTo('App\Student');
    // }
    use SoftDeletes;
}
