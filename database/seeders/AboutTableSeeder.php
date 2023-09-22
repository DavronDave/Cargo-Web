<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('about')->delete();

        DB::table('about')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'photo' => '',
                    'video' => '',
                    'created_at' => '01.07.2023',
                    'updated_at' => '01.07.2023',
                ),
        ));

//        $id = DB::table('about')->orderBy('id', 'DESC')->first();
//        DB::statement('alter sequence about_id_seq restart with '.($id->id+1));
    }
}
