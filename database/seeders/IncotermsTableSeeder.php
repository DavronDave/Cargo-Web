<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IncotermsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('incoterms')->delete();

        \DB::table('incoterms')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'CIP TASHKENT',
                'created_at' => '2023-09-02 06:01:08',
                'updated_at' => '2023-09-02 12:22:31',
            ),
        ));

//        $id = DB::table('incoterms')->orderBy('id', 'DESC')->first();
//        DB::statement('alter sequence incoterms_id_seq restart with '.($id->id+1));
    }
}
