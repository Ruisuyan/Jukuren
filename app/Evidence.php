<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Evidence extends Model
{
    protected $table = 'evidences';

    public function performance()
    {
        return $this->belongsTo('App\Performance');
    }
    use SoftDeletes;
}
