<?php

use Illuminate\Database\Seeder;

class SchedulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schedules')->insert([
            'codigo' => '0101',
            'course_id' => '1',
            'cycle_id' => '1',
            'teacher_id' => '2',            
        ]);

        DB::table('schedules')->insert([
            'codigo' => '0202',
            'course_id' => '3',
            'cycle_id' => '2',
            'teacher_id' => '3',            
        ]);

        DB::table('schedules')->insert([
            'codigo' => '0303',
            'course_id' => '5',
            'cycle_id' => '3',
            'teacher_id' => '4',            
        ]);

        DB::table('schedules')->insert([
            'codigo' => '0404',
            'course_id' => '7',
            'cycle_id' => '4',
            'teacher_id' => '3',            
        ]);

        DB::table('schedules')->insert([
            'codigo' => '0505',
            'course_id' => '9',
            'cycle_id' => '5',
            'teacher_id' => '2',            
        ]);
        DB::table('schedules')->insert([
            'codigo' => '0606',
            'course_id' => '11',
            'cycle_id' => '6',
            'teacher_id' => '1',            
        ]);
    }
}
