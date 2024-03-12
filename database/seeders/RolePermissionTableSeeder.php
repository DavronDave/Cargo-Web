<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolePermissionTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('role_permission')->delete();
        
        \DB::table('role_permission')->insert(array (
            0 => 
            array (
                'id' => 55,
                'permission_id' => 1,
                'role_id' => 2,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 56,
                'permission_id' => 2,
                'role_id' => 2,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 57,
                'permission_id' => 3,
                'role_id' => 2,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 88,
                'permission_id' => 7,
                'role_id' => 2,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 86,
                'permission_id' => 9,
                'role_id' => 2,
                'value' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 87,
                'permission_id' => 8,
                'role_id' => 2,
                'value' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 66,
                'permission_id' => 27,
                'role_id' => 2,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 67,
                'permission_id' => 28,
                'role_id' => 2,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 70,
                'permission_id' => 11,
                'role_id' => 2,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 71,
                'permission_id' => 12,
                'role_id' => 2,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 72,
                'permission_id' => 13,
                'role_id' => 2,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 75,
                'permission_id' => 20,
                'role_id' => 2,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 76,
                'permission_id' => 19,
                'role_id' => 2,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 73,
                'permission_id' => 14,
                'role_id' => 2,
                'value' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 77,
                'permission_id' => 18,
                'role_id' => 2,
                'value' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 64,
                'permission_id' => 22,
                'role_id' => 2,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 74,
                'permission_id' => 21,
                'role_id' => 2,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 80,
                'permission_id' => 15,
                'role_id' => 2,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 79,
                'permission_id' => 16,
                'role_id' => 2,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 78,
                'permission_id' => 17,
                'role_id' => 2,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 63,
                'permission_id' => 23,
                'role_id' => 2,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 62,
                'permission_id' => 24,
                'role_id' => 2,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 61,
                'permission_id' => 25,
                'role_id' => 2,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 81,
                'permission_id' => 30,
                'role_id' => 2,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 82,
                'permission_id' => 31,
                'role_id' => 2,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 83,
                'permission_id' => 32,
                'role_id' => 2,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 65,
                'permission_id' => 26,
                'role_id' => 2,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 68,
                'permission_id' => 29,
                'role_id' => 2,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 84,
                'permission_id' => 33,
                'role_id' => 2,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 85,
                'permission_id' => 34,
                'role_id' => 2,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 90,
                'permission_id' => 36,
                'role_id' => 2,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 91,
                'permission_id' => 37,
                'role_id' => 2,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 89,
                'permission_id' => 35,
                'role_id' => 2,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 59,
                'permission_id' => 5,
                'role_id' => 2,
                'value' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 60,
                'permission_id' => 6,
                'role_id' => 2,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 58,
                'permission_id' => 4,
                'role_id' => 2,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 69,
                'permission_id' => 10,
                'role_id' => 2,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 93,
                'permission_id' => 5,
                'role_id' => 3,
                'value' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 94,
                'permission_id' => 6,
                'role_id' => 3,
                'value' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 97,
                'permission_id' => 7,
                'role_id' => 3,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 98,
                'permission_id' => 21,
                'role_id' => 3,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 99,
                'permission_id' => 20,
                'role_id' => 3,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 100,
                'permission_id' => 19,
                'role_id' => 3,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 101,
                'permission_id' => 18,
                'role_id' => 3,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 102,
                'permission_id' => 17,
                'role_id' => 3,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 103,
                'permission_id' => 10,
                'role_id' => 3,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 104,
                'permission_id' => 11,
                'role_id' => 3,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 105,
                'permission_id' => 12,
                'role_id' => 3,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 106,
                'permission_id' => 13,
                'role_id' => 3,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 109,
                'permission_id' => 16,
                'role_id' => 3,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 95,
                'permission_id' => 9,
                'role_id' => 3,
                'value' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 96,
                'permission_id' => 8,
                'role_id' => 3,
                'value' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 107,
                'permission_id' => 14,
                'role_id' => 3,
                'value' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 108,
                'permission_id' => 15,
                'role_id' => 3,
                'value' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 113,
                'permission_id' => 25,
                'role_id' => 3,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 114,
                'permission_id' => 26,
                'role_id' => 3,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 115,
                'permission_id' => 27,
                'role_id' => 3,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 116,
                'permission_id' => 28,
                'role_id' => 3,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 117,
                'permission_id' => 29,
                'role_id' => 3,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 110,
                'permission_id' => 22,
                'role_id' => 3,
                'value' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 111,
                'permission_id' => 23,
                'role_id' => 3,
                'value' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 112,
                'permission_id' => 24,
                'role_id' => 3,
                'value' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 118,
                'permission_id' => 30,
                'role_id' => 3,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 119,
                'permission_id' => 31,
                'role_id' => 3,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 120,
                'permission_id' => 32,
                'role_id' => 3,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 121,
                'permission_id' => 33,
                'role_id' => 3,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 122,
                'permission_id' => 34,
                'role_id' => 3,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 125,
                'permission_id' => 37,
                'role_id' => 3,
                'value' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 124,
                'permission_id' => 36,
                'role_id' => 3,
                'value' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 123,
                'permission_id' => 35,
                'role_id' => 3,
                'value' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 126,
                'permission_id' => 1,
                'role_id' => 3,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 92,
                'permission_id' => 4,
                'role_id' => 3,
                'value' => true,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}