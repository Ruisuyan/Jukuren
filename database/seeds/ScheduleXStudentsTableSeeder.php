<?php

use Illuminate\Database\Seeder;
use App\Schedule;
use App\Student;

class ScheduleXStudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $schedules = Schedule::all();
        $students = Student::all();
        foreach ($schedules as $schedule) {
            foreach ($students as $student) {
                DB::table('schedule_student')->insert([
                    'schedule_id' => $schedule->id,
                    'student_id' => $student->id,
                ]);
            }
        }
    }
}
