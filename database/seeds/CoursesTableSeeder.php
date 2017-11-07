<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'codigo' => 'EDU123',
            'nombre' => 'Educacion EDU123',
            'descripcion' => 'Descripcion de EDU123',
            'ciclo' => 1,
        ]);

        DB::table('courses')->insert([
            'codigo' => 'EDU321',
            'nombre' => 'Educacion EDU321',
            'descripcion' => 'Descripcion de EDU321',
            'ciclo' => 9,
        ]);
    }
}
