<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            'tipo' => 1,
            'utilizado' => 1,
            'enunciado' => 'Enunciado 1',
            // 'tiempo' => 1,
            'proporcion' => 2,
            'competence_id' => 1,
        ]);

        DB::table('questions')->insert([
            'tipo' => 1,
            'utilizado' => 1,
            'enunciado' => 'Enunciado 2',
            // 'tiempo' => 1,
            'proporcion' => 2,
            'competence_id' => 1,
        ]);

        DB::table('questions')->insert([
            'tipo' => 1,
            'utilizado' => 1,
            'enunciado' => 'Enunciado 3',
            // 'tiempo' => 1,
            'proporcion' => 2,
            'competence_id' => 2,
        ]);

        DB::table('questions')->insert([
            'tipo' => 1,
            'utilizado' => 1,
            'enunciado' => 'Enunciado 4',
            // 'tiempo' => 1,
            'proporcion' => 2,
            'competence_id' => 2,
        ]);
    }
}
