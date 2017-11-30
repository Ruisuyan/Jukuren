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
            'nombre' => 'Ejercita la autoevaluación crítica',
            'descripcion' => 'Ejercita la autoevaluación crítica y reflexiva como parte de su formación personal y profesional continua.',            
            'competence_id' => 1,
        ]);
        DB::table('performances')->insert([
            'nombre' => 'Utiliza estrategias para su aprendizaje',
            'descripcion' => 'Utiliza estrategias para su aprendizaje permanente y autónomo, en función de sus propias habilidades y estilos para aprender.',            
            'competence_id' => 1,
        ]);
        DB::table('performances')->insert([
            'nombre' => 'Trabaja asertivamente en equipo',
            'descripcion' => 'Trabaja en equipo de modo asertivo, proactivo y colaborativo.',            
            'competence_id' => 2,
        ]);
        DB::table('performances')->insert([
            'nombre' => 'Comunica sus ideas',
            'descripcion' => 'Comunica sus ideas a través de diferentes medios, de manera asertiva, creativa y pertinente.',            
            'competence_id' => 2,
        ]);
        DB::table('performances')->insert([
            'nombre' => 'Redacta trabajos académicos',
            'descripcion' => 'Redacta trabajos académicos haciendo uso correcto de fuentes diversas y confiables, mostrando dominio en el uso de la lengua.',            
            'competence_id' => 3,
        ]);
        DB::table('performances')->insert([
            'nombre' => 'Aplica fundamentos epistemológicos',
            'descripcion' => 'Aplica fundamentos epistemológicos, métodos, técnicas e instrumentos de investigación aplicados a la educación.',            
            'competence_id' => 3,
        ]);

        DB::table('performances')->insert([
            'nombre' => 'Demuestra conocimiento',
            'descripcion' => 'Demuestra conocimiento y respeto por los deberes y derechos propios y de los demás',            
            'competence_id' => 4,
        ]);
        DB::table('performances')->insert([
            'nombre' => 'Analiza el papel de la educación',
            'descripcion' => 'Analiza el papel de la educación en la formación de ciudadanos con derechos y deberes medioambientales locales y globales, sustentado en el conocimiento de los modelos de desarrollo.',            
            'competence_id' => 4,
        ]);
        DB::table('performances')->insert([
            'nombre' => 'Demuestra responsabilidad y compromiso',
            'descripcion' => 'Demuestra responsabilidad y compromiso con su vocación educadora y ejercicio profesional.',            
            'competence_id' => 5,
        ]);
        DB::table('performances')->insert([
            'nombre' => 'Reflexiona en forma crítica',
            'descripcion' => 'Reflexiona en forma crítica sobre su propio quehacer docente y estilo de enseñanza en la dinámica práctica- teoría-práctica para contribuir a su formación profesional.',            
            'competence_id' => 5,
        ]);
        DB::table('performances')->insert([
            'nombre' => 'Sustenta propuestas de acción ',
            'descripcion' => 'Sustenta propuestas de acción educativa pertinentes para una determinada realidad socio-educativa.',
            'competence_id' => 6,
        ]);
        DB::table('performances')->insert([
            'nombre' => 'naliza críticamente la realidad',
            'descripcion' => 'Analiza críticamente la realidad educativa peruana, latinoamericana y mundial utilizando los conocimientos de diversas disciplinas.',
            'competence_id' => 6,
        ]);

        DB::table('performances')->insert([
            'nombre' => 'Sustenta su acción educativa',
            'descripcion' => 'Sustenta su acción educativa en la comprensión del desarrollo infantil desde un enfoque holístico y complejo.',            
            'competence_id' => 7,
        ]);
        DB::table('performances')->insert([
            'nombre' => 'Construye un clima de respeto',
            'descripcion' => 'Construye un clima de respeto, acogida y seguridad, valorando los procesos de desarrollo y aprendizaje infantil y la función de la afectividad y  el juego en la primera infancia.',            
            'competence_id' => 7,
        ]);
        DB::table('performances')->insert([
            'nombre' => 'Diseña y desarrolla acciones de orientación educativa',
            'descripcion' => 'Diseña y desarrolla acciones de orientación educativa, con soporte afectivo, de acuerdo a las necesidades y características de los alumnos y de la cultura de la infancia.',
            'competence_id' => 8,
        ]);
        DB::table('performances')->insert([
            'nombre' => 'Sustenta su acción educativa',
            'descripcion' => 'Sustenta su acción educativa en una reflexión sobre el proceso de desarrollo humano y sus implicancias en la formación del niño.',            
            'competence_id' => 8,
        ]);
        DB::table('performances')->insert([
            'nombre' => 'Elabora programas y proyectos educativos',
            'descripcion' => 'Elabora programas y proyectos educativos en los ámbitos formal y no formal, participando en ellos con responsabilidad y compromiso.',
            'competence_id' => 9,
        ]);
        DB::table('performances')->insert([
            'nombre' => 'Analiza la política y normatividad',
            'descripcion' => 'Analiza la política y normatividad sobre la gestión de instituciones educativas, en los ámbitos formal y no formal.',
            'competence_id' => 9,
        ]);
    }
}
