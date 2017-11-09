<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Student extends Model
{
    public function portfolio()
    {
        return $this->hasOne('App\Portfolio');
    }
    use SoftDeletes;
}
