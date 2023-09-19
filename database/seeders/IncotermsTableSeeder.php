<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
        
        
    }
}