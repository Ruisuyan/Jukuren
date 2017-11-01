<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'nombre' => 'Administrador'            
        ]);
        DB::table('roles')->insert([
            'nombre' => 'Coordinador'            
        ]);
        DB::table('roles')->insert([
            'nombre' => 'Docente'            
        ]);
        DB::table('roles')->insert([
            'nombre' => 'Evaluador'            
        ]);
        DB::table('roles')->insert([
            'nombre' => 'Alumno'            
        ]);
    }
}
