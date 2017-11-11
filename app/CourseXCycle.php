<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseXCycle extends Pivot
{
    use SoftDeletes;
    protected $table = 'course_cycle';
}
