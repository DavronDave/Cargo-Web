<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ModuleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('module')->delete();
        
        \DB::table('module')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'Category',
                'description' => 'Category',
                'created_at' => '2024-03-09 15:16:27',
                'updated_at' => '2024-03-09 15:16:27',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'Product',
                'description' => 'Product',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'key' => 'Driver\'s passports',
                'description' => 'Driver\'s passports',
                'created_at' => '2024-03-11 12:26:03',
                'updated_at' => '2024-03-11 12:26:03',
            ),
            3 => 
            array (
                'id' => 5,
                'key' => 'Sender people',
                'description' => 'Sender people',
                'created_at' => '2024-03-11 12:33:44',
                'updated_at' => '2024-03-11 12:33:44',
            ),
            4 => 
            array (
                'id' => 6,
                'key' => 'Product invoice',
                'description' => 'Product invoice',
                'created_at' => '2024-03-11 12:50:42',
                'updated_at' => '2024-03-11 12:50:42',
            ),
            5 => 
            array (
                'id' => 7,
                'key' => 'Incoterms',
                'description' => 'Incoterms',
                'created_at' => '2024-03-11 12:52:11',
                'updated_at' => '2024-03-11 12:52:11',
            ),
            6 => 
            array (
                'id' => 3,
                'key' => 'Project',
                'description' => 'Project',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}