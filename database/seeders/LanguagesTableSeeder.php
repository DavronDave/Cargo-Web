<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('languages')->delete();

        DB::table('languages')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'uzbek',
                'url' => 'uz',
                'image' => '/admin-assets/img/uz.png',
                'default' => 1,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => '2023-01-28 04:16:44',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'english',
                'url' => 'en',
                'image' => '/admin-assets/img/en.png',
                'default' => 2,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => '2023-01-28 04:17:04',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'русский',
                'url' => 'ru',
                'image' => '/admin-assets/img/ru.png',
                'default' => 2,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => '2023-01-28 04:17:16',
            )
        ));
    }
}
