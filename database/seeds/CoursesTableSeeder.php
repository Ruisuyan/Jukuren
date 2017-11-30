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
            'codigo' => 'EDU 120',
            'nombre' => 'Estrategias para el aprendizaje autónomo',
            'descripcion' => 'Busca situar al estudiante en la vida académica de la Universidad desde un enfoque de estudio estratégico y a través del logro de ciertas competencias transversales. Proporciona las estrategias para que el alumno logre un aprendizaje autónomo y significativo. Se busca que desarrolle su capacidad metacognitiva y utilice las estrategias más adecuadas para enfrentar con éxito sus estudios universitarios. Asimismo, desarrolla las habilidades de búsqueda de información, comprensión, análisis, síntesis, organización y producción de textos académicos para el desarrollo de trabajos de investigación bibliográfica; así como las actitudes de indagación, criticidad, objetividad y reflexión que permitan promover en el alumno el espíritu de investigación.',
            'cicloCurso' => 1,
        ]);

        DB::table('courses')->insert([
            'codigo' => 'EDU 129',
            'nombre' => 'Educación para el desarrollo sostenible',
            'descripcion' => 'El curso propone un enfoque crítico e histórico de los modelos de desarrollo y las alternativas para que respondan a las necesidades humanas y eco sistémicas del presente y futuro a nivel local, nacional y global. Específicamente, se busca que el estudiante reconozca el papel de la educación en ámbitos escolares y otros, y a lo largo de toda la vida de las personas, en la construcción democrática de modelos de desarrollo sustentables y en la formación de una eco- ciudadanía global.',
            'cicloCurso' => 1,
        ]);

        DB::table('courses')->insert([
            'codigo' => '1EDU03',
            'nombre' => 'Redacción Académica',
            'descripcion' => 'El curso explora la relevancia de la comunicación escrita en la actividad académica y la investigación, desde la lingüística textual aplicada. Combina la teoría y la práctica para trabajar la estructura de varios tipos de textos académicos, a fin de hacer de la escritura un mejor vehículo de expresión del pensamiento. Culmina con la elaboración de una monografía, como oportunidad para descubrir el sentido del tema en estudio y aplicar las formas de organizar el conocimiento que el curso presenta.',
            'cicloCurso' => 2,
        ]);

         DB::table('courses')->insert([
            'codigo' => '1PSI 101',
            'nombre' => 'Desarrollo Humano',
            'descripcion' => 'El curso brinda una mirada reflexiva a los aportes teóricos de la psicología del desarrollo, con el fin de explicar el crecimiento y evolución del ser humano en las diversas dimensiones que forman parte de su individualidad. Se presentan las principales características en los aspectos genéticos, neurológicos, psicomotores, cognitivos, emocionales y sociales que se observan en las diferentes etapas del ciclo vital, considerando la influencia del ambiente y de las culturas sobre la evolución natural y el comportamiento de las personas. Desde una perspectiva centrada en investigaciones científicas, se analiza la evolución y crecimiento bajo los enfoques de educación en la diversidad y de necesidades básicas, para así reconocer cuáles son los factores determinantes sobre el mejoramiento de la calidad de vida de las personas.',
            'cicloCurso' => 2,
        ]);

        DB::table('courses')->insert([
            'codigo' => 'EDU 148',
            'nombre' => 'Educación , sociedad y cultura',
            'descripcion' => 'El curso analiza las transformaciones de las últimas décadas en relación a los conceptos de Educación, Sociedad y Cultura, reconociendo el papel de la escuela en la atención de los cambios sociales y problemas no resueltos, como pobreza, inequidad de oportunidades, violencia contra la mujer y los niños. Se analizará esta triada desde los aportes de diversas disciplinas, como la sociología, la antropología, la psicología y la lingüística.',
            'cicloCurso' => 3,
        ]);

        DB::table('courses')->insert([
            'codigo' => 'EDU 209',
            'nombre' => 'Filosofía de la educación',
            'descripcion' => 'En el marco general de las finalidades de la educación, el curso aborda el estudio de distintos modos de entender el fenómeno educativo, a la luz de visiones filosóficas como el Positivismo, el Racionalismo, el Existencialismo y el Personalismo.',
            'cicloCurso' => 3,
        ]);        

        DB::table('courses')->insert([
            'codigo' => 'EDU 152',
            'nombre' => 'Teoría de la educación y corrientes educativas',
            'descripcion' => 'Plantea una visión holística e integral del fenómeno educativo a partir de una aproximación epistemológica e histórica y profundiza de modo interdisciplinar en el sentido de la educación como fenómeno social. Desde esta perspectiva, estudia los condicionantes de la acción educativa, identifica el rol de los agentes implicados y analiza el por qué y para qué de una acción formativa según los fines de la educación que postula la política educativa nacional y mundial.',
            'cicloCurso' => 4,
        ]);

        DB::table('courses')->insert([
            'codigo' => 'EDU 167',
            'nombre' => 'Planificación y gestión educativa',
            'descripcion' => 'El curso se orienta a reconocer los diversos enfoques de gestión de la educación desde una perspectiva histórica, analizando los enfoques tecnocráticos, estratégicos y situacionales, hasta aquellos que incorporan al sujeto como centro de los procesos, así como los que se enmarcan en la perspectiva de la gestión del conocimiento. De este modo, se trata de analizar los procesos de gestión desde una perspectiva política y técnica. Se enfatiza la planificación como un proceso de toma de decisiones para la solución de problemas en el campo educativo. Se brinda herramientas para la planificación en los ámbitos regional, local e institucional, así como la planificación de proyectos de desarrollo. En el ámbito de la gestión se hace especial énfasis en la gestión directiva y el liderazgo, la gestión pedagógica, la gestión de los recursos humanos y la gestión financiera.',
            'cicloCurso' => 4,
        ]);

        DB::table('courses')->insert([
            'codigo' => 'PSI 133',
            'nombre' => 'Psicología del aprendizaje',
            'descripcion' => 'El curso presenta un marco general de las principales teorías del aprendizaje, sus procesos fundamentales y aplicaciones en las diferentes áreas de la Educación. La temática analiza y discute el concepto de aprendizaje, sus bases científicas, las teorías que lo explican; así como los mecanismos y procesos de aprendizaje estableciendo nexos con las etapas del desarrollo humano.',
            'cicloCurso' => 5,
        ]);
        
        DB::table('courses')->insert([
            'codigo' => 'SOC341',
            'nombre' => 'Acción colectiva y movimientos sociales',
            'descripcion' => 'Se hará una revisión de las teorías clásicas de los movimientos sociales, pasando por las teorías convencionales de la acción revolucionaria y colectiva, así como de la teoría de los nuevos movimientos sociales. Se prestará atención a la definición de actores colectivos y sujetos sociales, al contexto social en el que se desarrollan y transforman identidades, liderazgos y organizaciones. Se pondrán en diálogo diversas perspectivas, llegando a los enfoques de movilización de recursos, elección racional, y nuevos enfoques de síntesis.',
            'cicloCurso' => 5,
        ]);
        
        DB::table('courses')->insert([
            'codigo' => 'EDU 185',
            'nombre' => 'Educación inclusiva',
            'descripcion' => 'El curso orienta al estudiante en la comprensión de aquellos colectivos que por diferentes razones han sido excluidos o escasamente atendidos por el sistema educativo, entre ellos, los estudiantes que presentan discapacidades y altas habilidades, así como los niños que están en programas de pedagogía hospitalaria. Introduce a los estudiantes en la reflexión y manejo de los fundamentos teórico – conceptuales y movimientos por la inclusión, los cambios en la filosofía y la cultura organizacional, la formación de los agentes educativos, la familia y contexto en los procesos de inclusión, la planificación y organización para la inclusión, la identificación de las necesidades educativas asociadas a discapacidad y altas habilidades, las adaptaciones curriculares y estrategias metodológicas, la evaluación, las herramientas tutoriales, y los equipos de apoyo.',
            'cicloCurso' => 6,
        ]);
        
        DB::table('courses')->insert([
            'codigo' => 'POL360',
            'nombre' => 'Poderes del Estado',
            'descripcion' => 'Este curso plantea el entendimiento de cómo operan los 3 poderes del Estado. El curso se estructura en función a la dinámica de construcción de las hojas de ruta en los procesos funcionales y administrativos del Poder Ejecutivo, Legislativo, y Judicial en sus diversos componentes. El contenido teórico de este curso se sostiene sobre el desarrollo de casos prácticos.',
            'cicloCurso' => 6,
        ]);

        DB::table('courses')->insert([
            'codigo' => 'CDR 114',
            'nombre' => 'Cristianismo, ciencia y cultura',
            'descripcion' => 'Entendiendo la Teología como la fe que busca su inteligencia, el curso ubica el diálogo entre la fe y la razón dentro del universo simbólico de las culturas. En este panorama se sitúa el significado de la revelación bíblica y, en particular, la persona de Jesucristo, su mensaje y su práctica.',
            'cicloCurso' => 7,
        ]);

        DB::table('courses')->insert([
            'codigo' => '1EDU08',
            'nombre' => 'Orientación y tutoría en la adolescencia',
            'descripcion' => 'El curso presenta la importancia de la orientación y tutoría educativa como una de las bases fundamentales para la formación integral del estudiante de educación secundaria.
            
            Brinda  las bases teóricas que sustentan la acción orientadora y tutorial. Y presenta métodos, estrategias y técnicas que sirven como herramientas para que los futuros docentes diseñen, ejecuten y evalúen propuestas educativas que respondan a las necesidades, características y realidades de los adolescentes.',
            'cicloCurso' => 7,
        ]);

        DB::table('courses')->insert([
            'codigo' => 'EDU 169',
            'nombre' => 'Antropología de la Educación',
            'descripcion' => 'El curso profundiza en el estudio del ser humano en cuanto es educable: “homo educandus”. A partir de dos trayectorias que son complementarias, la primera de influencia germánica, que pone su acento en la antropología filosófica y la segunda, de influencia anglosajona, que pone énfasis en la antropología cultural o etnografía. La primera busca profundizar en el conocimiento del ser humano, lo común entre todos los seres humanos de todos los tiempos, y procedencias, la segunda se centra en el estudio del ser humano en cada cultura, de una determinada época y lugar.',
            'cicloCurso' => 8,
        ]);

        DB::table('courses')->insert([
            'codigo' => '1EDU04',
            'nombre' => 'Evaluación de los aprendizajes',
            'descripcion' => 'El propósito del curso es el conocimiento, análisis y reflexión de la evaluación del aprendizaje como un aspecto fundamental del proceso de enseñanza-aprendizaje y de la programación curricular, desde un enfoque centrado en el educando, y de los procesos de reflexión y de autoevaluación. El curso presenta una panorámica de las concepciones evaluativas y los tipos de evaluación enfatizando aquellas de carácter criterial, cualitativo, etnográfico, y con intencionalidad formativa. Enfatiza la valoración de la retroalimentación y la toma de decisiones a partir de los resultados de los diversos tipos y procesos de evaluación y la diversidad de alumnado.',
            'cicloCurso' => 8,
        ]);

        DB::table('courses')->insert([
            'codigo' => 'CIS237',
            'nombre' => 'Procesos del mundo contemporáneo',
            'descripcion' => 'Se trata, en primer lugar, de presentar los principales procesos sociales y políticos que han constituido la realidad social contemporánea, con temas como la constitución de un mercado mundial y la formación del capitalismo, la modernidad, la función del pensamiento científico y la racionalidad en occidente. En segundo lugar, se trata de presentar una visión de cómo el proceso de expansión occidental modeló el mundo contemporáneo y América Latina en particular y el papel que juegan los países periféricos en el mundo. ',
            'cicloCurso' => 9,
        ]);

        DB::table('courses')->insert([
            'codigo' => 'EDU 166',
            'nombre' => 'Política y Legislación Educativa',
            'descripcion' => 'Proporciona las bases necesarias para examinar las políticas educativas, tomando en cuenta las transformaciones nacionales e internacionales que presionan por cambios e innovaciones en la educación. Se orienta, por lo tanto, a profundizar en la formulación de políticas educativas desde sus dimensiones más relevantes.',
            'cicloCurso' => 9,
        ]);

        DB::table('courses')->insert([
            'codigo' => 'EDU 382',
            'nombre' => 'Tesis 2 y desempeño pre profesional',
            'descripcion' => 'El curso ofrece el espacio para el ejercicio pre profesional intensivo y permanente como profesor responsable o corresponsable de un aula de niños en una institución educativa, en la que la estudiante realiza acciones en el ámbito pedagógico con niños, padres de familia y comunidad para consolidar conocimientos, habilidades y actitudes adquiridas a lo largo de su formación profesional como un docente reflexivo y crítico. Se consolida en el estudiante el uso de la autoevaluación, la evaluación de pares y de los especialistas (profesores supervisores y de la escuela) como medios para efectuar una reflexión sobre la práctica orientada a la mejora permanente de su desempeño. Se incentiva en el estudiante su reconocimiento como profesional capaz de generar conocimiento profesional y pedagógico.',
            'cicloCurso' => 10,
        ]);

        DB::table('courses')->insert([
            'codigo' => '1GEO02',
            'nombre' => 'Geosistema peruano',
            'descripcion' => 'El curso presenta el Geosistema peruano, en tanto sistema natural compuesto por entidades bióticas, abióticas y entrópicas y las permanentes interrelaciones que se producen entre estas entidades, así como los cambios cualitativos y cuantitativos que se generan. Se analizan los geosistemas andino, amazónico y costero como realidad y desafío para la acción creativa de los pueblos y su desarrollo.',
            'cicloCurso' => 10,
        ]);
    }
}
