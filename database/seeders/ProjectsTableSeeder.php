<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('projects')->delete();

        \DB::table('projects')->insert(array (
            0 =>
            array (
                'id' => 4,
                'code' => '2023-0001',
                'ready_date' => '2023-09-16',
                'sender_id' => 11,
                'receiver_id' => 1,
                'company_contract_id' => 1,
                'incoterm_id' => 1,
                'status' => 2,
                'created_at' => '2023-09-15 09:53:09',
                'updated_at' => '2023-09-16 05:34:38',
            ),
        ));

//        $id = DB::table('projects')->orderBy('id', 'DESC')->first();
//        DB::statement('alter sequence projects_id_seq restart with '.($id->id+1));

    }
}
