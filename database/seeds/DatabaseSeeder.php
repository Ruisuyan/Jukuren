<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CompetencesTableSeeder::class);
        $this->call(QuestionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);        
        $this->call(UsersTableSeeder::class);
        $this->call(StudentsTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(PerformancesTableSeeder::class);        
        $this->call(CourseXPerformanceTableSeeder::class);
        $this->call(CyclesTableSeeder::class);
        $this->call(TeachersTableSeeder::class);
        $this->call(SchedulesTableSeeder::class);
        $this->call(ScheduleXStudentsTableSeeder::class);        
        $this->call(EvaluationsTableSeeder::class);
        $this->call(EvidencesTableSeeder::class);
    }
}
