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
            'descripcion' => 'Curso de primer ciclo',
            'cicloCurso' => 1,
        ]);

        DB::table('courses')->insert([
            'codigo' => 'EDU112',
            'nombre' => 'Educacion EDU112',
            'descripcion' => 'Curso de primer ciclo',
            'cicloCurso' => 1,
        ]);

        DB::table('courses')->insert([
            'codigo' => 'EDU222',
            'nombre' => 'Educacion EDU222',
            'descripcion' => 'Curso de segundo ciclo',
            'cicloCurso' => 2,
        ]);

         DB::table('courses')->insert([
            'codigo' => 'EDU223',
            'nombre' => 'Educacion EDU223',
            'descripcion' => 'Curso de segundo ciclo',
            'cicloCurso' => 2,
        ]);

        DB::table('courses')->insert([
            'codigo' => 'EDU333',
            'nombre' => 'Educacion EDU333',
            'descripcion' => 'Curso de tercer ciclo',
            'cicloCurso' => 3,
        ]);

        DB::table('courses')->insert([
            'codigo' => 'EDU334',
            'nombre' => 'Educacion EDU334',
            'descripcion' => 'Curso de tercer ciclo',
            'cicloCurso' => 3,
        ]);        

        DB::table('courses')->insert([
            'codigo' => 'EDU444',
            'nombre' => 'Educacion EDU444',
            'descripcion' => 'Curso de cuarto ciclo',
            'cicloCurso' => 4,
        ]);

        DB::table('courses')->insert([
            'codigo' => 'EDU445',
            'nombre' => 'Educacion EDU445',
            'descripcion' => 'Curso de cuarto ciclo',
            'cicloCurso' => 4,
        ]);

        DB::table('courses')->insert([
            'codigo' => 'EDU556',
            'nombre' => 'Educacion EDU556',
            'descripcion' => 'Curso de quinto ciclo',
            'cicloCurso' => 5,
        ]);
        
        DB::table('courses')->insert([
            'codigo' => 'EDU555',
            'nombre' => 'Educacion EDU555',
            'descripcion' => 'Curso de quinto ciclo',
            'cicloCurso' => 5,
        ]);
        
        DB::table('courses')->insert([
            'codigo' => 'EDU667',
            'nombre' => 'Educacion EDU667',
            'descripcion' => 'Curso de sexto ciclo',
            'cicloCurso' => 6,
        ]);
        
        DB::table('courses')->insert([
            'codigo' => 'EDU666',
            'nombre' => 'Educacion EDU666',
            'descripcion' => 'Curso de sexto ciclo',
            'cicloCurso' => 6,
        ]);

        DB::table('courses')->insert([
            'codigo' => 'EDU777',
            'nombre' => 'Educacion EDU777',
            'descripcion' => 'Curso de septimo ciclo',
            'cicloCurso' => 7,
        ]);

        DB::table('courses')->insert([
            'codigo' => 'EDU778',
            'nombre' => 'Educacion EDU778',
            'descripcion' => 'Curso de septimo ciclo',
            'cicloCurso' => 7,
        ]);

        DB::table('courses')->insert([
            'codigo' => 'EDU888',
            'nombre' => 'Educacion EDU888',
            'descripcion' => 'Curso de octavo ciclo',
            'cicloCurso' => 8,
        ]);

        DB::table('courses')->insert([
            'codigo' => 'EDU889',
            'nombre' => 'Educacion EDU889',
            'descripcion' => 'Curso de octavo ciclo',
            'cicloCurso' => 8,
        ]);

        DB::table('courses')->insert([
            'codigo' => 'EDU990',
            'nombre' => 'Educacion EDU990',
            'descripcion' => 'Curso de noveno ciclo',
            'cicloCurso' => 9,
        ]);

        DB::table('courses')->insert([
            'codigo' => 'EDU999',
            'nombre' => 'Educacion EDU999',
            'descripcion' => 'Curso de noveno ciclo',
            'cicloCurso' => 9,
        ]);

        DB::table('courses')->insert([
            'codigo' => 'EDU123',
            'nombre' => 'Educacion EDU123',
            'descripcion' => 'Curso de decimo ciclo',
            'cicloCurso' => 10,
        ]);

        DB::table('courses')->insert([
            'codigo' => 'EDU321',
            'nombre' => 'Educacion EDU321',
            'descripcion' => 'Curso de decimo ciclo',
            'cicloCurso' => 10,
        ]);
    }
}
