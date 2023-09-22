<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DriversTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('drivers')->delete();

        \DB::table('drivers')->insert(array (
            0 =>
            array (
                'id' => 3,
                'name' => 'Zafar aka - Odil aka',
                'company_id' => 11,
                'created_at' => '2023-09-15 06:44:16',
                'updated_at' => '2023-09-15 06:44:16',
            ),
        ));

        $id = DB::table('drivers')->orderBy('id', 'DESC')->first();
        DB::statement('alter sequence drivers_id_seq restart with '.($id->id+1));
    }
}
