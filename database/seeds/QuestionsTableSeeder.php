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
            'enunciado' => '¿Cuál es su opinión acerca del desempeño actual de un alumno promedio de la capital?',
            // 'tiempo' => 1,
            'proporcion' => 2,
            'competence_id' => 1,
        ]);

        DB::table('questions')->insert([
            'tipo' => 1,
            'utilizado' => 1,
            'enunciado' => '¿Considera obstruccionista la actitud de la mayoria del congreso de la republica?',
            // 'tiempo' => 1,
            'proporcion' => 2,
            'competence_id' => 1,
        ]);

        DB::table('questions')->insert([
            'tipo' => 1,
            'utilizado' => 1,
            'enunciado' => '¿Que medidas preventivas deberiamos tomar ante la llegada de un nuevo fenomeno del niño?',
            // 'tiempo' => 1,
            'proporcion' => 2,
            'competence_id' => 2,
        ]);

        DB::table('questions')->insert([
            'tipo' => 1,
            'utilizado' => 1,
            'enunciado' => '¿Si encuentra un monedero abandonado en la calle, lo recogeria y buscaria a su dueño, o se lo quedaria?. Responder con sinceridad',
            // 'tiempo' => 1,
            'proporcion' => 2,
            'competence_id' => 2,
        ]);
    }
}
