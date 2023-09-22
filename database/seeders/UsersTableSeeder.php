<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('users')->delete();

        DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'full_name' => 'Omonov Davron',
                'username' => 'admin',
                'password' => Hash::make('admin'),
                'role_id' => 1,
                'created_at' => '01.07.2023',
                'updated_at' => '01.07.2023',
            ),
            1 =>
            array (
                'id' => 2,
                'full_name' => 'Davron Moderator',
                'username' => 'DaveModerator',
                'password' => Hash::make('dave0099'),
                'role_id' => 2,
                'created_at' => '01.07.2023',
                'updated_at' => '01.07.2023',
            ),
        ));

        $id = DB::table('users')->orderBy('id', 'DESC')->first();
        DB::statement('alter sequence users_id_seq restart with '.($id->id+1));
    }
}
