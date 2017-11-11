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
            'cicloCurso' => 1,
        ]);

        DB::table('courses')->insert([
            'codigo' => 'EDU123',
            'nombre' => 'Educacion EDU123',
            'descripcion' => 'Descripcion de EDU123',
            'cicloCurso' => 2,
        ]);

        DB::table('courses')->insert([
            'codigo' => 'EDU123',
            'nombre' => 'Educacion EDU123',
            'descripcion' => 'Descripcion de EDU123',
            'cicloCurso' => 3,
        ]);

        DB::table('courses')->insert([
            'codigo' => 'EDU123',
            'nombre' => 'Educacion EDU123',
            'descripcion' => 'Descripcion de EDU123',
            'cicloCurso' => 4,
        ]);

        DB::table('courses')->insert([
            'codigo' => 'EDU123',
            'nombre' => 'Educacion EDU123',
            'descripcion' => 'Descripcion de EDU123',
            'cicloCurso' => 5,
        ]);
        
        DB::table('courses')->insert([
            'codigo' => 'EDU123',
            'nombre' => 'Educacion EDU123',
            'descripcion' => 'Descripcion de EDU123',
            'cicloCurso' => 6,
        ]);

        DB::table('courses')->insert([
            'codigo' => 'EDU123',
            'nombre' => 'Educacion EDU123',
            'descripcion' => 'Descripcion de EDU123',
            'cicloCurso' => 7,
        ]);

        DB::table('courses')->insert([
            'codigo' => 'EDU123',
            'nombre' => 'Educacion EDU123',
            'descripcion' => 'Descripcion de EDU123',
            'cicloCurso' => 8,
        ]);

        DB::table('courses')->insert([
            'codigo' => 'EDU321',
            'nombre' => 'Educacion EDU321',
            'descripcion' => 'Descripcion de EDU321',
            'cicloCurso' => 9,
        ]);

        DB::table('courses')->insert([
            'codigo' => 'EDU123',
            'nombre' => 'Educacion EDU123',
            'descripcion' => 'Descripcion de EDU123',
            'cicloCurso' => 10,
        ]);
    }
}
