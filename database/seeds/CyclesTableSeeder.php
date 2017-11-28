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
            'anho' => '2015',
            'periodo' => '1',
            'semestre' => '2015-1',
            'fechainicio' => Carbon::createFromDate(2015, 3, 12),
            'fechafin' => Carbon::createFromDate(2015, 6, 29),
            'estado' => '3',
        ]);
        
        DB::table('cycles')->insert([
            'anho' => '2015',
            'periodo' => '2',
            'semestre' => '2015-2',
            'fechainicio' => Carbon::createFromDate(2015, 8, 12),
            'fechafin' => Carbon::createFromDate(2015, 11, 27),
            'estado' => '3',
        ]);
        
        DB::table('cycles')->insert([
            'anho' => '2016',
            'periodo' => '1',
            'semestre' => '2016-1',
            'fechainicio' => Carbon::createFromDate(2016, 3, 12),
            'fechafin' => Carbon::createFromDate(2016, 6, 29),
            'estado' => '3',
        ]);
        
        DB::table('cycles')->insert([
            'anho' => '2016',
            'periodo' => '2',
            'semestre' => '2016-2',
            'fechainicio' => Carbon::createFromDate(2016, 8, 14),
            'fechafin' => Carbon::createFromDate(2016, 11, 27),
            'estado' => '3',
        ]);
        
        DB::table('cycles')->insert([
            'anho' => '2017',
            'periodo' => '1',
            'semestre' => '2017-1',
            'fechainicio' => Carbon::createFromDate(2017, 3, 12),
            'fechafin' => Carbon::createFromDate(2017, 6, 29),
            'estado' => '3',
        ]);
        //Ciclo Actual
        DB::table('cycles')->insert([
            'anho' => '2017',
            'periodo' => '2',
            'semestre' => '2017-2',
            'fechainicio' => Carbon::createFromDate(2017, 8, 14),
            'fechafin' => Carbon::createFromDate(2017, 11, 27),
            'estado' => '1',
        ]);
        
    }
}
