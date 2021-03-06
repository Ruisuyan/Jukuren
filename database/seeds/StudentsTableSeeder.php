<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'nombres' => 'Juan',
            'apellidoPaterno' => 'Perez',
            'apellidoMaterno' => 'Perez',
            'codigo' => 99999999,
            'dni' => 99999999,
            'correo' => 'j.perez@sec.com',
            'telefono' => 999999999,
            'user_id' => 4,
        ]);
        factory(App\Student::class,9)->create();
    }
}
