<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanyContractsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('company_contracts')->delete();

        \DB::table('company_contracts')->insert(array (
            0 =>
            array (
                'id' => 1,
                'sender_id' => 11,
                'receiver_id' => 1,
                'from_date' => '2023-05-07',
                'code' => '0001',
                'status' => true,
                'created_at' => '2023-09-02 12:21:40',
                'updated_at' => '2023-09-04 13:35:55',
            ),
        ));

        $id = DB::table('company_contracts')->orderBy('id', 'DESC')->first();
        DB::statement('alter sequence company_contracts_id_seq restart with '.($id->id+1));
    }
}
