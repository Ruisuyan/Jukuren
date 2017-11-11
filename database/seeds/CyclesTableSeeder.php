<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CyclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cycles')->insert([
            'anho' => '2017',
            'periodo' => '2',
            'semestre' => '2017-2',
            'fechainicio' => Carbon::createFromDate(2017, 8, 14),
            'fechafin' => Carbon::createFromDate(2017, 11, 27),
            'estado' => '1',
        ]);

        DB::table('cycles')->insert([
            'anho' => '2018',
            'periodo' => '1',
            'semestre' => '2018-1',
            'fechainicio' => Carbon::createFromDate(2018, 3, 12),
            'fechafin' => Carbon::createFromDate(2018, 6, 29),
            'estado' => '2',
        ]);

        DB::table('cycles')->insert([
            'anho' => '2018',
            'periodo' => '2',
            'semestre' => '2018-2',
            'fechainicio' => Carbon::createFromDate(2018, 8, 13),
            'fechafin' => Carbon::createFromDate(2018, 11, 30),
            'estado' => '2',
        ]);
    }
}
