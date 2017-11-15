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
            'codigo' => 'EDU111',
            'nombre' => 'Educacion EDU111',
            'descripcion' => 'Descripcion de EDU111',
            'cicloCurso' => 1,
        ]);

        DB::table('courses')->insert([
            'codigo' => 'EDU222',
            'nombre' => 'Educacion EDU222',
            'descripcion' => 'Descripcion de EDU222',
            'cicloCurso' => 2,
        ]);

        DB::table('courses')->insert([
            'codigo' => 'EDU333',
            'nombre' => 'Educacion EDU333',
            'descripcion' => 'Descripcion de EDU333',
            'cicloCurso' => 3,
        ]);

        DB::table('courses')->insert([
            'codigo' => 'EDU444',
            'nombre' => 'Educacion EDU444',
            'descripcion' => 'Descripcion de EDU444',
            'cicloCurso' => 4,
        ]);

        DB::table('courses')->insert([
            'codigo' => 'EDU555',
            'nombre' => 'Educacion EDU555',
            'descripcion' => 'Descripcion de EDU555',
            'cicloCurso' => 5,
        ]);
        
        DB::table('courses')->insert([
            'codigo' => 'EDU666',
            'nombre' => 'Educacion EDU666',
            'descripcion' => 'Descripcion de EDU666',
            'cicloCurso' => 6,
        ]);

        DB::table('courses')->insert([
            'codigo' => 'EDU777',
            'nombre' => 'Educacion EDU777',
            'descripcion' => 'Descripcion de EDU777',
            'cicloCurso' => 7,
        ]);

        DB::table('courses')->insert([
            'codigo' => 'EDU888',
            'nombre' => 'Educacion EDU888',
            'descripcion' => 'Descripcion de EDU888',
            'cicloCurso' => 8,
        ]);

        DB::table('courses')->insert([
            'codigo' => 'EDU999',
            'nombre' => 'Educacion EDU999',
            'descripcion' => 'Descripcion de EDU999',
            'cicloCurso' => 9,
        ]);

        DB::table('courses')->insert([
            'codigo' => 'EDU101',
            'nombre' => 'Educacion EDU101',
            'descripcion' => 'Descripcion de EDU101',
            'cicloCurso' => 10,
        ]);
    }
}
