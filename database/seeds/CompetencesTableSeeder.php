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
    {   //1
        DB::table('competences')->insert([
            'nombre' => 'Gestion de aprendizaje autonomo',
            'descripcion' => 'Gestiona con iniciativa su aprendizaje autónomo y actualización permanente, de manera reflexiva, crítica y colectiva, con el fin de potenciar sus propias capacidades.',
            'tipo' => 1,
        ]);
        //2    
        DB::table('competences')->insert([
            'nombre' => 'Comunicacion asertiva',
            'descripcion' => 'Se comunica de manera asertiva y pertinente a cada situación con el fin de asegurar la interacción social y profesional en el marco de una convivencia democrática y pacífica.',
            'tipo' => 2,
        ]);
        //3    
        DB::table('competences')->insert([
            'nombre' => 'Investigacion y propuesta',
            'descripcion' => 'Investiga permanentemente sobre los diferentes actores, componentes y procesos educativos en diversos escenarios sociales, para diseñar, desarrollar, sistematizar y validar propuestas de mejora, que amplíen el conocimiento de manera crítica y reflexiva.',
            'tipo' => 1,
        ]);
        //4    
        DB::table('competences')->insert([
            'nombre' => 'Respeto y etica',
            'descripcion' => 'Respeta la dignidad y promueve la defensa de los derechos humanos, en particular de los niños, en el  marco de una ética profesional humanista, cristiana y ecuménica, para la construcción de ciudadanía. ',
            'tipo' => 1,
        ]);
        //5    
        DB::table('competences')->insert([
            'nombre' => 'Practica educativa',
            'descripcion' => 'Ejerce su práctica educativa desde una perspectiva reflexiva y crítica, comprometido con su vocación docente, en un clima dialógico y democrático con los diversos actores educativos.',
            'tipo' => 2,
        ]);
        //6    
        DB::table('competences')->insert([
            'nombre' => 'Percepcion de la realidad',
            'descripcion' => 'Maneja fundamentos epistemológicos, científicos y pedagógicos sustentados en un conocimiento interdisciplinar de la realidad peruana, latinoamericana y mundial.',
            'tipo' => 1,
        ]);
        //7    
        DB::table('competences')->insert([
            'nombre' => 'Enseñanza infantil',
            'descripcion' => 'Comprende, valora y respeta el proceso de desarrollo infantil desde un enfoque holístico y complejo, así como el valor de la afectividad y del juego de la infancia, para promover experiencias integrales y placenteras de los niños de 0 a 6 años.',
            'tipo' => 1,
        ]);
        //8    
        DB::table('competences')->insert([
            'nombre' => 'Procesos de enseñanza',
            'descripcion' => 'Realiza acciones para la formación integral del alumno respetando el proceso de desarrollo humano desde un enfoque holístico.',
            'tipo' => 2,
        ]);
        //9    
        DB::table('competences')->insert([
            'nombre' => 'Percepcion del entorno profesional',
            'descripcion' => 'Conoce la gestión de instituciones, programas y proyectos educativos, políticas educativas y normas vigentes, para ejercer un liderazgo pedagógico y democrático, en los ámbitos formal y no formal, evidenciando compromiso y responsabilidad social.',
            'tipo' => 1,
        ]);
    }
}
