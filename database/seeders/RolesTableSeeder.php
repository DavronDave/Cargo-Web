<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('roles')->delete();

        DB::table('roles')->insert(array (
            0 =>
            array (
                'id' => 1,
                'key' => 'admin',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 =>
                array (
                    'id' => 2,
                    'key' => 'Moderator',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            2 =>
                array (
                    'id' => 3,
                    'key' => 'user',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
        ));

//        $id = DB::table('roles')->orderBy('id', 'DESC')->first();
//        DB::statement('alter sequence roles_id_seq restart with '.($id->id+1));
    }
}
