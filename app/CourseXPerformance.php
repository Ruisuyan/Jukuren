<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseXPerformance extends Pivot
{
    use SoftDeletes;
    protected $table = 'course_performance';
}
