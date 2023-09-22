<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('districts')->delete();

        \DB::table('districts')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Kattaqo\'rg\'on',
                'region_id' => 1,
                'created_at' => '2023-09-02 12:19:44',
                'updated_at' => '2023-09-02 12:19:44',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Yunusobod',
                'region_id' => 2,
                'created_at' => '2023-09-04 13:30:23',
                'updated_at' => '2023-09-04 13:30:23',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Санкт-Петербургом',
                'region_id' => 3,
                'created_at' => '2023-09-04 13:33:25',
                'updated_at' => '2023-09-04 13:34:16',
            ),
        ));

        $id = DB::table('districts')->orderBy('id', 'DESC')->first();
        DB::statement('alter sequence districts_id_seq restart with '.($id->id+1));
    }
}
