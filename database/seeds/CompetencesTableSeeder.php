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

        DB::table('competences')->insert([
            'nombre' => 'Competencia 4',
            'descripcion' => 'Descripcion de Competencia 4',
            'tipo' => 1,
        ]);

        DB::table('competences')->insert([
            'nombre' => 'Competencia 5',
            'descripcion' => 'Descripcion de Competencia 5',
            'tipo' => 2,
        ]);

        DB::table('competences')->insert([
            'nombre' => 'Competencia 6',
            'descripcion' => 'Descripcion de Competencia 6',
            'tipo' => 1,
        ]);

        DB::table('competences')->insert([
            'nombre' => 'Competencia 7',
            'descripcion' => 'Descripcion de Competencia 7',
            'tipo' => 1,
        ]);

        DB::table('competences')->insert([
            'nombre' => 'Competencia 8',
            'descripcion' => 'Descripcion de Competencia 8',
            'tipo' => 2,
        ]);

        DB::table('competences')->insert([
            'nombre' => 'Competencia 9',
            'descripcion' => 'Descripcion de Competencia 9',
            'tipo' => 1,
        ]);
    }
}
