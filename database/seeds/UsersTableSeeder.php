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
        //Admin
        DB::table('users')->insert([
            'name' => 'Yukari Yakumo',
            'email' => 'yukari@gensokyo.com',
            'password' => bcrypt('secret'),
            'remember_token' => str_random(10),
            'role_id' => 1,
        ]);
        //Coordinator    
        DB::table('users')->insert([
            'name' => 'Shiki Eiki',
            'email' => 'shikieiki@gensokyo.com',
            'password' => bcrypt('secret'),
            'remember_token' => str_random(10),
            'role_id' => 2,
        ]);
        //Teacher    
        DB::table('users')->insert([
            'name' => 'Keine Kamishirasawa',
            'email' => 'keine@gensokyo.com',
            'password' => bcrypt('secret'),
            'remember_token' => str_random(10),
            'role_id' => 3,
        ]);
        //Evaluator    
        DB::table('users')->insert([
            'name' => 'Marisa Kirisame',
            'email' => 'marisa@gensokyo.com',
            'password' => bcrypt('secret'),
            'remember_token' => str_random(10),
            'role_id' => 4,
        ]);

        DB::table('users')->insert([
            'name' => 'Cirno',
            'email' => 'cirno@gensokyo.com',
            'password' => bcrypt('secret'),
            'remember_token' => str_random(10),
            'role_id' => 5,
        ]);
    }
}
