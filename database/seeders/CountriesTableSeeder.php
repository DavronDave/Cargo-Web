<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('countries')->delete();

        \DB::table('countries')->insert(array (
            0 =>
            array (
                'id' => 2,
                'name' => 'РОССИЙСКИЙ ФЕДЕРАЦИЯ',
            'emblem' => 'storage/countries/(1693834104)rus-gerb.png',
                'created_at' => '2023-09-04 13:28:24',
                'updated_at' => '2023-09-04 13:28:24',
            ),
            1 =>
            array (
                'id' => 1,
                'name' => 'УЗБЕКИСТАН РЕСПУБЛИКАСИ',
            'emblem' => 'storage/countries/(1693834021)uzb-gerb.png',
                'created_at' => '2023-09-02 12:17:28',
                'updated_at' => '2023-09-04 13:28:45',
            ),
        ));

        $id = DB::table('countries')->orderBy('id', 'DESC')->first();
        DB::statement('alter sequence countries_id_seq restart with '.($id->id+1));

    }
}
