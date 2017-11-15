<?php

use Illuminate\Database\Seeder;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([
            // 'codigo' => 20089009,
            // 'nombres' => 'Keine',
            // 'apellidoPaterno' => 'Kamishirasawa',
            // 'apellidoMaterno' => 'Kamishirasawa',        
            // 'email' => 'keine@gensokyo.com',
            // 'oficina' => 'V201',
            // 'telefono' => 987654321,
            // 'user_id' => 3,
            'codigo' => 20089009,
            'nombres' => 'Cesar',
            'apellidoPaterno' => 'Aguilera',
            'apellidoMaterno' => 'Serpa',        
            'email' => 'c.aquilera@sec.com',
            'oficina' => 'V201',
            'telefono' => 987654321,
            'user_id' => 3,
        ]);
        factory(App\Teacher::class,5)->create();
    }
}
