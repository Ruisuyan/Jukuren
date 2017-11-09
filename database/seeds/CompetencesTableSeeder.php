<?php

use Illuminate\Database\Seeder;

class CompetencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('competences')->insert([
            'nombre' => 'Competencia 1',
            'descripcion' => 'Descripcion de Competencia 1',
            'tipo' => 1,
        ]);

        DB::table('competences')->insert([
            'nombre' => 'Competencia 2',
            'descripcion' => 'Descripcion de Competencia 2',
            'tipo' => 2,
        ]);

        DB::table('competences')->insert([
            'nombre' => 'Competencia 3',
            'descripcion' => 'Descripcion de Competencia 3',
            'tipo' => 1,
        ]);
    }
}
