<?php

use Illuminate\Database\Seeder;

class PerformancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('performances')->insert([
            'nombre' => 'Desempeño 1',
            'descripcion' => 'Descripcion del Desempeño 1',            
            'competence_id' => 1,
        ]);
        DB::table('performances')->insert([
            'nombre' => 'Desempeño 2',
            'descripcion' => 'Descripcion del Desempeño 2',            
            'competence_id' => 1,
        ]);
        DB::table('performances')->insert([
            'nombre' => 'Desempeño 3',
            'descripcion' => 'Descripcion del Desempeño 3',            
            'competence_id' => 2,
        ]);
        DB::table('performances')->insert([
            'nombre' => 'Desempeño 4',
            'descripcion' => 'Descripcion del Desempeño 4',            
            'competence_id' => 2,
        ]);
        DB::table('performances')->insert([
            'nombre' => 'Desempeño 5',
            'descripcion' => 'Descripcion del Desempeño 5',            
            'competence_id' => 3,
        ]);
        DB::table('performances')->insert([
            'nombre' => 'Desempeño 6',
            'descripcion' => 'Descripcion del Desempeño 6',            
            'competence_id' => 3,
        ]);

        DB::table('performances')->insert([
            'nombre' => 'Desempeño 7',
            'descripcion' => 'Descripcion del Desempeño 7',            
            'competence_id' => 4,
        ]);
        DB::table('performances')->insert([
            'nombre' => 'Desempeño 8',
            'descripcion' => 'Descripcion del Desempeño 8',            
            'competence_id' => 4,
        ]);
        DB::table('performances')->insert([
            'nombre' => 'Desempeño 9',
            'descripcion' => 'Descripcion del Desempeño 9',            
            'competence_id' => 5,
        ]);
        DB::table('performances')->insert([
            'nombre' => 'Desempeño 10',
            'descripcion' => 'Descripcion del Desempeño 10',            
            'competence_id' => 5,
        ]);
        DB::table('performances')->insert([
            'nombre' => 'Desempeño 11',
            'descripcion' => 'Descripcion del Desempeño 11',
            'competence_id' => 6,
        ]);
        DB::table('performances')->insert([
            'nombre' => 'Desempeño 12',
            'descripcion' => 'Descripcion del Desempeño 12',
            'competence_id' => 6,
        ]);

        DB::table('performances')->insert([
            'nombre' => 'Desempeño 13',
            'descripcion' => 'Descripcion del Desempeño 13',            
            'competence_id' => 7,
        ]);
        DB::table('performances')->insert([
            'nombre' => 'Desempeño 14',
            'descripcion' => 'Descripcion del Desempeño 14',            
            'competence_id' => 7,
        ]);
        DB::table('performances')->insert([
            'nombre' => 'Desempeño 15',
            'descripcion' => 'Descripcion del Desempeño 15',            
            'competence_id' => 8,
        ]);
        DB::table('performances')->insert([
            'nombre' => 'Desempeño 16',
            'descripcion' => 'Descripcion del Desempeño 16',            
            'competence_id' => 8,
        ]);
        DB::table('performances')->insert([
            'nombre' => 'Desempeño 17',
            'descripcion' => 'Descripcion del Desempeño 17',
            'competence_id' => 9,
        ]);
        DB::table('performances')->insert([
            'nombre' => 'Desempeño 18',
            'descripcion' => 'Descripcion del Desempeño 18',
            'competence_id' => 9,
        ]);
    }
}
