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
    }
}
