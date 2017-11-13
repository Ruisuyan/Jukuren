<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class ScheduleXStudent extends Pivot
{
    use SoftDeletes;
    protected $table = 'schedule_student';    
}
