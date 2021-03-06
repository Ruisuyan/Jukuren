<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(User::class,5)->create();
              
        // Admin
        DB::table('users')->insert([
            'name' => 'Juan Admin',
            'email' => 'admin@sec.com',
            'password' => bcrypt('secret'),
            'remember_token' => str_random(10),
            'active' => 1,
            'role_id' => 1,
        ]);
        //Coordinator    
        DB::table('users')->insert([
            'name' => 'Juan Coordinador',
            'email' => 'coord@sec.com',
            'password' => bcrypt('secret'),
            'remember_token' => str_random(10),
            'active' => 1,
            'role_id' => 2,
        ]);
        //Teacher    
        DB::table('users')->insert([
            'name' => 'Cesar Aguilera',
            'email' => 'c.aguilera@sec.com',
            'password' => bcrypt('secret'),
            'remember_token' => str_random(10),
            'active' => 1,
            'role_id' => 3,
        ]);
        // //Evaluator    
        // DB::table('users')->insert([
        //     'name' => 'Marisa Kirisame',
        //     'email' => 'marisa@gensokyo.com',
        //     'password' => bcrypt('g6fBdMYHFu82IuuyzxlN'),
        //     'remember_token' => str_random(10),
        //     'active' => 1,
        //     'role_id' => 4,
        // ]);
        //Student
        DB::table('users')->insert([
            'name' => 'Juan Alumno',
            'email' => 'j.perez@sec.com',
            'password' => bcrypt('secret'),
            'remember_token' => str_random(10),
            'active' => 1,
            'role_id' => 5,
        ]);
    }
}
