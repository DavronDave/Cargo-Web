<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('regions')->delete();

        \DB::table('regions')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Samarqand',
                'country_id' => 1,
                'created_at' => '2023-09-02 12:19:08',
                'updated_at' => '2023-09-02 12:19:08',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Toshkent',
                'country_id' => 1,
                'created_at' => '2023-09-04 13:30:07',
                'updated_at' => '2023-09-04 13:30:07',
            ),
            2 =>
            array (
                'id' => 4,
                'name' => 'Navoiy',
                'country_id' => 1,
                'created_at' => '2023-09-04 13:37:27',
                'updated_at' => '2023-09-15 05:49:22',
            ),
            3 =>
            array (
                'id' => 3,
                'name' => 'Buxoro',
                'country_id' => 1,
                'created_at' => '2023-09-04 13:31:50',
                'updated_at' => '2023-09-15 05:50:35',
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'Andijon',
                'country_id' => 1,
                'created_at' => '2023-09-15 05:50:48',
                'updated_at' => '2023-09-15 05:50:48',
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'Namangan',
                'country_id' => 1,
                'created_at' => '2023-09-15 05:50:58',
                'updated_at' => '2023-09-15 05:50:58',
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'Farg\'ona',
                'country_id' => 1,
                'created_at' => '2023-09-15 05:51:06',
                'updated_at' => '2023-09-15 05:51:06',
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'Qashqadaryo',
                'country_id' => 1,
                'created_at' => '2023-09-15 05:51:39',
                'updated_at' => '2023-09-15 05:51:39',
            ),
            8 =>
            array (
                'id' => 9,
                'name' => 'Surxandaryo',
                'country_id' => 1,
                'created_at' => '2023-09-15 05:51:55',
                'updated_at' => '2023-09-15 05:51:55',
            ),
            9 =>
            array (
                'id' => 10,
                'name' => 'Xorazm',
                'country_id' => 1,
                'created_at' => '2023-09-15 05:52:05',
                'updated_at' => '2023-09-15 05:52:05',
            ),
            10 =>
            array (
                'id' => 11,
                'name' => 'Jizzax',
                'country_id' => 1,
                'created_at' => '2023-09-15 05:52:19',
                'updated_at' => '2023-09-15 05:52:19',
            ),
            11 =>
            array (
                'id' => 12,
                'name' => 'Sirdaryo',
                'country_id' => 1,
                'created_at' => '2023-09-15 05:52:29',
                'updated_at' => '2023-09-15 05:52:29',
            ),
        ));

        $id = DB::table('regions')->orderBy('id', 'DESC')->first();
        DB::statement('alter sequence regions_id_seq restart with '.($id->id+1));
    }
}
