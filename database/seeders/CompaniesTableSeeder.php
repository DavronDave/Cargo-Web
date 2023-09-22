<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('companies')->delete();

        \DB::table('companies')->insert(array (
            0 =>
            array (
                'id' => 11,
                'name' => 'ИП Ахматов Баходир Нормуродович',
                'country_id' => 1,
                'region_id' => 3,
                'district_id' => 3,
                'address' => NULL,
                'phone' => '+7906 245 32 23',
                'created_at' => '2023-09-04 13:34:56',
                'updated_at' => '2023-09-04 13:34:56',
            ),
            1 =>
            array (
                'id' => 1,
                'name' => 'MCHJ "MALVIKA-CARGO "',
                'country_id' => 1,
                'region_id' => 4,
                'district_id' => 2,
                'address' => 'Olmachi MFY Mirzoulug\'bek 53-uy 45-xonadon',
                'phone' => '+99899 599 83 01',
                'created_at' => '2023-09-02 12:20:22',
                'updated_at' => '2023-09-04 13:37:40',
            ),
        ));
//        $id = DB::table('companies')->orderBy('id', 'DESC')->first();
//        DB::statement('alter sequence companies_id_seq restart with '.($id->id+1));

    }
}
