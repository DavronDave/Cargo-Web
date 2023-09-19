<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_categories')->delete();
        
        \DB::table('product_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Одежда разные',
                'code' => '6309000000',
                'created_at' => '2023-09-04 13:39:39',
                'updated_at' => '2023-09-04 13:39:39',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Бытовые техники',
                'code' => '8418215900',
                'created_at' => '2023-09-14 18:38:05',
                'updated_at' => '2023-09-14 18:38:05',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Обувь разные',
                'code' => '6405909000',
                'created_at' => '2023-09-14 18:38:30',
                'updated_at' => '2023-09-14 18:38:30',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'инструменты разные',
                'code' => '8205598099',
                'created_at' => '2023-09-14 18:38:53',
                'updated_at' => '2023-09-14 18:38:53',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'продукты питания, сладости разные',
                'code' => '1901100000',
                'created_at' => '2023-09-14 18:39:28',
                'updated_at' => '2023-09-14 18:39:28',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Запасные части',
                'code' => '8421230000',
                'created_at' => '2023-09-14 18:39:48',
                'updated_at' => '2023-09-14 18:39:48',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'велосипеды, самокаты',
                'code' => '9503001009',
                'created_at' => '2023-09-14 18:40:03',
                'updated_at' => '2023-09-14 18:40:03',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'канцтовары',
                'code' => '4820900000',
                'created_at' => '2023-09-14 18:40:17',
                'updated_at' => '2023-09-14 18:40:17',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'кухонные наборы',
                'code' => '3924100000',
                'created_at' => '2023-09-14 18:40:30',
                'updated_at' => '2023-09-14 18:40:30',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'гигиенические средства, Парфюмерия',
                'code' => '3306900000',
                'created_at' => '2023-09-14 18:41:25',
                'updated_at' => '2023-09-14 18:41:25',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'игрушки для детей',
                'code' => '9503007000',
                'created_at' => '2023-09-14 18:41:41',
                'updated_at' => '2023-09-14 18:41:41',
            ),
        ));
        
        
    }
}