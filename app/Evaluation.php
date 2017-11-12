<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Evaluation extends Model
{
    use SoftDeletes;
    public function performance()
    {        
        return $this->belongsTo('App\Performance');
    }
    public function schedule()
    {        
        return $this->belongsTo('App\Schedule');
    }
    public function teacher()
    {        
        return $this->belongsTo('App\Teacher');
    }
}
