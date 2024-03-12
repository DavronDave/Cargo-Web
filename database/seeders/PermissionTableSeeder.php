<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permission')->delete();
        
        \DB::table('permission')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'Add',
                'description' => 'Add',
                'default_value' => true,
                'module_id' => 1,
                'created_at' => '2024-03-11 11:35:25',
                'updated_at' => '2024-03-11 11:35:25',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'Edit',
                'description' => 'Edit',
                'default_value' => true,
                'module_id' => 1,
                'created_at' => '2024-03-11 11:35:25',
                'updated_at' => '2024-03-11 11:35:25',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'Delete',
                'description' => 'Delete',
                'default_value' => true,
                'module_id' => 1,
                'created_at' => '2024-03-11 11:35:25',
                'updated_at' => '2024-03-11 11:35:25',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'Add',
                'description' => 'Add',
                'default_value' => true,
                'module_id' => 2,
                'created_at' => '2024-03-11 11:35:25',
                'updated_at' => '2024-03-11 11:35:25',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'Edit',
                'description' => 'Edit',
                'default_value' => true,
                'module_id' => 2,
                'created_at' => '2024-03-11 11:35:25',
                'updated_at' => '2024-03-11 11:35:25',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'Delete',
                'description' => 'Delete',
                'default_value' => true,
                'module_id' => 2,
                'created_at' => '2024-03-11 11:35:25',
                'updated_at' => '2024-03-11 11:35:25',
            ),
            6 => 
            array (
                'id' => 10,
                'key' => 'Invoices',
                'description' => 'Invoices',
                'default_value' => true,
                'module_id' => 3,
                'created_at' => '2024-03-11 11:35:25',
                'updated_at' => '2024-03-11 11:35:25',
            ),
            7 => 
            array (
                'id' => 11,
                'key' => 'Tnved',
                'description' => 'Tnved',
                'default_value' => true,
                'module_id' => 3,
                'created_at' => '2024-03-11 11:35:25',
                'updated_at' => '2024-03-11 11:35:25',
            ),
            8 => 
            array (
                'id' => 12,
                'key' => 'Proforma',
                'description' => 'Proforma',
                'default_value' => true,
                'module_id' => 3,
                'created_at' => '2024-03-11 11:35:25',
                'updated_at' => '2024-03-11 11:35:25',
            ),
            9 => 
            array (
                'id' => 13,
                'key' => 'Manifest',
                'description' => 'Manifest',
                'default_value' => true,
                'module_id' => 3,
                'created_at' => '2024-03-11 11:35:25',
                'updated_at' => '2024-03-11 11:35:25',
            ),
            10 => 
            array (
                'id' => 14,
                'key' => 'Excel',
                'description' => 'Excel',
                'default_value' => true,
                'module_id' => 3,
                'created_at' => '2024-03-11 11:35:25',
                'updated_at' => '2024-03-11 11:35:25',
            ),
            11 => 
            array (
                'id' => 15,
                'key' => 'Move invoices',
                'description' => 'Move invoices',
                'default_value' => true,
                'module_id' => 3,
                'created_at' => '2024-03-11 11:35:25',
                'updated_at' => '2024-03-11 11:35:25',
            ),
            12 => 
            array (
                'id' => 16,
                'key' => 'Import',
                'description' => 'Import',
                'default_value' => true,
                'module_id' => 3,
                'created_at' => '2024-03-11 11:35:25',
                'updated_at' => '2024-03-11 11:35:25',
            ),
            13 => 
            array (
                'id' => 17,
                'key' => 'Add invoice',
                'description' => 'Add invoice',
                'default_value' => true,
                'module_id' => 3,
                'created_at' => '2024-03-11 11:35:25',
                'updated_at' => '2024-03-11 11:35:25',
            ),
            14 => 
            array (
                'id' => 18,
                'key' => 'Edit invoice',
                'description' => 'Edit invoice',
                'default_value' => true,
                'module_id' => 3,
                'created_at' => '2024-03-11 11:35:25',
                'updated_at' => '2024-03-11 11:35:25',
            ),
            15 => 
            array (
                'id' => 19,
                'key' => 'Delete invoice',
                'description' => 'Delete invoice',
                'default_value' => true,
                'module_id' => 3,
                'created_at' => '2024-03-11 11:35:25',
                'updated_at' => '2024-03-11 11:35:25',
            ),
            16 => 
            array (
                'id' => 20,
                'key' => 'PDF invoice',
                'description' => 'PDF invoice',
                'default_value' => true,
                'module_id' => 3,
                'created_at' => '2024-03-11 11:35:25',
                'updated_at' => '2024-03-11 11:35:25',
            ),
            17 => 
            array (
                'id' => 21,
                'key' => 'PDF invoices',
                'description' => 'PDF invoices',
                'default_value' => true,
                'module_id' => 3,
                'created_at' => '2024-03-11 11:35:25',
                'updated_at' => '2024-03-11 11:35:25',
            ),
            18 => 
            array (
                'id' => 25,
                'key' => 'Passports',
                'description' => 'Passports',
                'default_value' => true,
                'module_id' => 4,
                'created_at' => '2024-03-11 11:35:25',
                'updated_at' => '2024-03-11 11:35:25',
            ),
            19 => 
            array (
                'id' => 26,
                'key' => 'Add passport',
                'description' => 'Add passport',
                'default_value' => true,
                'module_id' => 4,
                'created_at' => '2024-03-11 11:35:25',
                'updated_at' => '2024-03-11 11:35:25',
            ),
            20 => 
            array (
                'id' => 27,
                'key' => 'Edit passport',
                'description' => 'Edit passport',
                'default_value' => true,
                'module_id' => 4,
                'created_at' => '2024-03-11 11:35:25',
                'updated_at' => '2024-03-11 11:35:25',
            ),
            21 => 
            array (
                'id' => 28,
                'key' => 'Delete passport',
                'description' => 'Delete passport',
                'default_value' => true,
                'module_id' => 4,
                'created_at' => '2024-03-11 11:35:25',
                'updated_at' => '2024-03-11 11:35:25',
            ),
            22 => 
            array (
                'id' => 29,
                'key' => 'Move passports',
                'description' => 'Move passports',
                'default_value' => true,
                'module_id' => 4,
                'created_at' => '2024-03-11 11:35:25',
                'updated_at' => '2024-03-11 11:35:25',
            ),
            23 => 
            array (
                'id' => 7,
                'key' => 'Add project',
                'description' => 'Add project',
                'default_value' => true,
                'module_id' => 3,
                'created_at' => '2024-03-11 11:35:25',
                'updated_at' => '2024-03-11 11:35:25',
            ),
            24 => 
            array (
                'id' => 8,
                'key' => 'Edit project',
                'description' => 'Edit project',
                'default_value' => true,
                'module_id' => 3,
                'created_at' => '2024-03-11 11:35:25',
                'updated_at' => '2024-03-11 11:35:25',
            ),
            25 => 
            array (
                'id' => 9,
                'key' => 'Delete project',
                'description' => 'Delete project',
                'default_value' => true,
                'module_id' => 3,
                'created_at' => '2024-03-11 11:35:25',
                'updated_at' => '2024-03-11 11:35:25',
            ),
            26 => 
            array (
                'id' => 22,
                'key' => 'Add driver',
                'description' => 'Add driver',
                'default_value' => true,
                'module_id' => 4,
                'created_at' => '2024-03-11 11:35:25',
                'updated_at' => '2024-03-11 11:35:25',
            ),
            27 => 
            array (
                'id' => 23,
                'key' => 'Edit driver',
                'description' => 'Edit driver',
                'default_value' => true,
                'module_id' => 4,
                'created_at' => '2024-03-11 11:35:25',
                'updated_at' => '2024-03-11 11:35:25',
            ),
            28 => 
            array (
                'id' => 24,
                'key' => 'Delete driver',
                'description' => 'Delete driver',
                'default_value' => true,
                'module_id' => 4,
                'created_at' => '2024-03-11 11:35:25',
                'updated_at' => '2024-03-11 11:35:25',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'Add sender',
                'description' => 'Add sender',
                'default_value' => true,
                'module_id' => 5,
                'created_at' => '2024-03-11 11:35:25',
                'updated_at' => '2024-03-11 11:35:25',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'Edit sender',
                'description' => 'Edit sender',
                'default_value' => true,
                'module_id' => 5,
                'created_at' => '2024-03-11 11:35:25',
                'updated_at' => '2024-03-11 11:35:25',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'Delete sender',
                'description' => 'Delete sender',
                'default_value' => true,
                'module_id' => 5,
                'created_at' => '2024-03-11 11:35:25',
                'updated_at' => '2024-03-11 11:35:25',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'Add invoice product',
                'description' => 'Add invoice product',
                'default_value' => true,
                'module_id' => 6,
                'created_at' => '2024-03-11 11:35:25',
                'updated_at' => '2024-03-11 11:35:25',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'Delete invoice product',
                'description' => 'Delete invoice product',
                'default_value' => true,
                'module_id' => 6,
                'created_at' => '2024-03-11 11:35:25',
                'updated_at' => '2024-03-11 11:35:25',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'Add incoterm',
                'description' => 'Add incoterm',
                'default_value' => true,
                'module_id' => 7,
                'created_at' => '2024-03-11 11:35:25',
                'updated_at' => '2024-03-11 11:35:25',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'Edit incoterm',
                'description' => 'Edit incoterm',
                'default_value' => true,
                'module_id' => 7,
                'created_at' => '2024-03-11 11:35:25',
                'updated_at' => '2024-03-11 11:35:25',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'Delete incoterm',
                'description' => 'Delete incoterm',
                'default_value' => true,
                'module_id' => 7,
                'created_at' => '2024-03-11 11:35:25',
                'updated_at' => '2024-03-11 11:35:25',
            ),
        ));
        
        
    }
}