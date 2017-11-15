<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    public function evaluation()
    {
        return $this->hasOne('App\Evaluation');
    }
}
