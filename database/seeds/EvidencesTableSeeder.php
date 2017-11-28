<?php

use Illuminate\Database\Seeder;
use App\Student;
use App\Evaluation;
use Carbon\Carbon;
use Faker\Factory as Faker;

class EvidencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $evaluations = Evaluation::with(['performance.competence' => function($query){
            $query->where('id',1);
        }])->get();        
        $students = Student::all();
        foreach ($evaluations as $evaluation) {
            foreach ($students as $student) {
                DB::table('evidences')->insert([
                    'fechasubida' => Carbon::now(),
                    'estado' => '1',
                    'puntaje' => $faker->numberBetween($min = 0,$max = 20),
                    'nombreArchivo' => 'archivo/archivo.txt',
                    'evaluation_id' => $evaluation->id,
                    'student_id' => $student->id,
                ]);
            }
        }
    }
}
