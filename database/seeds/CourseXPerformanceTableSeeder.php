<?php

use Illuminate\Database\Seeder;
use App\Course;
use App\Performance;

class CourseXPerformanceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = Course::all();
        $performances = Performance::all();
        DB::table('course_performance')->insert([
            'course_id' => '1',
            'performance_id' => '1',
        ]);
        DB::table('course_performance')->insert([
            'course_id' => '3',
            'performance_id' => '2',
        ]);
        DB::table('course_performance')->insert([
            'course_id' => '5',
            'performance_id' => '1',
        ]);
        DB::table('course_performance')->insert([
            'course_id' => '7',
            'performance_id' => '2',
        ]);
        DB::table('course_performance')->insert([
            'course_id' => '9',
            'performance_id' => '2',
        ]);
        DB::table('course_performance')->insert([
            'course_id' => '11',
            'performance_id' => '1',
        ]);
        
    }
}
