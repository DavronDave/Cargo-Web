<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InvoiceProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('invoice_products')->delete();

        \DB::table('invoice_products')->insert(array (
            0 =>
            array (
                'id' => 16,
                'product_id' => 36,
                'quantity' => 1,
                'price' => '15',
                'invoice_id' => 75,
                'created_at' => '2023-09-15 09:55:00',
                'updated_at' => '2023-09-15 09:55:00',
            ),
            1 =>
            array (
                'id' => 17,
                'product_id' => 93,
                'quantity' => 1,
                'price' => '16',
                'invoice_id' => 76,
                'created_at' => '2023-09-15 10:00:48',
                'updated_at' => '2023-09-15 10:00:48',
            ),
            2 =>
            array (
                'id' => 18,
                'product_id' => 94,
                'quantity' => 1,
                'price' => '17',
                'invoice_id' => 77,
                'created_at' => '2023-09-15 10:02:17',
                'updated_at' => '2023-09-15 10:02:17',
            ),
            3 =>
            array (
                'id' => 19,
                'product_id' => 36,
                'quantity' => 1,
                'price' => '18',
                'invoice_id' => 78,
                'created_at' => '2023-09-15 10:02:41',
                'updated_at' => '2023-09-15 10:02:41',
            ),
            4 =>
            array (
                'id' => 20,
                'product_id' => 3,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 79,
                'created_at' => '2023-09-15 10:05:28',
                'updated_at' => '2023-09-15 10:05:28',
            ),
            5 =>
            array (
                'id' => 21,
                'product_id' => 41,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 79,
                'created_at' => '2023-09-15 10:05:28',
                'updated_at' => '2023-09-15 10:05:28',
            ),
            6 =>
            array (
                'id' => 22,
                'product_id' => 82,
                'quantity' => 8,
                'price' => '6',
                'invoice_id' => 79,
                'created_at' => '2023-09-15 10:05:28',
                'updated_at' => '2023-09-15 10:05:28',
            ),
            7 =>
            array (
                'id' => 23,
                'product_id' => 31,
                'quantity' => 5,
                'price' => '6',
                'invoice_id' => 79,
                'created_at' => '2023-09-15 10:05:28',
                'updated_at' => '2023-09-15 10:05:28',
            ),
            8 =>
            array (
                'id' => 24,
                'product_id' => 84,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 79,
                'created_at' => '2023-09-15 10:05:28',
                'updated_at' => '2023-09-15 10:05:28',
            ),
            9 =>
            array (
                'id' => 25,
                'product_id' => 95,
                'quantity' => 2,
                'price' => '6',
                'invoice_id' => 80,
                'created_at' => '2023-09-15 10:08:05',
                'updated_at' => '2023-09-15 10:08:05',
            ),
            10 =>
            array (
                'id' => 26,
                'product_id' => 4,
                'quantity' => 2,
                'price' => '8',
                'invoice_id' => 80,
                'created_at' => '2023-09-15 10:08:05',
                'updated_at' => '2023-09-15 10:08:05',
            ),
            11 =>
            array (
                'id' => 27,
                'product_id' => 41,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 80,
                'created_at' => '2023-09-15 10:08:05',
                'updated_at' => '2023-09-15 10:08:05',
            ),
            12 =>
            array (
                'id' => 28,
                'product_id' => 32,
                'quantity' => 1,
                'price' => '4',
                'invoice_id' => 81,
                'created_at' => '2023-09-15 10:09:26',
                'updated_at' => '2023-09-15 10:09:26',
            ),
            13 =>
            array (
                'id' => 29,
                'product_id' => 23,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 81,
                'created_at' => '2023-09-15 10:09:26',
                'updated_at' => '2023-09-15 10:09:26',
            ),
            14 =>
            array (
                'id' => 30,
                'product_id' => 3,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 81,
                'created_at' => '2023-09-15 10:09:26',
                'updated_at' => '2023-09-15 10:09:26',
            ),
            15 =>
            array (
                'id' => 31,
                'product_id' => 12,
                'quantity' => 10,
                'price' => '7',
                'invoice_id' => 81,
                'created_at' => '2023-09-15 10:09:26',
                'updated_at' => '2023-09-15 10:09:26',
            ),
            16 =>
            array (
                'id' => 32,
                'product_id' => 11,
                'quantity' => 3,
                'price' => '8',
                'invoice_id' => 81,
                'created_at' => '2023-09-15 10:09:26',
                'updated_at' => '2023-09-15 10:09:26',
            ),
            17 =>
            array (
                'id' => 33,
                'product_id' => 95,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 81,
                'created_at' => '2023-09-15 10:09:26',
                'updated_at' => '2023-09-15 10:09:26',
            ),
            18 =>
            array (
                'id' => 34,
                'product_id' => 85,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 82,
                'created_at' => '2023-09-15 10:10:46',
                'updated_at' => '2023-09-15 10:10:46',
            ),
            19 =>
            array (
                'id' => 35,
                'product_id' => 20,
                'quantity' => 1,
                'price' => '4',
                'invoice_id' => 82,
                'created_at' => '2023-09-15 10:10:46',
                'updated_at' => '2023-09-15 10:10:46',
            ),
            20 =>
            array (
                'id' => 36,
                'product_id' => 27,
                'quantity' => 1,
                'price' => '4',
                'invoice_id' => 82,
                'created_at' => '2023-09-15 10:10:46',
                'updated_at' => '2023-09-15 10:10:46',
            ),
            21 =>
            array (
                'id' => 37,
                'product_id' => 92,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 82,
                'created_at' => '2023-09-15 10:10:46',
                'updated_at' => '2023-09-15 10:10:46',
            ),
            22 =>
            array (
                'id' => 38,
                'product_id' => 86,
                'quantity' => 1,
                'price' => '10',
                'invoice_id' => 82,
                'created_at' => '2023-09-15 10:10:46',
                'updated_at' => '2023-09-15 10:10:46',
            ),
            23 =>
            array (
                'id' => 39,
                'product_id' => 80,
                'quantity' => 1,
                'price' => '11',
                'invoice_id' => 83,
                'created_at' => '2023-09-15 10:11:21',
                'updated_at' => '2023-09-15 10:11:21',
            ),
            24 =>
            array (
                'id' => 40,
                'product_id' => 73,
                'quantity' => 1,
                'price' => '9',
                'invoice_id' => 83,
                'created_at' => '2023-09-15 10:11:21',
                'updated_at' => '2023-09-15 10:11:21',
            ),
            25 =>
            array (
                'id' => 41,
                'product_id' => 14,
                'quantity' => 1,
                'price' => '11',
                'invoice_id' => 84,
                'created_at' => '2023-09-15 10:15:57',
                'updated_at' => '2023-09-15 10:15:57',
            ),
            26 =>
            array (
                'id' => 42,
                'product_id' => 58,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 84,
                'created_at' => '2023-09-15 10:15:57',
                'updated_at' => '2023-09-15 10:15:57',
            ),
            27 =>
            array (
                'id' => 43,
                'product_id' => 97,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 84,
                'created_at' => '2023-09-15 10:15:57',
                'updated_at' => '2023-09-15 10:15:57',
            ),
            28 =>
            array (
                'id' => 44,
                'product_id' => 96,
                'quantity' => 1,
                'price' => '15',
                'invoice_id' => 84,
                'created_at' => '2023-09-15 10:15:57',
                'updated_at' => '2023-09-15 10:15:57',
            ),
            29 =>
            array (
                'id' => 45,
                'product_id' => 51,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 85,
                'created_at' => '2023-09-15 10:21:40',
                'updated_at' => '2023-09-15 10:21:40',
            ),
            30 =>
            array (
                'id' => 46,
                'product_id' => 101,
                'quantity' => 4,
                'price' => '16',
                'invoice_id' => 85,
                'created_at' => '2023-09-15 10:21:40',
                'updated_at' => '2023-09-15 10:21:40',
            ),
            31 =>
            array (
                'id' => 47,
                'product_id' => 102,
                'quantity' => 3,
                'price' => '13',
                'invoice_id' => 85,
                'created_at' => '2023-09-15 10:21:40',
                'updated_at' => '2023-09-15 10:21:40',
            ),
            32 =>
            array (
                'id' => 48,
                'product_id' => 4,
                'quantity' => 2,
                'price' => '8',
                'invoice_id' => 86,
                'created_at' => '2023-09-15 10:23:02',
                'updated_at' => '2023-09-15 10:23:02',
            ),
            33 =>
            array (
                'id' => 49,
                'product_id' => 104,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 86,
                'created_at' => '2023-09-15 10:23:02',
                'updated_at' => '2023-09-15 10:23:02',
            ),
            34 =>
            array (
                'id' => 50,
                'product_id' => 88,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 87,
                'created_at' => '2023-09-15 10:24:50',
                'updated_at' => '2023-09-15 10:24:50',
            ),
            35 =>
            array (
                'id' => 51,
                'product_id' => 79,
                'quantity' => 2,
                'price' => '5',
                'invoice_id' => 87,
                'created_at' => '2023-09-15 10:24:50',
                'updated_at' => '2023-09-15 10:24:50',
            ),
            36 =>
            array (
                'id' => 52,
                'product_id' => 110,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 88,
                'created_at' => '2023-09-15 10:35:29',
                'updated_at' => '2023-09-15 10:35:29',
            ),
            37 =>
            array (
                'id' => 53,
                'product_id' => 109,
                'quantity' => 1,
                'price' => '12',
                'invoice_id' => 88,
                'created_at' => '2023-09-15 10:35:29',
                'updated_at' => '2023-09-15 10:35:29',
            ),
            38 =>
            array (
                'id' => 54,
                'product_id' => 75,
                'quantity' => 1,
                'price' => '15',
                'invoice_id' => 88,
                'created_at' => '2023-09-15 10:35:29',
                'updated_at' => '2023-09-15 10:35:29',
            ),
            39 =>
            array (
                'id' => 55,
                'product_id' => 2,
                'quantity' => 2,
                'price' => '7',
                'invoice_id' => 89,
                'created_at' => '2023-09-15 10:41:57',
                'updated_at' => '2023-09-15 10:41:57',
            ),
            40 =>
            array (
                'id' => 56,
                'product_id' => 41,
                'quantity' => 3,
                'price' => '8',
                'invoice_id' => 89,
                'created_at' => '2023-09-15 10:41:57',
                'updated_at' => '2023-09-15 10:41:57',
            ),
            41 =>
            array (
                'id' => 57,
                'product_id' => 3,
                'quantity' => 1,
                'price' => '6',
                'invoice_id' => 89,
                'created_at' => '2023-09-15 10:41:57',
                'updated_at' => '2023-09-15 10:41:57',
            ),
            42 =>
            array (
                'id' => 58,
                'product_id' => 113,
                'quantity' => 1,
                'price' => '22',
                'invoice_id' => 90,
                'created_at' => '2023-09-15 10:45:42',
                'updated_at' => '2023-09-15 10:45:42',
            ),
            43 =>
            array (
                'id' => 59,
                'product_id' => 114,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 91,
                'created_at' => '2023-09-15 10:46:38',
                'updated_at' => '2023-09-15 10:46:38',
            ),
            44 =>
            array (
                'id' => 60,
                'product_id' => 116,
                'quantity' => 1,
                'price' => '4',
                'invoice_id' => 91,
                'created_at' => '2023-09-15 10:46:38',
                'updated_at' => '2023-09-15 10:46:38',
            ),
            45 =>
            array (
                'id' => 61,
                'product_id' => 20,
                'quantity' => 1,
                'price' => '6',
                'invoice_id' => 91,
                'created_at' => '2023-09-15 10:46:38',
                'updated_at' => '2023-09-15 10:46:38',
            ),
            46 =>
            array (
                'id' => 62,
                'product_id' => 41,
                'quantity' => 2,
                'price' => '8',
                'invoice_id' => 91,
                'created_at' => '2023-09-15 10:46:38',
                'updated_at' => '2023-09-15 10:46:38',
            ),
            47 =>
            array (
                'id' => 68,
                'product_id' => 16,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 92,
                'created_at' => '2023-09-15 10:49:52',
                'updated_at' => '2023-09-15 10:49:52',
            ),
            48 =>
            array (
                'id' => 69,
                'product_id' => 95,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 92,
                'created_at' => '2023-09-15 10:49:52',
                'updated_at' => '2023-09-15 10:49:52',
            ),
            49 =>
            array (
                'id' => 70,
                'product_id' => 118,
                'quantity' => 1,
                'price' => '4',
                'invoice_id' => 92,
                'created_at' => '2023-09-15 10:49:52',
                'updated_at' => '2023-09-15 10:49:52',
            ),
            50 =>
            array (
                'id' => 72,
                'product_id' => 58,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 93,
                'created_at' => '2023-09-15 10:51:39',
                'updated_at' => '2023-09-15 10:51:39',
            ),
            51 =>
            array (
                'id' => 73,
                'product_id' => 119,
                'quantity' => 1,
                'price' => '3',
                'invoice_id' => 93,
                'created_at' => '2023-09-15 10:51:39',
                'updated_at' => '2023-09-15 10:51:39',
            ),
            52 =>
            array (
                'id' => 74,
                'product_id' => 121,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 94,
                'created_at' => '2023-09-15 10:56:05',
                'updated_at' => '2023-09-15 10:56:05',
            ),
            53 =>
            array (
                'id' => 75,
                'product_id' => 114,
                'quantity' => 1,
                'price' => '6',
                'invoice_id' => 94,
                'created_at' => '2023-09-15 10:56:05',
                'updated_at' => '2023-09-15 10:56:05',
            ),
            54 =>
            array (
                'id' => 76,
                'product_id' => 75,
                'quantity' => 1,
                'price' => '12',
                'invoice_id' => 94,
                'created_at' => '2023-09-15 10:56:05',
                'updated_at' => '2023-09-15 10:56:05',
            ),
            55 =>
            array (
                'id' => 77,
                'product_id' => 3,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 94,
                'created_at' => '2023-09-15 10:56:05',
                'updated_at' => '2023-09-15 10:56:05',
            ),
            56 =>
            array (
                'id' => 78,
                'product_id' => 20,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 94,
                'created_at' => '2023-09-15 10:56:05',
                'updated_at' => '2023-09-15 10:56:05',
            ),
            57 =>
            array (
                'id' => 79,
                'product_id' => 36,
                'quantity' => 1,
                'price' => '13',
                'invoice_id' => 95,
                'created_at' => '2023-09-15 10:57:10',
                'updated_at' => '2023-09-15 10:57:10',
            ),
            58 =>
            array (
                'id' => 80,
                'product_id' => 22,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 95,
                'created_at' => '2023-09-15 10:57:10',
                'updated_at' => '2023-09-15 10:57:10',
            ),
            59 =>
            array (
                'id' => 81,
                'product_id' => 118,
                'quantity' => 2,
                'price' => '8',
                'invoice_id' => 95,
                'created_at' => '2023-09-15 10:57:10',
                'updated_at' => '2023-09-15 10:57:10',
            ),
            60 =>
            array (
                'id' => 82,
                'product_id' => 20,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 96,
                'created_at' => '2023-09-15 10:59:13',
                'updated_at' => '2023-09-15 10:59:13',
            ),
            61 =>
            array (
                'id' => 83,
                'product_id' => 95,
                'quantity' => 1,
                'price' => '6',
                'invoice_id' => 96,
                'created_at' => '2023-09-15 10:59:13',
                'updated_at' => '2023-09-15 10:59:13',
            ),
            62 =>
            array (
                'id' => 84,
                'product_id' => 123,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 96,
                'created_at' => '2023-09-15 10:59:13',
                'updated_at' => '2023-09-15 10:59:13',
            ),
            63 =>
            array (
                'id' => 85,
                'product_id' => 28,
                'quantity' => 10,
                'price' => '7',
                'invoice_id' => 96,
                'created_at' => '2023-09-15 10:59:13',
                'updated_at' => '2023-09-15 10:59:13',
            ),
            64 =>
            array (
                'id' => 86,
                'product_id' => 124,
                'quantity' => 1,
                'price' => '11',
                'invoice_id' => 97,
                'created_at' => '2023-09-15 11:02:14',
                'updated_at' => '2023-09-15 11:02:14',
            ),
            65 =>
            array (
                'id' => 87,
                'product_id' => 4,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 97,
                'created_at' => '2023-09-15 11:02:14',
                'updated_at' => '2023-09-15 11:02:14',
            ),
            66 =>
            array (
                'id' => 88,
                'product_id' => 125,
                'quantity' => 1,
                'price' => '6',
                'invoice_id' => 97,
                'created_at' => '2023-09-15 11:02:14',
                'updated_at' => '2023-09-15 11:02:14',
            ),
            67 =>
            array (
                'id' => 89,
                'product_id' => 41,
                'quantity' => 2,
                'price' => '8',
                'invoice_id' => 97,
                'created_at' => '2023-09-15 11:02:14',
                'updated_at' => '2023-09-15 11:02:14',
            ),
            68 =>
            array (
                'id' => 90,
                'product_id' => 95,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 98,
                'created_at' => '2023-09-15 11:03:20',
                'updated_at' => '2023-09-15 11:03:20',
            ),
            69 =>
            array (
                'id' => 91,
                'product_id' => 3,
                'quantity' => 1,
                'price' => '10',
                'invoice_id' => 98,
                'created_at' => '2023-09-15 11:03:20',
                'updated_at' => '2023-09-15 11:03:20',
            ),
            70 =>
            array (
                'id' => 92,
                'product_id' => 41,
                'quantity' => 2,
                'price' => '8',
                'invoice_id' => 98,
                'created_at' => '2023-09-15 11:03:20',
                'updated_at' => '2023-09-15 11:03:20',
            ),
            71 =>
            array (
                'id' => 93,
                'product_id' => 20,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 98,
                'created_at' => '2023-09-15 11:03:20',
                'updated_at' => '2023-09-15 11:03:20',
            ),
            72 =>
            array (
                'id' => 94,
                'product_id' => 127,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 99,
                'created_at' => '2023-09-15 11:05:07',
                'updated_at' => '2023-09-15 11:05:07',
            ),
            73 =>
            array (
                'id' => 95,
                'product_id' => 6,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 99,
                'created_at' => '2023-09-15 11:05:07',
                'updated_at' => '2023-09-15 11:05:07',
            ),
            74 =>
            array (
                'id' => 96,
                'product_id' => 41,
                'quantity' => 2,
                'price' => '8',
                'invoice_id' => 99,
                'created_at' => '2023-09-15 11:05:07',
                'updated_at' => '2023-09-15 11:05:07',
            ),
            75 =>
            array (
                'id' => 97,
                'product_id' => 11,
                'quantity' => 3,
                'price' => '6',
                'invoice_id' => 99,
                'created_at' => '2023-09-15 11:05:07',
                'updated_at' => '2023-09-15 11:05:07',
            ),
            76 =>
            array (
                'id' => 98,
                'product_id' => 12,
                'quantity' => 10,
                'price' => '8',
                'invoice_id' => 99,
                'created_at' => '2023-09-15 11:05:07',
                'updated_at' => '2023-09-15 11:05:07',
            ),
            77 =>
            array (
                'id' => 99,
                'product_id' => 32,
                'quantity' => 1,
                'price' => '11',
                'invoice_id' => 100,
                'created_at' => '2023-09-15 11:06:03',
                'updated_at' => '2023-09-15 11:06:03',
            ),
            78 =>
            array (
                'id' => 100,
                'product_id' => 2,
                'quantity' => 2,
                'price' => '8',
                'invoice_id' => 100,
                'created_at' => '2023-09-15 11:06:03',
                'updated_at' => '2023-09-15 11:06:03',
            ),
            79 =>
            array (
                'id' => 101,
                'product_id' => 1,
                'quantity' => 2,
                'price' => '8',
                'invoice_id' => 100,
                'created_at' => '2023-09-15 11:06:03',
                'updated_at' => '2023-09-15 11:06:03',
            ),
            80 =>
            array (
                'id' => 102,
                'product_id' => 16,
                'quantity' => 1,
                'price' => '6',
                'invoice_id' => 100,
                'created_at' => '2023-09-15 11:06:03',
                'updated_at' => '2023-09-15 11:06:03',
            ),
            81 =>
            array (
                'id' => 105,
                'product_id' => 51,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 101,
                'created_at' => '2023-09-15 11:30:37',
                'updated_at' => '2023-09-15 11:30:37',
            ),
            82 =>
            array (
                'id' => 106,
                'product_id' => 73,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 101,
                'created_at' => '2023-09-15 11:30:37',
                'updated_at' => '2023-09-15 11:30:37',
            ),
            83 =>
            array (
                'id' => 107,
                'product_id' => 132,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 101,
                'created_at' => '2023-09-15 11:30:37',
                'updated_at' => '2023-09-15 11:30:37',
            ),
            84 =>
            array (
                'id' => 108,
                'product_id' => 133,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 102,
                'created_at' => '2023-09-15 11:30:55',
                'updated_at' => '2023-09-15 11:30:55',
            ),
            85 =>
            array (
                'id' => 109,
                'product_id' => 134,
                'quantity' => 1,
                'price' => '12',
                'invoice_id' => 103,
                'created_at' => '2023-09-15 11:33:05',
                'updated_at' => '2023-09-15 11:33:05',
            ),
            86 =>
            array (
                'id' => 110,
                'product_id' => 136,
                'quantity' => 1,
                'price' => '9',
                'invoice_id' => 103,
                'created_at' => '2023-09-15 11:33:05',
                'updated_at' => '2023-09-15 11:33:05',
            ),
            87 =>
            array (
                'id' => 111,
                'product_id' => 80,
                'quantity' => 2,
                'price' => '24',
                'invoice_id' => 105,
                'created_at' => '2023-09-15 11:38:25',
                'updated_at' => '2023-09-15 11:38:25',
            ),
            88 =>
            array (
                'id' => 115,
                'product_id' => 139,
                'quantity' => 1,
                'price' => '18',
                'invoice_id' => 74,
                'created_at' => '2023-09-15 11:43:02',
                'updated_at' => '2023-09-15 11:43:02',
            ),
            89 =>
            array (
                'id' => 120,
                'product_id' => 142,
                'quantity' => 1,
                'price' => '9',
                'invoice_id' => 108,
                'created_at' => '2023-09-15 12:10:05',
                'updated_at' => '2023-09-15 12:10:05',
            ),
            90 =>
            array (
                'id' => 121,
                'product_id' => 143,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 108,
                'created_at' => '2023-09-15 12:10:05',
                'updated_at' => '2023-09-15 12:10:05',
            ),
            91 =>
            array (
                'id' => 122,
                'product_id' => 121,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 108,
                'created_at' => '2023-09-15 12:10:05',
                'updated_at' => '2023-09-15 12:10:05',
            ),
            92 =>
            array (
                'id' => 123,
                'product_id' => 126,
                'quantity' => 1,
                'price' => '6',
                'invoice_id' => 108,
                'created_at' => '2023-09-15 12:10:05',
                'updated_at' => '2023-09-15 12:10:05',
            ),
            93 =>
            array (
                'id' => 124,
                'product_id' => 114,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 107,
                'created_at' => '2023-09-15 12:10:50',
                'updated_at' => '2023-09-15 12:10:50',
            ),
            94 =>
            array (
                'id' => 125,
                'product_id' => 138,
                'quantity' => 3,
                'price' => '6',
                'invoice_id' => 107,
                'created_at' => '2023-09-15 12:10:50',
                'updated_at' => '2023-09-15 12:10:50',
            ),
            95 =>
            array (
                'id' => 126,
                'product_id' => 102,
                'quantity' => 1,
                'price' => '18',
                'invoice_id' => 109,
                'created_at' => '2023-09-15 12:16:03',
                'updated_at' => '2023-09-15 12:16:03',
            ),
            96 =>
            array (
                'id' => 127,
                'product_id' => 3,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 109,
                'created_at' => '2023-09-15 12:16:03',
                'updated_at' => '2023-09-15 12:16:03',
            ),
            97 =>
            array (
                'id' => 128,
                'product_id' => 20,
                'quantity' => 1,
                'price' => '6',
                'invoice_id' => 109,
                'created_at' => '2023-09-15 12:16:03',
                'updated_at' => '2023-09-15 12:16:03',
            ),
            98 =>
            array (
                'id' => 129,
                'product_id' => 41,
                'quantity' => 2,
                'price' => '8',
                'invoice_id' => 109,
                'created_at' => '2023-09-15 12:16:03',
                'updated_at' => '2023-09-15 12:16:03',
            ),
            99 =>
            array (
                'id' => 133,
                'product_id' => 23,
                'quantity' => 1,
                'price' => '6',
                'invoice_id' => 110,
                'created_at' => '2023-09-15 12:19:14',
                'updated_at' => '2023-09-15 12:19:14',
            ),
            100 =>
            array (
                'id' => 134,
                'product_id' => 32,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 110,
                'created_at' => '2023-09-15 12:19:14',
                'updated_at' => '2023-09-15 12:19:14',
            ),
            101 =>
            array (
                'id' => 135,
                'product_id' => 51,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 110,
                'created_at' => '2023-09-15 12:19:14',
                'updated_at' => '2023-09-15 12:19:14',
            ),
            102 =>
            array (
                'id' => 136,
                'product_id' => 147,
                'quantity' => 3,
                'price' => '6',
                'invoice_id' => 110,
                'created_at' => '2023-09-15 12:19:14',
                'updated_at' => '2023-09-15 12:19:14',
            ),
            103 =>
            array (
                'id' => 137,
                'product_id' => 148,
                'quantity' => 1,
                'price' => '6',
                'invoice_id' => 111,
                'created_at' => '2023-09-15 12:21:13',
                'updated_at' => '2023-09-15 12:21:13',
            ),
            104 =>
            array (
                'id' => 138,
                'product_id' => 14,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 111,
                'created_at' => '2023-09-15 12:21:13',
                'updated_at' => '2023-09-15 12:21:13',
            ),
            105 =>
            array (
                'id' => 139,
                'product_id' => 41,
                'quantity' => 2,
                'price' => '4',
                'invoice_id' => 111,
                'created_at' => '2023-09-15 12:21:13',
                'updated_at' => '2023-09-15 12:21:13',
            ),
            106 =>
            array (
                'id' => 140,
                'product_id' => 140,
                'quantity' => 1,
                'price' => '21',
                'invoice_id' => 111,
                'created_at' => '2023-09-15 12:21:13',
                'updated_at' => '2023-09-15 12:21:13',
            ),
            107 =>
            array (
                'id' => 141,
                'product_id' => 32,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 111,
                'created_at' => '2023-09-15 12:21:13',
                'updated_at' => '2023-09-15 12:21:13',
            ),
            108 =>
            array (
                'id' => 142,
                'product_id' => 149,
                'quantity' => 1,
                'price' => '11',
                'invoice_id' => 112,
                'created_at' => '2023-09-15 12:23:14',
                'updated_at' => '2023-09-15 12:23:14',
            ),
            109 =>
            array (
                'id' => 143,
                'product_id' => 58,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 112,
                'created_at' => '2023-09-15 12:23:14',
                'updated_at' => '2023-09-15 12:23:14',
            ),
            110 =>
            array (
                'id' => 144,
                'product_id' => 24,
                'quantity' => 1,
                'price' => '4',
                'invoice_id' => 113,
                'created_at' => '2023-09-15 12:24:00',
                'updated_at' => '2023-09-15 12:24:00',
            ),
            111 =>
            array (
                'id' => 145,
                'product_id' => 23,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 114,
                'created_at' => '2023-09-15 12:24:27',
                'updated_at' => '2023-09-15 12:24:27',
            ),
            112 =>
            array (
                'id' => 146,
                'product_id' => 94,
                'quantity' => 1,
                'price' => '12',
                'invoice_id' => 115,
                'created_at' => '2023-09-15 12:24:53',
                'updated_at' => '2023-09-15 12:24:53',
            ),
            113 =>
            array (
                'id' => 147,
                'product_id' => 3,
                'quantity' => 2,
                'price' => '14',
                'invoice_id' => 116,
                'created_at' => '2023-09-15 12:26:11',
                'updated_at' => '2023-09-15 12:26:11',
            ),
            114 =>
            array (
                'id' => 148,
                'product_id' => 79,
                'quantity' => 2,
                'price' => '4',
                'invoice_id' => 116,
                'created_at' => '2023-09-15 12:26:11',
                'updated_at' => '2023-09-15 12:26:11',
            ),
            115 =>
            array (
                'id' => 149,
                'product_id' => 41,
                'quantity' => 1,
                'price' => '3',
                'invoice_id' => 116,
                'created_at' => '2023-09-15 12:26:11',
                'updated_at' => '2023-09-15 12:26:11',
            ),
            116 =>
            array (
                'id' => 150,
                'product_id' => 147,
                'quantity' => 2,
                'price' => '5',
                'invoice_id' => 116,
                'created_at' => '2023-09-15 12:26:11',
                'updated_at' => '2023-09-15 12:26:11',
            ),
            117 =>
            array (
                'id' => 151,
                'product_id' => 80,
                'quantity' => 1,
                'price' => '10',
                'invoice_id' => 117,
                'created_at' => '2023-09-15 12:27:53',
                'updated_at' => '2023-09-15 12:27:53',
            ),
            118 =>
            array (
                'id' => 152,
                'product_id' => 121,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 117,
                'created_at' => '2023-09-15 12:27:53',
                'updated_at' => '2023-09-15 12:27:53',
            ),
            119 =>
            array (
                'id' => 153,
                'product_id' => 85,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 117,
                'created_at' => '2023-09-15 12:27:53',
                'updated_at' => '2023-09-15 12:27:53',
            ),
            120 =>
            array (
                'id' => 154,
                'product_id' => 51,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 117,
                'created_at' => '2023-09-15 12:27:53',
                'updated_at' => '2023-09-15 12:27:53',
            ),
            121 =>
            array (
                'id' => 155,
                'product_id' => 84,
                'quantity' => 1,
                'price' => '6',
                'invoice_id' => 118,
                'created_at' => '2023-09-15 12:30:54',
                'updated_at' => '2023-09-15 12:30:54',
            ),
            122 =>
            array (
                'id' => 156,
                'product_id' => 92,
                'quantity' => 1,
                'price' => '6',
                'invoice_id' => 118,
                'created_at' => '2023-09-15 12:30:54',
                'updated_at' => '2023-09-15 12:30:54',
            ),
            123 =>
            array (
                'id' => 157,
                'product_id' => 26,
                'quantity' => 10,
                'price' => '5',
                'invoice_id' => 118,
                'created_at' => '2023-09-15 12:30:54',
                'updated_at' => '2023-09-15 12:30:54',
            ),
            124 =>
            array (
                'id' => 158,
                'product_id' => 20,
                'quantity' => 1,
                'price' => '6',
                'invoice_id' => 118,
                'created_at' => '2023-09-15 12:30:54',
                'updated_at' => '2023-09-15 12:30:54',
            ),
            125 =>
            array (
                'id' => 159,
                'product_id' => 29,
                'quantity' => 10,
                'price' => '4',
                'invoice_id' => 118,
                'created_at' => '2023-09-15 12:30:54',
                'updated_at' => '2023-09-15 12:30:54',
            ),
            126 =>
            array (
                'id' => 160,
                'product_id' => 152,
                'quantity' => 1,
                'price' => '4',
                'invoice_id' => 119,
                'created_at' => '2023-09-15 12:33:40',
                'updated_at' => '2023-09-15 12:33:40',
            ),
            127 =>
            array (
                'id' => 161,
                'product_id' => 20,
                'quantity' => 1,
                'price' => '6',
                'invoice_id' => 119,
                'created_at' => '2023-09-15 12:33:40',
                'updated_at' => '2023-09-15 12:33:40',
            ),
            128 =>
            array (
                'id' => 162,
                'product_id' => 51,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 119,
                'created_at' => '2023-09-15 12:33:40',
                'updated_at' => '2023-09-15 12:33:40',
            ),
            129 =>
            array (
                'id' => 163,
                'product_id' => 150,
                'quantity' => 1,
                'price' => '4',
                'invoice_id' => 119,
                'created_at' => '2023-09-15 12:33:40',
                'updated_at' => '2023-09-15 12:33:40',
            ),
            130 =>
            array (
                'id' => 164,
                'product_id' => 144,
                'quantity' => 1,
                'price' => '3',
                'invoice_id' => 119,
                'created_at' => '2023-09-15 12:33:40',
                'updated_at' => '2023-09-15 12:33:40',
            ),
            131 =>
            array (
                'id' => 165,
                'product_id' => 11,
                'quantity' => 2,
                'price' => '4',
                'invoice_id' => 119,
                'created_at' => '2023-09-15 12:33:40',
                'updated_at' => '2023-09-15 12:33:40',
            ),
            132 =>
            array (
                'id' => 166,
                'product_id' => 95,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 120,
                'created_at' => '2023-09-15 12:34:15',
                'updated_at' => '2023-09-15 12:34:15',
            ),
            133 =>
            array (
                'id' => 167,
                'product_id' => 41,
                'quantity' => 1,
                'price' => '6',
                'invoice_id' => 120,
                'created_at' => '2023-09-15 12:34:15',
                'updated_at' => '2023-09-15 12:34:15',
            ),
            134 =>
            array (
                'id' => 168,
                'product_id' => 20,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 120,
                'created_at' => '2023-09-15 12:34:15',
                'updated_at' => '2023-09-15 12:34:15',
            ),
            135 =>
            array (
                'id' => 169,
                'product_id' => 37,
                'quantity' => 1,
                'price' => '17',
                'invoice_id' => 121,
                'created_at' => '2023-09-15 12:36:27',
                'updated_at' => '2023-09-15 12:36:27',
            ),
            136 =>
            array (
                'id' => 171,
                'product_id' => 25,
                'quantity' => 2,
                'price' => '15',
                'invoice_id' => 122,
                'created_at' => '2023-09-15 12:38:10',
                'updated_at' => '2023-09-15 12:38:10',
            ),
            137 =>
            array (
                'id' => 172,
                'product_id' => 154,
                'quantity' => 3,
                'price' => '13',
                'invoice_id' => 122,
                'created_at' => '2023-09-15 12:38:10',
                'updated_at' => '2023-09-15 12:38:10',
            ),
            138 =>
            array (
                'id' => 173,
                'product_id' => 39,
                'quantity' => 1,
                'price' => '6',
                'invoice_id' => 123,
                'created_at' => '2023-09-15 12:40:24',
                'updated_at' => '2023-09-15 12:40:24',
            ),
            139 =>
            array (
                'id' => 174,
                'product_id' => 25,
                'quantity' => 3,
                'price' => '8',
                'invoice_id' => 123,
                'created_at' => '2023-09-15 12:40:24',
                'updated_at' => '2023-09-15 12:40:24',
            ),
            140 =>
            array (
                'id' => 175,
                'product_id' => 155,
                'quantity' => 1,
                'price' => '20',
                'invoice_id' => 124,
                'created_at' => '2023-09-15 12:42:03',
                'updated_at' => '2023-09-15 12:42:03',
            ),
            141 =>
            array (
                'id' => 176,
                'product_id' => 155,
                'quantity' => 1,
                'price' => '18',
                'invoice_id' => 125,
                'created_at' => '2023-09-15 12:42:32',
                'updated_at' => '2023-09-15 12:42:32',
            ),
            142 =>
            array (
                'id' => 177,
                'product_id' => 67,
                'quantity' => 1,
                'price' => '22',
                'invoice_id' => 126,
                'created_at' => '2023-09-15 12:45:06',
                'updated_at' => '2023-09-15 12:45:06',
            ),
            143 =>
            array (
                'id' => 179,
                'product_id' => 35,
                'quantity' => 2,
                'price' => '18',
                'invoice_id' => 128,
                'created_at' => '2023-09-15 13:13:29',
                'updated_at' => '2023-09-15 13:13:29',
            ),
            144 =>
            array (
                'id' => 180,
                'product_id' => 159,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 129,
                'created_at' => '2023-09-15 13:15:31',
                'updated_at' => '2023-09-15 13:15:31',
            ),
            145 =>
            array (
                'id' => 181,
                'product_id' => 35,
                'quantity' => 2,
                'price' => '18',
                'invoice_id' => 130,
                'created_at' => '2023-09-15 13:15:48',
                'updated_at' => '2023-09-15 13:15:48',
            ),
            146 =>
            array (
                'id' => 182,
                'product_id' => 35,
                'quantity' => 1,
                'price' => '10',
                'invoice_id' => 131,
                'created_at' => '2023-09-15 13:16:07',
                'updated_at' => '2023-09-15 13:16:07',
            ),
            147 =>
            array (
                'id' => 183,
                'product_id' => 35,
                'quantity' => 2,
                'price' => '20',
                'invoice_id' => 132,
                'created_at' => '2023-09-15 13:16:25',
                'updated_at' => '2023-09-15 13:16:25',
            ),
            148 =>
            array (
                'id' => 184,
                'product_id' => 35,
                'quantity' => 1,
                'price' => '12',
                'invoice_id' => 133,
                'created_at' => '2023-09-15 13:16:39',
                'updated_at' => '2023-09-15 13:16:39',
            ),
            149 =>
            array (
                'id' => 185,
                'product_id' => 35,
                'quantity' => 1,
                'price' => '10',
                'invoice_id' => 134,
                'created_at' => '2023-09-15 13:16:54',
                'updated_at' => '2023-09-15 13:16:54',
            ),
            150 =>
            array (
                'id' => 186,
                'product_id' => 26,
                'quantity' => 10,
                'price' => '5',
                'invoice_id' => 135,
                'created_at' => '2023-09-15 13:18:11',
                'updated_at' => '2023-09-15 13:18:11',
            ),
            151 =>
            array (
                'id' => 187,
                'product_id' => 20,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 135,
                'created_at' => '2023-09-15 13:18:11',
                'updated_at' => '2023-09-15 13:18:11',
            ),
            152 =>
            array (
                'id' => 188,
                'product_id' => 41,
                'quantity' => 2,
                'price' => '6',
                'invoice_id' => 135,
                'created_at' => '2023-09-15 13:18:11',
                'updated_at' => '2023-09-15 13:18:11',
            ),
            153 =>
            array (
                'id' => 189,
                'product_id' => 121,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 135,
                'created_at' => '2023-09-15 13:18:11',
                'updated_at' => '2023-09-15 13:18:11',
            ),
            154 =>
            array (
                'id' => 190,
                'product_id' => 150,
                'quantity' => 1,
                'price' => '4',
                'invoice_id' => 135,
                'created_at' => '2023-09-15 13:18:11',
                'updated_at' => '2023-09-15 13:18:11',
            ),
            155 =>
            array (
                'id' => 191,
                'product_id' => 121,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 136,
                'created_at' => '2023-09-15 13:19:34',
                'updated_at' => '2023-09-15 13:19:34',
            ),
            156 =>
            array (
                'id' => 192,
                'product_id' => 80,
                'quantity' => 1,
                'price' => '10',
                'invoice_id' => 136,
                'created_at' => '2023-09-15 13:19:34',
                'updated_at' => '2023-09-15 13:19:34',
            ),
            157 =>
            array (
                'id' => 193,
                'product_id' => 39,
                'quantity' => 1,
                'price' => '6',
                'invoice_id' => 136,
                'created_at' => '2023-09-15 13:19:34',
                'updated_at' => '2023-09-15 13:19:34',
            ),
            158 =>
            array (
                'id' => 194,
                'product_id' => 135,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 137,
                'created_at' => '2023-09-15 13:21:50',
                'updated_at' => '2023-09-15 13:21:50',
            ),
            159 =>
            array (
                'id' => 195,
                'product_id' => 31,
                'quantity' => 4,
                'price' => '5',
                'invoice_id' => 137,
                'created_at' => '2023-09-15 13:21:50',
                'updated_at' => '2023-09-15 13:21:50',
            ),
            160 =>
            array (
                'id' => 196,
                'product_id' => 75,
                'quantity' => 1,
                'price' => '15',
                'invoice_id' => 138,
                'created_at' => '2023-09-15 13:22:12',
                'updated_at' => '2023-09-15 13:22:12',
            ),
            161 =>
            array (
                'id' => 197,
                'product_id' => 160,
                'quantity' => 1,
                'price' => '10',
                'invoice_id' => 139,
                'created_at' => '2023-09-15 13:24:03',
                'updated_at' => '2023-09-15 13:24:03',
            ),
            162 =>
            array (
                'id' => 198,
                'product_id' => 106,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 139,
                'created_at' => '2023-09-15 13:24:03',
                'updated_at' => '2023-09-15 13:24:03',
            ),
            163 =>
            array (
                'id' => 199,
                'product_id' => 83,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 139,
                'created_at' => '2023-09-15 13:24:04',
                'updated_at' => '2023-09-15 13:24:04',
            ),
            164 =>
            array (
                'id' => 200,
                'product_id' => 33,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 140,
                'created_at' => '2023-09-15 13:30:02',
                'updated_at' => '2023-09-15 13:30:02',
            ),
            165 =>
            array (
                'id' => 201,
                'product_id' => 68,
                'quantity' => 1,
                'price' => '4',
                'invoice_id' => 140,
                'created_at' => '2023-09-15 13:30:02',
                'updated_at' => '2023-09-15 13:30:02',
            ),
            166 =>
            array (
                'id' => 202,
                'product_id' => 10,
                'quantity' => 1,
                'price' => '6',
                'invoice_id' => 140,
                'created_at' => '2023-09-15 13:30:02',
                'updated_at' => '2023-09-15 13:30:02',
            ),
            167 =>
            array (
                'id' => 203,
                'product_id' => 11,
                'quantity' => 1,
                'price' => '4',
                'invoice_id' => 140,
                'created_at' => '2023-09-15 13:30:02',
                'updated_at' => '2023-09-15 13:30:02',
            ),
            168 =>
            array (
                'id' => 204,
                'product_id' => 32,
                'quantity' => 1,
                'price' => '6',
                'invoice_id' => 140,
                'created_at' => '2023-09-15 13:30:02',
                'updated_at' => '2023-09-15 13:30:02',
            ),
            169 =>
            array (
                'id' => 205,
                'product_id' => 63,
                'quantity' => 1,
                'price' => '4',
                'invoice_id' => 140,
                'created_at' => '2023-09-15 13:30:02',
                'updated_at' => '2023-09-15 13:30:02',
            ),
            170 =>
            array (
                'id' => 206,
                'product_id' => 41,
                'quantity' => 2,
                'price' => '6',
                'invoice_id' => 140,
                'created_at' => '2023-09-15 13:30:02',
                'updated_at' => '2023-09-15 13:30:02',
            ),
            171 =>
            array (
                'id' => 207,
                'product_id' => 80,
                'quantity' => 2,
                'price' => '18',
                'invoice_id' => 141,
                'created_at' => '2023-09-15 13:31:05',
                'updated_at' => '2023-09-15 13:31:05',
            ),
            172 =>
            array (
                'id' => 208,
                'product_id' => 121,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 141,
                'created_at' => '2023-09-15 13:31:05',
                'updated_at' => '2023-09-15 13:31:05',
            ),
            173 =>
            array (
                'id' => 209,
                'product_id' => 85,
                'quantity' => 2,
                'price' => '14',
                'invoice_id' => 141,
                'created_at' => '2023-09-15 13:31:05',
                'updated_at' => '2023-09-15 13:31:05',
            ),
            174 =>
            array (
                'id' => 210,
                'product_id' => 2,
                'quantity' => 2,
                'price' => '6',
                'invoice_id' => 141,
                'created_at' => '2023-09-15 13:31:05',
                'updated_at' => '2023-09-15 13:31:05',
            ),
            175 =>
            array (
                'id' => 211,
                'product_id' => 58,
                'quantity' => 1,
                'price' => '4',
                'invoice_id' => 142,
                'created_at' => '2023-09-15 13:32:11',
                'updated_at' => '2023-09-15 13:32:11',
            ),
            176 =>
            array (
                'id' => 212,
                'product_id' => 10,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 142,
                'created_at' => '2023-09-15 13:32:11',
                'updated_at' => '2023-09-15 13:32:11',
            ),
            177 =>
            array (
                'id' => 213,
                'product_id' => 22,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 142,
                'created_at' => '2023-09-15 13:32:11',
                'updated_at' => '2023-09-15 13:32:11',
            ),
            178 =>
            array (
                'id' => 214,
                'product_id' => 95,
                'quantity' => 1,
                'price' => '6',
                'invoice_id' => 142,
                'created_at' => '2023-09-15 13:32:11',
                'updated_at' => '2023-09-15 13:32:11',
            ),
            179 =>
            array (
                'id' => 219,
                'product_id' => 146,
                'quantity' => 10,
                'price' => '8',
                'invoice_id' => 143,
                'created_at' => '2023-09-15 13:34:08',
                'updated_at' => '2023-09-15 13:34:08',
            ),
            180 =>
            array (
                'id' => 220,
                'product_id' => 16,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 143,
                'created_at' => '2023-09-15 13:34:08',
                'updated_at' => '2023-09-15 13:34:08',
            ),
            181 =>
            array (
                'id' => 221,
                'product_id' => 28,
                'quantity' => 10,
                'price' => '4',
                'invoice_id' => 143,
                'created_at' => '2023-09-15 13:34:08',
                'updated_at' => '2023-09-15 13:34:08',
            ),
            182 =>
            array (
                'id' => 222,
                'product_id' => 92,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 143,
                'created_at' => '2023-09-15 13:34:08',
                'updated_at' => '2023-09-15 13:34:08',
            ),
            183 =>
            array (
                'id' => 223,
                'product_id' => 163,
                'quantity' => 4,
                'price' => '6',
                'invoice_id' => 143,
                'created_at' => '2023-09-15 13:34:08',
                'updated_at' => '2023-09-15 13:34:08',
            ),
            184 =>
            array (
                'id' => 224,
                'product_id' => 167,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 144,
                'created_at' => '2023-09-15 15:23:06',
                'updated_at' => '2023-09-15 15:23:06',
            ),
            185 =>
            array (
                'id' => 225,
                'product_id' => 24,
                'quantity' => 2,
                'price' => '12',
                'invoice_id' => 144,
                'created_at' => '2023-09-15 15:23:06',
                'updated_at' => '2023-09-15 15:23:06',
            ),
            186 =>
            array (
                'id' => 226,
                'product_id' => 170,
                'quantity' => 1,
                'price' => '4',
                'invoice_id' => 145,
                'created_at' => '2023-09-15 15:25:55',
                'updated_at' => '2023-09-15 15:25:55',
            ),
            187 =>
            array (
                'id' => 227,
                'product_id' => 164,
                'quantity' => 1,
                'price' => '3',
                'invoice_id' => 145,
                'created_at' => '2023-09-15 15:25:55',
                'updated_at' => '2023-09-15 15:25:55',
            ),
            188 =>
            array (
                'id' => 228,
                'product_id' => 79,
                'quantity' => 1,
                'price' => '4',
                'invoice_id' => 145,
                'created_at' => '2023-09-15 15:25:55',
                'updated_at' => '2023-09-15 15:25:55',
            ),
            189 =>
            array (
                'id' => 229,
                'product_id' => 20,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 145,
                'created_at' => '2023-09-15 15:25:55',
                'updated_at' => '2023-09-15 15:25:55',
            ),
            190 =>
            array (
                'id' => 230,
                'product_id' => 26,
                'quantity' => 10,
                'price' => '5',
                'invoice_id' => 145,
                'created_at' => '2023-09-15 15:25:55',
                'updated_at' => '2023-09-15 15:25:55',
            ),
            191 =>
            array (
                'id' => 232,
                'product_id' => 165,
                'quantity' => 4,
                'price' => '13',
                'invoice_id' => 147,
                'created_at' => '2023-09-15 15:26:38',
                'updated_at' => '2023-09-15 15:26:38',
            ),
            192 =>
            array (
                'id' => 233,
                'product_id' => 165,
                'quantity' => 3,
                'price' => '7',
                'invoice_id' => 146,
                'created_at' => '2023-09-15 15:26:48',
                'updated_at' => '2023-09-15 15:26:48',
            ),
            193 =>
            array (
                'id' => 235,
                'product_id' => 120,
                'quantity' => 2,
                'price' => '6',
                'invoice_id' => 156,
                'created_at' => '2023-09-15 15:28:07',
                'updated_at' => '2023-09-15 15:28:07',
            ),
            194 =>
            array (
                'id' => 236,
                'product_id' => 10,
                'quantity' => 1,
                'price' => '4',
                'invoice_id' => 157,
                'created_at' => '2023-09-15 15:28:48',
                'updated_at' => '2023-09-15 15:28:48',
            ),
            195 =>
            array (
                'id' => 237,
                'product_id' => 48,
                'quantity' => 3,
                'price' => '5',
                'invoice_id' => 157,
                'created_at' => '2023-09-15 15:28:48',
                'updated_at' => '2023-09-15 15:28:48',
            ),
            196 =>
            array (
                'id' => 238,
                'product_id' => 168,
                'quantity' => 2,
                'price' => '6',
                'invoice_id' => 157,
                'created_at' => '2023-09-15 15:28:48',
                'updated_at' => '2023-09-15 15:28:48',
            ),
            197 =>
            array (
                'id' => 239,
                'product_id' => 169,
                'quantity' => 1,
                'price' => '20',
                'invoice_id' => 158,
                'created_at' => '2023-09-15 15:30:43',
                'updated_at' => '2023-09-15 15:30:43',
            ),
            198 =>
            array (
                'id' => 240,
                'product_id' => 171,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 159,
                'created_at' => '2023-09-15 15:35:14',
                'updated_at' => '2023-09-15 15:35:14',
            ),
            199 =>
            array (
                'id' => 241,
                'product_id' => 36,
                'quantity' => 1,
                'price' => '17',
                'invoice_id' => 160,
                'created_at' => '2023-09-15 15:35:43',
                'updated_at' => '2023-09-15 15:35:43',
            ),
            200 =>
            array (
                'id' => 242,
                'product_id' => 36,
                'quantity' => 1,
                'price' => '18',
                'invoice_id' => 161,
                'created_at' => '2023-09-15 15:36:09',
                'updated_at' => '2023-09-15 15:36:09',
            ),
            201 =>
            array (
                'id' => 243,
                'product_id' => 172,
                'quantity' => 6,
                'price' => '10',
                'invoice_id' => 162,
                'created_at' => '2023-09-15 15:37:40',
                'updated_at' => '2023-09-15 15:37:40',
            ),
            202 =>
            array (
                'id' => 244,
                'product_id' => 170,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 163,
                'created_at' => '2023-09-15 15:39:29',
                'updated_at' => '2023-09-15 15:39:29',
            ),
            203 =>
            array (
                'id' => 245,
                'product_id' => 109,
                'quantity' => 1,
                'price' => '14',
                'invoice_id' => 163,
                'created_at' => '2023-09-15 15:39:29',
                'updated_at' => '2023-09-15 15:39:29',
            ),
            204 =>
            array (
                'id' => 246,
                'product_id' => 39,
                'quantity' => 1,
                'price' => '6',
                'invoice_id' => 163,
                'created_at' => '2023-09-15 15:39:29',
                'updated_at' => '2023-09-15 15:39:29',
            ),
            205 =>
            array (
                'id' => 247,
                'product_id' => 20,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 164,
                'created_at' => '2023-09-15 15:42:32',
                'updated_at' => '2023-09-15 15:42:32',
            ),
            206 =>
            array (
                'id' => 248,
                'product_id' => 41,
                'quantity' => 2,
                'price' => '8',
                'invoice_id' => 164,
                'created_at' => '2023-09-15 15:42:32',
                'updated_at' => '2023-09-15 15:42:32',
            ),
            207 =>
            array (
                'id' => 249,
                'product_id' => 174,
                'quantity' => 10,
                'price' => '6',
                'invoice_id' => 164,
                'created_at' => '2023-09-15 15:42:32',
                'updated_at' => '2023-09-15 15:42:32',
            ),
            208 =>
            array (
                'id' => 250,
                'product_id' => 41,
                'quantity' => 2,
                'price' => '8',
                'invoice_id' => 165,
                'created_at' => '2023-09-15 15:44:58',
                'updated_at' => '2023-09-15 15:44:58',
            ),
            209 =>
            array (
                'id' => 251,
                'product_id' => 109,
                'quantity' => 1,
                'price' => '12',
                'invoice_id' => 165,
                'created_at' => '2023-09-15 15:44:58',
                'updated_at' => '2023-09-15 15:44:58',
            ),
            210 =>
            array (
                'id' => 252,
                'product_id' => 136,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 165,
                'created_at' => '2023-09-15 15:44:58',
                'updated_at' => '2023-09-15 15:44:58',
            ),
            211 =>
            array (
                'id' => 253,
                'product_id' => 22,
                'quantity' => 3,
                'price' => '6',
                'invoice_id' => 166,
                'created_at' => '2023-09-15 15:45:36',
                'updated_at' => '2023-09-15 15:45:36',
            ),
            212 =>
            array (
                'id' => 254,
                'product_id' => 58,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 166,
                'created_at' => '2023-09-15 15:45:36',
                'updated_at' => '2023-09-15 15:45:36',
            ),
            213 =>
            array (
                'id' => 255,
                'product_id' => 26,
                'quantity' => 10,
                'price' => '8',
                'invoice_id' => 167,
                'created_at' => '2023-09-15 15:47:00',
                'updated_at' => '2023-09-15 15:47:00',
            ),
            214 =>
            array (
                'id' => 256,
                'product_id' => 168,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 167,
                'created_at' => '2023-09-15 15:47:00',
                'updated_at' => '2023-09-15 15:47:00',
            ),
            215 =>
            array (
                'id' => 257,
                'product_id' => 109,
                'quantity' => 1,
                'price' => '12',
                'invoice_id' => 167,
                'created_at' => '2023-09-15 15:47:00',
                'updated_at' => '2023-09-15 15:47:00',
            ),
            216 =>
            array (
                'id' => 258,
                'product_id' => 48,
                'quantity' => 5,
                'price' => '7',
                'invoice_id' => 167,
                'created_at' => '2023-09-15 15:47:00',
                'updated_at' => '2023-09-15 15:47:00',
            ),
            217 =>
            array (
                'id' => 259,
                'product_id' => 176,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 168,
                'created_at' => '2023-09-15 15:49:36',
                'updated_at' => '2023-09-15 15:49:36',
            ),
            218 =>
            array (
                'id' => 260,
                'product_id' => 2,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 168,
                'created_at' => '2023-09-15 15:49:36',
                'updated_at' => '2023-09-15 15:49:36',
            ),
            219 =>
            array (
                'id' => 261,
                'product_id' => 41,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 168,
                'created_at' => '2023-09-15 15:49:36',
                'updated_at' => '2023-09-15 15:49:36',
            ),
            220 =>
            array (
                'id' => 262,
                'product_id' => 23,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 169,
                'created_at' => '2023-09-15 15:51:24',
                'updated_at' => '2023-09-15 15:51:24',
            ),
            221 =>
            array (
                'id' => 263,
                'product_id' => 131,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 169,
                'created_at' => '2023-09-15 15:51:24',
                'updated_at' => '2023-09-15 15:51:24',
            ),
            222 =>
            array (
                'id' => 264,
                'product_id' => 139,
                'quantity' => 1,
                'price' => '18',
                'invoice_id' => 170,
                'created_at' => '2023-09-15 15:51:46',
                'updated_at' => '2023-09-15 15:51:46',
            ),
            223 =>
            array (
                'id' => 270,
                'product_id' => 41,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 171,
                'created_at' => '2023-09-15 15:56:29',
                'updated_at' => '2023-09-15 15:56:29',
            ),
            224 =>
            array (
                'id' => 271,
                'product_id' => 92,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 171,
                'created_at' => '2023-09-15 15:56:29',
                'updated_at' => '2023-09-15 15:56:29',
            ),
            225 =>
            array (
                'id' => 272,
                'product_id' => 95,
                'quantity' => 1,
                'price' => '6',
                'invoice_id' => 171,
                'created_at' => '2023-09-15 15:56:29',
                'updated_at' => '2023-09-15 15:56:29',
            ),
            226 =>
            array (
                'id' => 273,
                'product_id' => 28,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 171,
                'created_at' => '2023-09-15 15:56:29',
                'updated_at' => '2023-09-15 15:56:29',
            ),
            227 =>
            array (
                'id' => 274,
                'product_id' => 173,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 171,
                'created_at' => '2023-09-15 15:56:29',
                'updated_at' => '2023-09-15 15:56:29',
            ),
            228 =>
            array (
                'id' => 275,
                'product_id' => 177,
                'quantity' => 1,
                'price' => '12',
                'invoice_id' => 171,
                'created_at' => '2023-09-15 15:56:29',
                'updated_at' => '2023-09-15 15:56:29',
            ),
            229 =>
            array (
                'id' => 276,
                'product_id' => 85,
                'quantity' => 2,
                'price' => '20',
                'invoice_id' => 172,
                'created_at' => '2023-09-15 15:58:26',
                'updated_at' => '2023-09-15 15:58:26',
            ),
            230 =>
            array (
                'id' => 277,
                'product_id' => 126,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 172,
                'created_at' => '2023-09-15 15:58:26',
                'updated_at' => '2023-09-15 15:58:26',
            ),
            231 =>
            array (
                'id' => 278,
                'product_id' => 80,
                'quantity' => 1,
                'price' => '15',
                'invoice_id' => 173,
                'created_at' => '2023-09-15 15:58:51',
                'updated_at' => '2023-09-15 15:58:51',
            ),
            232 =>
            array (
                'id' => 279,
                'product_id' => 85,
                'quantity' => 1,
                'price' => '16',
                'invoice_id' => 173,
                'created_at' => '2023-09-15 15:58:51',
                'updated_at' => '2023-09-15 15:58:51',
            ),
            233 =>
            array (
                'id' => 280,
                'product_id' => 179,
                'quantity' => 2,
                'price' => '14',
                'invoice_id' => 148,
                'created_at' => '2023-09-15 16:02:01',
                'updated_at' => '2023-09-15 16:02:01',
            ),
            234 =>
            array (
                'id' => 281,
                'product_id' => 121,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 148,
                'created_at' => '2023-09-15 16:02:01',
                'updated_at' => '2023-09-15 16:02:01',
            ),
            235 =>
            array (
                'id' => 282,
                'product_id' => 39,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 148,
                'created_at' => '2023-09-15 16:02:01',
                'updated_at' => '2023-09-15 16:02:01',
            ),
            236 =>
            array (
                'id' => 283,
                'product_id' => 85,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 148,
                'created_at' => '2023-09-15 16:02:01',
                'updated_at' => '2023-09-15 16:02:01',
            ),
            237 =>
            array (
                'id' => 284,
                'product_id' => 180,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 149,
                'created_at' => '2023-09-15 16:03:08',
                'updated_at' => '2023-09-15 16:03:08',
            ),
            238 =>
            array (
                'id' => 285,
                'product_id' => 157,
                'quantity' => 1,
                'price' => '18',
                'invoice_id' => 150,
                'created_at' => '2023-09-15 16:07:24',
                'updated_at' => '2023-09-15 16:07:24',
            ),
            239 =>
            array (
                'id' => 286,
                'product_id' => 182,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 151,
                'created_at' => '2023-09-15 16:10:31',
                'updated_at' => '2023-09-15 16:10:31',
            ),
            240 =>
            array (
                'id' => 287,
                'product_id' => 65,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 151,
                'created_at' => '2023-09-15 16:10:31',
                'updated_at' => '2023-09-15 16:10:31',
            ),
            241 =>
            array (
                'id' => 288,
                'product_id' => 170,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 151,
                'created_at' => '2023-09-15 16:10:31',
                'updated_at' => '2023-09-15 16:10:31',
            ),
            242 =>
            array (
                'id' => 289,
                'product_id' => 136,
                'quantity' => 1,
                'price' => '4',
                'invoice_id' => 151,
                'created_at' => '2023-09-15 16:10:31',
                'updated_at' => '2023-09-15 16:10:31',
            ),
            243 =>
            array (
                'id' => 290,
                'product_id' => 24,
                'quantity' => 2,
                'price' => '7',
                'invoice_id' => 151,
                'created_at' => '2023-09-15 16:10:31',
                'updated_at' => '2023-09-15 16:10:31',
            ),
            244 =>
            array (
                'id' => 291,
                'product_id' => 41,
                'quantity' => 2,
                'price' => '5',
                'invoice_id' => 152,
                'created_at' => '2023-09-15 16:11:08',
                'updated_at' => '2023-09-15 16:11:08',
            ),
            245 =>
            array (
                'id' => 292,
                'product_id' => 4,
                'quantity' => 2,
                'price' => '14',
                'invoice_id' => 152,
                'created_at' => '2023-09-15 16:11:08',
                'updated_at' => '2023-09-15 16:11:08',
            ),
            246 =>
            array (
                'id' => 293,
                'product_id' => 183,
                'quantity' => 1,
                'price' => '3',
                'invoice_id' => 153,
                'created_at' => '2023-09-15 16:17:07',
                'updated_at' => '2023-09-15 16:17:07',
            ),
            247 =>
            array (
                'id' => 294,
                'product_id' => 2,
                'quantity' => 2,
                'price' => '7',
                'invoice_id' => 153,
                'created_at' => '2023-09-15 16:17:07',
                'updated_at' => '2023-09-15 16:17:07',
            ),
            248 =>
            array (
                'id' => 295,
                'product_id' => 41,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 153,
                'created_at' => '2023-09-15 16:17:07',
                'updated_at' => '2023-09-15 16:17:07',
            ),
            249 =>
            array (
                'id' => 296,
                'product_id' => 1,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 153,
                'created_at' => '2023-09-15 16:17:07',
                'updated_at' => '2023-09-15 16:17:07',
            ),
            250 =>
            array (
                'id' => 297,
                'product_id' => 41,
                'quantity' => 2,
                'price' => '5',
                'invoice_id' => 154,
                'created_at' => '2023-09-15 16:17:59',
                'updated_at' => '2023-09-15 16:17:59',
            ),
            251 =>
            array (
                'id' => 298,
                'product_id' => 2,
                'quantity' => 2,
                'price' => '4',
                'invoice_id' => 154,
                'created_at' => '2023-09-15 16:17:59',
                'updated_at' => '2023-09-15 16:17:59',
            ),
            252 =>
            array (
                'id' => 299,
                'product_id' => 1,
                'quantity' => 2,
                'price' => '4',
                'invoice_id' => 154,
                'created_at' => '2023-09-15 16:17:59',
                'updated_at' => '2023-09-15 16:17:59',
            ),
            253 =>
            array (
                'id' => 300,
                'product_id' => 6,
                'quantity' => 2,
                'price' => '15',
                'invoice_id' => 155,
                'created_at' => '2023-09-15 16:19:06',
                'updated_at' => '2023-09-15 16:19:06',
            ),
            254 =>
            array (
                'id' => 301,
                'product_id' => 10,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 155,
                'created_at' => '2023-09-15 16:19:06',
                'updated_at' => '2023-09-15 16:19:06',
            ),
            255 =>
            array (
                'id' => 302,
                'product_id' => 152,
                'quantity' => 1,
                'price' => '6',
                'invoice_id' => 155,
                'created_at' => '2023-09-15 16:19:06',
                'updated_at' => '2023-09-15 16:19:06',
            ),
            256 =>
            array (
                'id' => 303,
                'product_id' => 186,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 104,
                'created_at' => '2023-09-15 16:27:39',
                'updated_at' => '2023-09-15 16:27:39',
            ),
            257 =>
            array (
                'id' => 304,
                'product_id' => 187,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 104,
                'created_at' => '2023-09-15 16:27:39',
                'updated_at' => '2023-09-15 16:27:39',
            ),
            258 =>
            array (
                'id' => 305,
                'product_id' => 158,
                'quantity' => 1,
                'price' => '11',
                'invoice_id' => 127,
                'created_at' => '2023-09-15 16:29:07',
                'updated_at' => '2023-09-15 16:29:07',
            ),
            259 =>
            array (
                'id' => 306,
                'product_id' => 190,
                'quantity' => 1,
                'price' => '17',
                'invoice_id' => 174,
                'created_at' => '2023-09-15 17:26:13',
                'updated_at' => '2023-09-15 17:26:13',
            ),
            260 =>
            array (
                'id' => 307,
                'product_id' => 83,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 175,
                'created_at' => '2023-09-15 17:26:35',
                'updated_at' => '2023-09-15 17:26:35',
            ),
            261 =>
            array (
                'id' => 308,
                'product_id' => 113,
                'quantity' => 2,
                'price' => '56',
                'invoice_id' => 176,
                'created_at' => '2023-09-15 17:27:00',
                'updated_at' => '2023-09-15 17:27:00',
            ),
            262 =>
            array (
                'id' => 309,
                'product_id' => 113,
                'quantity' => 1,
                'price' => '20',
                'invoice_id' => 177,
                'created_at' => '2023-09-15 17:27:20',
                'updated_at' => '2023-09-15 17:27:20',
            ),
            263 =>
            array (
                'id' => 310,
                'product_id' => 113,
                'quantity' => 1,
                'price' => '20',
                'invoice_id' => 178,
                'created_at' => '2023-09-15 17:27:45',
                'updated_at' => '2023-09-15 17:27:45',
            ),
            264 =>
            array (
                'id' => 311,
                'product_id' => 192,
                'quantity' => 6,
                'price' => '30',
                'invoice_id' => 179,
                'created_at' => '2023-09-15 17:32:16',
                'updated_at' => '2023-09-15 17:32:16',
            ),
            265 =>
            array (
                'id' => 312,
                'product_id' => 194,
                'quantity' => 2,
                'price' => '8',
                'invoice_id' => 179,
                'created_at' => '2023-09-15 17:32:16',
                'updated_at' => '2023-09-15 17:32:16',
            ),
            266 =>
            array (
                'id' => 313,
                'product_id' => 2,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 179,
                'created_at' => '2023-09-15 17:32:16',
                'updated_at' => '2023-09-15 17:32:16',
            ),
            267 =>
            array (
                'id' => 314,
                'product_id' => 1,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 179,
                'created_at' => '2023-09-15 17:32:16',
                'updated_at' => '2023-09-15 17:32:16',
            ),
            268 =>
            array (
                'id' => 315,
                'product_id' => 58,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 180,
                'created_at' => '2023-09-15 17:33:14',
                'updated_at' => '2023-09-15 17:33:14',
            ),
            269 =>
            array (
                'id' => 316,
                'product_id' => 3,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 180,
                'created_at' => '2023-09-15 17:33:14',
                'updated_at' => '2023-09-15 17:33:14',
            ),
            270 =>
            array (
                'id' => 317,
                'product_id' => 11,
                'quantity' => 2,
                'price' => '4',
                'invoice_id' => 180,
                'created_at' => '2023-09-15 17:33:14',
                'updated_at' => '2023-09-15 17:33:14',
            ),
            271 =>
            array (
                'id' => 318,
                'product_id' => 70,
                'quantity' => 3,
                'price' => '5',
                'invoice_id' => 180,
                'created_at' => '2023-09-15 17:33:14',
                'updated_at' => '2023-09-15 17:33:14',
            ),
            272 =>
            array (
                'id' => 319,
                'product_id' => 165,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 181,
                'created_at' => '2023-09-15 17:33:42',
                'updated_at' => '2023-09-15 17:33:42',
            ),
            273 =>
            array (
                'id' => 323,
                'product_id' => 92,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 182,
                'created_at' => '2023-09-15 17:43:50',
                'updated_at' => '2023-09-15 17:43:50',
            ),
            274 =>
            array (
                'id' => 324,
                'product_id' => 22,
                'quantity' => 1,
                'price' => '4',
                'invoice_id' => 182,
                'created_at' => '2023-09-15 17:43:50',
                'updated_at' => '2023-09-15 17:43:50',
            ),
            275 =>
            array (
                'id' => 325,
                'product_id' => 167,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 182,
                'created_at' => '2023-09-15 17:43:50',
                'updated_at' => '2023-09-15 17:43:50',
            ),
            276 =>
            array (
                'id' => 326,
                'product_id' => 196,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 182,
                'created_at' => '2023-09-15 17:43:50',
                'updated_at' => '2023-09-15 17:43:50',
            ),
            277 =>
            array (
                'id' => 327,
                'product_id' => 198,
                'quantity' => 1,
                'price' => '14',
                'invoice_id' => 183,
                'created_at' => '2023-09-15 17:53:29',
                'updated_at' => '2023-09-15 17:53:29',
            ),
            278 =>
            array (
                'id' => 328,
                'product_id' => 163,
                'quantity' => 5,
                'price' => '10',
                'invoice_id' => 183,
                'created_at' => '2023-09-15 17:53:29',
                'updated_at' => '2023-09-15 17:53:29',
            ),
            279 =>
            array (
                'id' => 329,
                'product_id' => 200,
                'quantity' => 1,
                'price' => '4',
                'invoice_id' => 183,
                'created_at' => '2023-09-15 17:53:29',
                'updated_at' => '2023-09-15 17:53:29',
            ),
            280 =>
            array (
                'id' => 330,
                'product_id' => 204,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 184,
                'created_at' => '2023-09-15 18:03:06',
                'updated_at' => '2023-09-15 18:03:06',
            ),
            281 =>
            array (
                'id' => 331,
                'product_id' => 109,
                'quantity' => 1,
                'price' => '14',
                'invoice_id' => 184,
                'created_at' => '2023-09-15 18:03:06',
                'updated_at' => '2023-09-15 18:03:06',
            ),
            282 =>
            array (
                'id' => 332,
                'product_id' => 3,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 186,
                'created_at' => '2023-09-15 18:11:36',
                'updated_at' => '2023-09-15 18:11:36',
            ),
            283 =>
            array (
                'id' => 333,
                'product_id' => 205,
                'quantity' => 2,
                'price' => '4',
                'invoice_id' => 186,
                'created_at' => '2023-09-15 18:11:36',
                'updated_at' => '2023-09-15 18:11:36',
            ),
            284 =>
            array (
                'id' => 334,
                'product_id' => 210,
                'quantity' => 2,
                'price' => '4',
                'invoice_id' => 187,
                'created_at' => '2023-09-15 18:14:51',
                'updated_at' => '2023-09-15 18:14:51',
            ),
            285 =>
            array (
                'id' => 335,
                'product_id' => 210,
                'quantity' => 2,
                'price' => '18',
                'invoice_id' => 188,
                'created_at' => '2023-09-15 18:15:45',
                'updated_at' => '2023-09-15 18:15:45',
            ),
            286 =>
            array (
                'id' => 336,
                'product_id' => 204,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 188,
                'created_at' => '2023-09-15 18:15:45',
                'updated_at' => '2023-09-15 18:15:45',
            ),
            287 =>
            array (
                'id' => 337,
                'product_id' => 21,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 188,
                'created_at' => '2023-09-15 18:15:45',
                'updated_at' => '2023-09-15 18:15:45',
            ),
            288 =>
            array (
                'id' => 338,
                'product_id' => 106,
                'quantity' => 1,
                'price' => '6',
                'invoice_id' => 189,
                'created_at' => '2023-09-15 18:20:06',
                'updated_at' => '2023-09-15 18:20:06',
            ),
            289 =>
            array (
                'id' => 339,
                'product_id' => 206,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 189,
                'created_at' => '2023-09-15 18:20:06',
                'updated_at' => '2023-09-15 18:20:06',
            ),
            290 =>
            array (
                'id' => 340,
                'product_id' => 41,
                'quantity' => 1,
                'price' => '4',
                'invoice_id' => 189,
                'created_at' => '2023-09-15 18:20:06',
                'updated_at' => '2023-09-15 18:20:06',
            ),
            291 =>
            array (
                'id' => 341,
                'product_id' => 1,
                'quantity' => 1,
                'price' => '6',
                'invoice_id' => 189,
                'created_at' => '2023-09-15 18:20:06',
                'updated_at' => '2023-09-15 18:20:06',
            ),
            292 =>
            array (
                'id' => 342,
                'product_id' => 196,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 190,
                'created_at' => '2023-09-15 18:25:08',
                'updated_at' => '2023-09-15 18:25:08',
            ),
            293 =>
            array (
                'id' => 343,
                'product_id' => 20,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 191,
                'created_at' => '2023-09-15 18:25:45',
                'updated_at' => '2023-09-15 18:25:45',
            ),
            294 =>
            array (
                'id' => 344,
                'product_id' => 3,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 191,
                'created_at' => '2023-09-15 18:25:45',
                'updated_at' => '2023-09-15 18:25:45',
            ),
            295 =>
            array (
                'id' => 345,
                'product_id' => 41,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 191,
                'created_at' => '2023-09-15 18:25:45',
                'updated_at' => '2023-09-15 18:25:45',
            ),
            296 =>
            array (
                'id' => 349,
                'product_id' => 124,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 192,
                'created_at' => '2023-09-15 18:27:43',
                'updated_at' => '2023-09-15 18:27:43',
            ),
            297 =>
            array (
                'id' => 350,
                'product_id' => 65,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 192,
                'created_at' => '2023-09-15 18:27:43',
                'updated_at' => '2023-09-15 18:27:43',
            ),
            298 =>
            array (
                'id' => 351,
                'product_id' => 11,
                'quantity' => 2,
                'price' => '6',
                'invoice_id' => 192,
                'created_at' => '2023-09-15 18:27:43',
                'updated_at' => '2023-09-15 18:27:43',
            ),
            299 =>
            array (
                'id' => 352,
                'product_id' => 211,
                'quantity' => 1,
                'price' => '14',
                'invoice_id' => 192,
                'created_at' => '2023-09-15 18:27:43',
                'updated_at' => '2023-09-15 18:27:43',
            ),
            300 =>
            array (
                'id' => 353,
                'product_id' => 212,
                'quantity' => 1,
                'price' => '14',
                'invoice_id' => 193,
                'created_at' => '2023-09-15 18:29:04',
                'updated_at' => '2023-09-15 18:29:04',
            ),
            301 =>
            array (
                'id' => 354,
                'product_id' => 167,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 193,
                'created_at' => '2023-09-15 18:29:04',
                'updated_at' => '2023-09-15 18:29:04',
            ),
            302 =>
            array (
                'id' => 355,
                'product_id' => 95,
                'quantity' => 1,
                'price' => '4',
                'invoice_id' => 193,
                'created_at' => '2023-09-15 18:29:04',
                'updated_at' => '2023-09-15 18:29:04',
            ),
            303 =>
            array (
                'id' => 356,
                'product_id' => 20,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 193,
                'created_at' => '2023-09-15 18:29:04',
                'updated_at' => '2023-09-15 18:29:04',
            ),
            304 =>
            array (
                'id' => 360,
                'product_id' => 52,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 194,
                'created_at' => '2023-09-15 18:34:58',
                'updated_at' => '2023-09-15 18:34:58',
            ),
            305 =>
            array (
                'id' => 361,
                'product_id' => 23,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 194,
                'created_at' => '2023-09-15 18:34:58',
                'updated_at' => '2023-09-15 18:34:58',
            ),
            306 =>
            array (
                'id' => 362,
                'product_id' => 176,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 194,
                'created_at' => '2023-09-15 18:34:58',
                'updated_at' => '2023-09-15 18:34:58',
            ),
            307 =>
            array (
                'id' => 363,
                'product_id' => 214,
                'quantity' => 10,
                'price' => '5',
                'invoice_id' => 194,
                'created_at' => '2023-09-15 18:34:58',
                'updated_at' => '2023-09-15 18:34:58',
            ),
            308 =>
            array (
                'id' => 364,
                'product_id' => 213,
                'quantity' => 1,
                'price' => '6',
                'invoice_id' => 194,
                'created_at' => '2023-09-15 18:34:58',
                'updated_at' => '2023-09-15 18:34:58',
            ),
            309 =>
            array (
                'id' => 365,
                'product_id' => 131,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 195,
                'created_at' => '2023-09-15 18:35:47',
                'updated_at' => '2023-09-15 18:35:47',
            ),
            310 =>
            array (
                'id' => 366,
                'product_id' => 20,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 195,
                'created_at' => '2023-09-15 18:35:47',
                'updated_at' => '2023-09-15 18:35:47',
            ),
            311 =>
            array (
                'id' => 367,
                'product_id' => 147,
                'quantity' => 5,
                'price' => '5',
                'invoice_id' => 195,
                'created_at' => '2023-09-15 18:35:47',
                'updated_at' => '2023-09-15 18:35:47',
            ),
            312 =>
            array (
                'id' => 368,
                'product_id' => 218,
                'quantity' => 3,
                'price' => '3',
                'invoice_id' => 196,
                'created_at' => '2023-09-15 18:38:24',
                'updated_at' => '2023-09-15 18:38:24',
            ),
            313 =>
            array (
                'id' => 369,
                'product_id' => 121,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 196,
                'created_at' => '2023-09-15 18:38:24',
                'updated_at' => '2023-09-15 18:38:24',
            ),
            314 =>
            array (
                'id' => 370,
                'product_id' => 170,
                'quantity' => 1,
                'price' => '2',
                'invoice_id' => 196,
                'created_at' => '2023-09-15 18:38:24',
                'updated_at' => '2023-09-15 18:38:24',
            ),
            315 =>
            array (
                'id' => 371,
                'product_id' => 88,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 196,
                'created_at' => '2023-09-15 18:38:24',
                'updated_at' => '2023-09-15 18:38:24',
            ),
            316 =>
            array (
                'id' => 372,
                'product_id' => 80,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 197,
                'created_at' => '2023-09-15 18:38:59',
                'updated_at' => '2023-09-15 18:38:59',
            ),
            317 =>
            array (
                'id' => 373,
                'product_id' => 73,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 197,
                'created_at' => '2023-09-15 18:38:59',
                'updated_at' => '2023-09-15 18:38:59',
            ),
            318 =>
            array (
                'id' => 374,
                'product_id' => 143,
                'quantity' => 2,
                'price' => '4',
                'invoice_id' => 197,
                'created_at' => '2023-09-15 18:38:59',
                'updated_at' => '2023-09-15 18:38:59',
            ),
            319 =>
            array (
                'id' => 375,
                'product_id' => 219,
                'quantity' => 1,
                'price' => '3',
                'invoice_id' => 198,
                'created_at' => '2023-09-15 18:40:40',
                'updated_at' => '2023-09-15 18:40:40',
            ),
            320 =>
            array (
                'id' => 376,
                'product_id' => 126,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 198,
                'created_at' => '2023-09-15 18:40:40',
                'updated_at' => '2023-09-15 18:40:40',
            ),
            321 =>
            array (
                'id' => 377,
                'product_id' => 3,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 198,
                'created_at' => '2023-09-15 18:40:40',
                'updated_at' => '2023-09-15 18:40:40',
            ),
            322 =>
            array (
                'id' => 378,
                'product_id' => 20,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 198,
                'created_at' => '2023-09-15 18:40:40',
                'updated_at' => '2023-09-15 18:40:40',
            ),
            323 =>
            array (
                'id' => 379,
                'product_id' => 121,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 199,
                'created_at' => '2023-09-15 18:41:59',
                'updated_at' => '2023-09-15 18:41:59',
            ),
            324 =>
            array (
                'id' => 380,
                'product_id' => 29,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 199,
                'created_at' => '2023-09-15 18:41:59',
                'updated_at' => '2023-09-15 18:41:59',
            ),
            325 =>
            array (
                'id' => 381,
                'product_id' => 96,
                'quantity' => 1,
                'price' => '17',
                'invoice_id' => 199,
                'created_at' => '2023-09-15 18:41:59',
                'updated_at' => '2023-09-15 18:41:59',
            ),
            326 =>
            array (
                'id' => 382,
                'product_id' => 110,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 199,
                'created_at' => '2023-09-15 18:41:59',
                'updated_at' => '2023-09-15 18:41:59',
            ),
            327 =>
            array (
                'id' => 383,
                'product_id' => 205,
                'quantity' => 2,
                'price' => '6',
                'invoice_id' => 199,
                'created_at' => '2023-09-15 18:41:59',
                'updated_at' => '2023-09-15 18:41:59',
            ),
            328 =>
            array (
                'id' => 384,
                'product_id' => 7,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 199,
                'created_at' => '2023-09-15 18:41:59',
                'updated_at' => '2023-09-15 18:41:59',
            ),
            329 =>
            array (
                'id' => 385,
                'product_id' => 220,
                'quantity' => 1,
                'price' => '10',
                'invoice_id' => 200,
                'created_at' => '2023-09-15 18:45:42',
                'updated_at' => '2023-09-15 18:45:42',
            ),
            330 =>
            array (
                'id' => 386,
                'product_id' => 110,
                'quantity' => 1,
                'price' => '12',
                'invoice_id' => 200,
                'created_at' => '2023-09-15 18:45:42',
                'updated_at' => '2023-09-15 18:45:42',
            ),
            331 =>
            array (
                'id' => 391,
                'product_id' => 17,
                'quantity' => 4,
                'price' => '4',
                'invoice_id' => 201,
                'created_at' => '2023-09-15 18:48:37',
                'updated_at' => '2023-09-15 18:48:37',
            ),
            332 =>
            array (
                'id' => 392,
                'product_id' => 3,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 201,
                'created_at' => '2023-09-15 18:48:37',
                'updated_at' => '2023-09-15 18:48:37',
            ),
            333 =>
            array (
                'id' => 393,
                'product_id' => 2,
                'quantity' => 2,
                'price' => '10',
                'invoice_id' => 201,
                'created_at' => '2023-09-15 18:48:37',
                'updated_at' => '2023-09-15 18:48:37',
            ),
            334 =>
            array (
                'id' => 394,
                'product_id' => 92,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 201,
                'created_at' => '2023-09-15 18:48:37',
                'updated_at' => '2023-09-15 18:48:37',
            ),
            335 =>
            array (
                'id' => 395,
                'product_id' => 221,
                'quantity' => 1,
                'price' => '2',
                'invoice_id' => 201,
                'created_at' => '2023-09-15 18:48:37',
                'updated_at' => '2023-09-15 18:48:37',
            ),
            336 =>
            array (
                'id' => 398,
                'product_id' => 110,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 202,
                'created_at' => '2023-09-15 18:51:09',
                'updated_at' => '2023-09-15 18:51:09',
            ),
            337 =>
            array (
                'id' => 399,
                'product_id' => 6,
                'quantity' => 1,
                'price' => '10',
                'invoice_id' => 202,
                'created_at' => '2023-09-15 18:51:09',
                'updated_at' => '2023-09-15 18:51:09',
            ),
            338 =>
            array (
                'id' => 400,
                'product_id' => 222,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 202,
                'created_at' => '2023-09-15 18:51:09',
                'updated_at' => '2023-09-15 18:51:09',
            ),
            339 =>
            array (
                'id' => 401,
                'product_id' => 169,
                'quantity' => 1,
                'price' => '10',
                'invoice_id' => 203,
                'created_at' => '2023-09-15 18:51:25',
                'updated_at' => '2023-09-15 18:51:25',
            ),
            340 =>
            array (
                'id' => 404,
                'product_id' => 120,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 204,
                'created_at' => '2023-09-15 18:55:45',
                'updated_at' => '2023-09-15 18:55:45',
            ),
            341 =>
            array (
                'id' => 405,
                'product_id' => 176,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 204,
                'created_at' => '2023-09-15 18:55:45',
                'updated_at' => '2023-09-15 18:55:45',
            ),
            342 =>
            array (
                'id' => 406,
                'product_id' => 114,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 205,
                'created_at' => '2023-09-15 18:56:38',
                'updated_at' => '2023-09-15 18:56:38',
            ),
            343 =>
            array (
                'id' => 407,
                'product_id' => 82,
                'quantity' => 2,
                'price' => '7',
                'invoice_id' => 205,
                'created_at' => '2023-09-15 18:56:38',
                'updated_at' => '2023-09-15 18:56:38',
            ),
            344 =>
            array (
                'id' => 408,
                'product_id' => 76,
                'quantity' => 1,
                'price' => '12',
                'invoice_id' => 206,
                'created_at' => '2023-09-15 18:57:07',
                'updated_at' => '2023-09-15 18:57:07',
            ),
            345 =>
            array (
                'id' => 409,
                'product_id' => 20,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 206,
                'created_at' => '2023-09-15 18:57:07',
                'updated_at' => '2023-09-15 18:57:07',
            ),
            346 =>
            array (
                'id' => 410,
                'product_id' => 80,
                'quantity' => 1,
                'price' => '9',
                'invoice_id' => 207,
                'created_at' => '2023-09-15 18:57:28',
                'updated_at' => '2023-09-15 18:57:28',
            ),
            347 =>
            array (
                'id' => 411,
                'product_id' => 151,
                'quantity' => 1,
                'price' => '4',
                'invoice_id' => 208,
                'created_at' => '2023-09-15 18:58:49',
                'updated_at' => '2023-09-15 18:58:49',
            ),
            348 =>
            array (
                'id' => 412,
                'product_id' => 194,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 208,
                'created_at' => '2023-09-15 18:58:49',
                'updated_at' => '2023-09-15 18:58:49',
            ),
            349 =>
            array (
                'id' => 413,
                'product_id' => 27,
                'quantity' => 1,
                'price' => '12',
                'invoice_id' => 208,
                'created_at' => '2023-09-15 18:58:49',
                'updated_at' => '2023-09-15 18:58:49',
            ),
            350 =>
            array (
                'id' => 414,
                'product_id' => 164,
                'quantity' => 1,
                'price' => '2',
                'invoice_id' => 208,
                'created_at' => '2023-09-15 18:58:49',
                'updated_at' => '2023-09-15 18:58:49',
            ),
            351 =>
            array (
                'id' => 415,
                'product_id' => 170,
                'quantity' => 1,
                'price' => '2',
                'invoice_id' => 208,
                'created_at' => '2023-09-15 18:58:49',
                'updated_at' => '2023-09-15 18:58:49',
            ),
            352 =>
            array (
                'id' => 416,
                'product_id' => 219,
                'quantity' => 1,
                'price' => '4',
                'invoice_id' => 208,
                'created_at' => '2023-09-15 18:58:49',
                'updated_at' => '2023-09-15 18:58:49',
            ),
            353 =>
            array (
                'id' => 417,
                'product_id' => 81,
                'quantity' => 1,
                'price' => '17',
                'invoice_id' => 209,
                'created_at' => '2023-09-15 18:59:24',
                'updated_at' => '2023-09-15 18:59:24',
            ),
            354 =>
            array (
                'id' => 418,
                'product_id' => 73,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 210,
                'created_at' => '2023-09-15 18:59:42',
                'updated_at' => '2023-09-15 18:59:42',
            ),
            355 =>
            array (
                'id' => 419,
                'product_id' => 227,
                'quantity' => 1,
                'price' => '11',
                'invoice_id' => 211,
                'created_at' => '2023-09-15 19:02:22',
                'updated_at' => '2023-09-15 19:02:22',
            ),
            356 =>
            array (
                'id' => 420,
                'product_id' => 9,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 211,
                'created_at' => '2023-09-15 19:02:22',
                'updated_at' => '2023-09-15 19:02:22',
            ),
            357 =>
            array (
                'id' => 421,
                'product_id' => 6,
                'quantity' => 1,
                'price' => '9',
                'invoice_id' => 211,
                'created_at' => '2023-09-15 19:02:22',
                'updated_at' => '2023-09-15 19:02:22',
            ),
            358 =>
            array (
                'id' => 422,
                'product_id' => 228,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 212,
                'created_at' => '2023-09-15 19:04:27',
                'updated_at' => '2023-09-15 19:04:27',
            ),
            359 =>
            array (
                'id' => 423,
                'product_id' => 194,
                'quantity' => 1,
                'price' => '6',
                'invoice_id' => 212,
                'created_at' => '2023-09-15 19:04:27',
                'updated_at' => '2023-09-15 19:04:27',
            ),
            360 =>
            array (
                'id' => 424,
                'product_id' => 168,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 213,
                'created_at' => '2023-09-15 19:06:40',
                'updated_at' => '2023-09-15 19:06:40',
            ),
            361 =>
            array (
                'id' => 425,
                'product_id' => 6,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 213,
                'created_at' => '2023-09-15 19:06:40',
                'updated_at' => '2023-09-15 19:06:40',
            ),
            362 =>
            array (
                'id' => 426,
                'product_id' => 154,
                'quantity' => 3,
                'price' => '12',
                'invoice_id' => 213,
                'created_at' => '2023-09-15 19:06:40',
                'updated_at' => '2023-09-15 19:06:40',
            ),
            363 =>
            array (
                'id' => 427,
                'product_id' => 167,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 213,
                'created_at' => '2023-09-15 19:06:40',
                'updated_at' => '2023-09-15 19:06:40',
            ),
            364 =>
            array (
                'id' => 428,
                'product_id' => 23,
                'quantity' => 1,
                'price' => '9',
                'invoice_id' => 214,
                'created_at' => '2023-09-15 19:07:32',
                'updated_at' => '2023-09-15 19:07:32',
            ),
            365 =>
            array (
                'id' => 429,
                'product_id' => 151,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 214,
                'created_at' => '2023-09-15 19:07:32',
                'updated_at' => '2023-09-15 19:07:32',
            ),
            366 =>
            array (
                'id' => 430,
                'product_id' => 47,
                'quantity' => 1,
                'price' => '12',
                'invoice_id' => 214,
                'created_at' => '2023-09-15 19:07:32',
                'updated_at' => '2023-09-15 19:07:32',
            ),
            367 =>
            array (
                'id' => 431,
                'product_id' => 82,
                'quantity' => 1,
                'price' => '6',
                'invoice_id' => 214,
                'created_at' => '2023-09-15 19:07:32',
                'updated_at' => '2023-09-15 19:07:32',
            ),
            368 =>
            array (
                'id' => 432,
                'product_id' => 85,
                'quantity' => 1,
                'price' => '12',
                'invoice_id' => 215,
                'created_at' => '2023-09-15 19:07:55',
                'updated_at' => '2023-09-15 19:07:55',
            ),
            369 =>
            array (
                'id' => 433,
                'product_id' => 118,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 215,
                'created_at' => '2023-09-15 19:07:55',
                'updated_at' => '2023-09-15 19:07:55',
            ),
            370 =>
            array (
                'id' => 434,
                'product_id' => 170,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 216,
                'created_at' => '2023-09-15 19:08:18',
                'updated_at' => '2023-09-15 19:08:18',
            ),
            371 =>
            array (
                'id' => 435,
                'product_id' => 94,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 216,
                'created_at' => '2023-09-15 19:08:18',
                'updated_at' => '2023-09-15 19:08:18',
            ),
            372 =>
            array (
                'id' => 436,
                'product_id' => 229,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 217,
                'created_at' => '2023-09-15 19:10:18',
                'updated_at' => '2023-09-15 19:10:18',
            ),
            373 =>
            array (
                'id' => 437,
                'product_id' => 85,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 217,
                'created_at' => '2023-09-15 19:10:18',
                'updated_at' => '2023-09-15 19:10:18',
            ),
            374 =>
            array (
                'id' => 438,
                'product_id' => 20,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 217,
                'created_at' => '2023-09-15 19:10:18',
                'updated_at' => '2023-09-15 19:10:18',
            ),
            375 =>
            array (
                'id' => 439,
                'product_id' => 118,
                'quantity' => 2,
                'price' => '10',
                'invoice_id' => 217,
                'created_at' => '2023-09-15 19:10:18',
                'updated_at' => '2023-09-15 19:10:18',
            ),
            376 =>
            array (
                'id' => 441,
                'product_id' => 94,
                'quantity' => 2,
                'price' => '25',
                'invoice_id' => 218,
                'created_at' => '2023-09-15 19:10:59',
                'updated_at' => '2023-09-15 19:10:59',
            ),
            377 =>
            array (
                'id' => 442,
                'product_id' => 36,
                'quantity' => 1,
                'price' => '18',
                'invoice_id' => 219,
                'created_at' => '2023-09-15 19:11:14',
                'updated_at' => '2023-09-15 19:11:14',
            ),
            378 =>
            array (
                'id' => 443,
                'product_id' => 52,
                'quantity' => 1,
                'price' => '10',
                'invoice_id' => 220,
                'created_at' => '2023-09-15 19:11:34',
                'updated_at' => '2023-09-15 19:11:34',
            ),
            379 =>
            array (
                'id' => 444,
                'product_id' => 10,
                'quantity' => 1,
                'price' => '4',
                'invoice_id' => 221,
                'created_at' => '2023-09-15 19:12:37',
                'updated_at' => '2023-09-15 19:12:37',
            ),
            380 =>
            array (
                'id' => 445,
                'product_id' => 58,
                'quantity' => 1,
                'price' => '6',
                'invoice_id' => 221,
                'created_at' => '2023-09-15 19:12:37',
                'updated_at' => '2023-09-15 19:12:37',
            ),
            381 =>
            array (
                'id' => 446,
                'product_id' => 12,
                'quantity' => 10,
                'price' => '7',
                'invoice_id' => 221,
                'created_at' => '2023-09-15 19:12:37',
                'updated_at' => '2023-09-15 19:12:37',
            ),
            382 =>
            array (
                'id' => 447,
                'product_id' => 68,
                'quantity' => 2,
                'price' => '5',
                'invoice_id' => 221,
                'created_at' => '2023-09-15 19:12:37',
                'updated_at' => '2023-09-15 19:12:37',
            ),
            383 =>
            array (
                'id' => 448,
                'product_id' => 41,
                'quantity' => 2,
                'price' => '8',
                'invoice_id' => 221,
                'created_at' => '2023-09-15 19:12:37',
                'updated_at' => '2023-09-15 19:12:37',
            ),
            384 =>
            array (
                'id' => 449,
                'product_id' => 11,
                'quantity' => 3,
                'price' => '8',
                'invoice_id' => 221,
                'created_at' => '2023-09-15 19:12:37',
                'updated_at' => '2023-09-15 19:12:37',
            ),
            385 =>
            array (
                'id' => 451,
                'product_id' => 164,
                'quantity' => 1,
                'price' => '2',
                'invoice_id' => 222,
                'created_at' => '2023-09-15 19:14:00',
                'updated_at' => '2023-09-15 19:14:00',
            ),
            386 =>
            array (
                'id' => 452,
                'product_id' => 230,
                'quantity' => 1,
                'price' => '10',
                'invoice_id' => 222,
                'created_at' => '2023-09-15 19:14:00',
                'updated_at' => '2023-09-15 19:14:00',
            ),
            387 =>
            array (
                'id' => 453,
                'product_id' => 131,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 223,
                'created_at' => '2023-09-15 19:15:38',
                'updated_at' => '2023-09-15 19:15:38',
            ),
            388 =>
            array (
                'id' => 454,
                'product_id' => 32,
                'quantity' => 1,
                'price' => '12',
                'invoice_id' => 223,
                'created_at' => '2023-09-15 19:15:38',
                'updated_at' => '2023-09-15 19:15:38',
            ),
            389 =>
            array (
                'id' => 455,
                'product_id' => 3,
                'quantity' => 1,
                'price' => '10',
                'invoice_id' => 223,
                'created_at' => '2023-09-15 19:15:38',
                'updated_at' => '2023-09-15 19:15:38',
            ),
            390 =>
            array (
                'id' => 456,
                'product_id' => 68,
                'quantity' => 1,
                'price' => '12',
                'invoice_id' => 223,
                'created_at' => '2023-09-15 19:15:38',
                'updated_at' => '2023-09-15 19:15:38',
            ),
            391 =>
            array (
                'id' => 457,
                'product_id' => 3,
                'quantity' => 1,
                'price' => '12',
                'invoice_id' => 224,
                'created_at' => '2023-09-15 19:16:39',
                'updated_at' => '2023-09-15 19:16:39',
            ),
            392 =>
            array (
                'id' => 458,
                'product_id' => 2,
                'quantity' => 2,
                'price' => '10',
                'invoice_id' => 224,
                'created_at' => '2023-09-15 19:16:39',
                'updated_at' => '2023-09-15 19:16:39',
            ),
            393 =>
            array (
                'id' => 459,
                'product_id' => 41,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 224,
                'created_at' => '2023-09-15 19:16:39',
                'updated_at' => '2023-09-15 19:16:39',
            ),
            394 =>
            array (
                'id' => 460,
                'product_id' => 169,
                'quantity' => 1,
                'price' => '10',
                'invoice_id' => 225,
                'created_at' => '2023-09-15 19:16:53',
                'updated_at' => '2023-09-15 19:16:53',
            ),
            395 =>
            array (
                'id' => 461,
                'product_id' => 169,
                'quantity' => 1,
                'price' => '12',
                'invoice_id' => 226,
                'created_at' => '2023-09-15 19:17:10',
                'updated_at' => '2023-09-15 19:17:10',
            ),
            396 =>
            array (
                'id' => 462,
                'product_id' => 166,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 227,
                'created_at' => '2023-09-15 19:17:26',
                'updated_at' => '2023-09-15 19:17:26',
            ),
            397 =>
            array (
                'id' => 463,
                'product_id' => 232,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 228,
                'created_at' => '2023-09-15 19:19:18',
                'updated_at' => '2023-09-15 19:19:18',
            ),
            398 =>
            array (
                'id' => 464,
                'product_id' => 231,
                'quantity' => 1,
                'price' => '12',
                'invoice_id' => 228,
                'created_at' => '2023-09-15 19:19:18',
                'updated_at' => '2023-09-15 19:19:18',
            ),
            399 =>
            array (
                'id' => 465,
                'product_id' => 20,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 229,
                'created_at' => '2023-09-15 19:20:00',
                'updated_at' => '2023-09-15 19:20:00',
            ),
            400 =>
            array (
                'id' => 466,
                'product_id' => 3,
                'quantity' => 1,
                'price' => '12',
                'invoice_id' => 229,
                'created_at' => '2023-09-15 19:20:00',
                'updated_at' => '2023-09-15 19:20:00',
            ),
            401 =>
            array (
                'id' => 467,
                'product_id' => 215,
                'quantity' => 10,
                'price' => '14',
                'invoice_id' => 229,
                'created_at' => '2023-09-15 19:20:00',
                'updated_at' => '2023-09-15 19:20:00',
            ),
            402 =>
            array (
                'id' => 468,
                'product_id' => 2,
                'quantity' => 1,
                'price' => '10',
                'invoice_id' => 229,
                'created_at' => '2023-09-15 19:20:00',
                'updated_at' => '2023-09-15 19:20:00',
            ),
            403 =>
            array (
                'id' => 469,
                'product_id' => 233,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 230,
                'created_at' => '2023-09-15 19:22:27',
                'updated_at' => '2023-09-15 19:22:27',
            ),
            404 =>
            array (
                'id' => 470,
                'product_id' => 95,
                'quantity' => 2,
                'price' => '8',
                'invoice_id' => 230,
                'created_at' => '2023-09-15 19:22:27',
                'updated_at' => '2023-09-15 19:22:27',
            ),
            405 =>
            array (
                'id' => 472,
                'product_id' => 234,
                'quantity' => 1,
                'price' => '14',
                'invoice_id' => 231,
                'created_at' => '2023-09-15 19:23:37',
                'updated_at' => '2023-09-15 19:23:37',
            ),
            406 =>
            array (
                'id' => 473,
                'product_id' => 3,
                'quantity' => 4,
                'price' => '20',
                'invoice_id' => 232,
                'created_at' => '2023-09-15 19:24:58',
                'updated_at' => '2023-09-15 19:24:58',
            ),
            407 =>
            array (
                'id' => 474,
                'product_id' => 9,
                'quantity' => 1,
                'price' => '6',
                'invoice_id' => 232,
                'created_at' => '2023-09-15 19:24:58',
                'updated_at' => '2023-09-15 19:24:58',
            ),
            408 =>
            array (
                'id' => 475,
                'product_id' => 91,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 232,
                'created_at' => '2023-09-15 19:24:58',
                'updated_at' => '2023-09-15 19:24:58',
            ),
            409 =>
            array (
                'id' => 476,
                'product_id' => 214,
                'quantity' => 10,
                'price' => '5',
                'invoice_id' => 232,
                'created_at' => '2023-09-15 19:24:58',
                'updated_at' => '2023-09-15 19:24:58',
            ),
            410 =>
            array (
                'id' => 477,
                'product_id' => 17,
                'quantity' => 3,
                'price' => '3',
                'invoice_id' => 232,
                'created_at' => '2023-09-15 19:24:58',
                'updated_at' => '2023-09-15 19:24:58',
            ),
            411 =>
            array (
                'id' => 478,
                'product_id' => 41,
                'quantity' => 2,
                'price' => '10',
                'invoice_id' => 232,
                'created_at' => '2023-09-15 19:24:58',
                'updated_at' => '2023-09-15 19:24:58',
            ),
            412 =>
            array (
                'id' => 479,
                'product_id' => 176,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 233,
                'created_at' => '2023-09-15 19:25:50',
                'updated_at' => '2023-09-15 19:25:50',
            ),
            413 =>
            array (
                'id' => 480,
                'product_id' => 20,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 233,
                'created_at' => '2023-09-15 19:25:50',
                'updated_at' => '2023-09-15 19:25:50',
            ),
            414 =>
            array (
                'id' => 481,
                'product_id' => 5,
                'quantity' => 1,
                'price' => '12',
                'invoice_id' => 233,
                'created_at' => '2023-09-15 19:25:50',
                'updated_at' => '2023-09-15 19:25:50',
            ),
            415 =>
            array (
                'id' => 482,
                'product_id' => 131,
                'quantity' => 1,
                'price' => '9',
                'invoice_id' => 233,
                'created_at' => '2023-09-15 19:25:50',
                'updated_at' => '2023-09-15 19:25:50',
            ),
            416 =>
            array (
                'id' => 483,
                'product_id' => 120,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 233,
                'created_at' => '2023-09-15 19:25:50',
                'updated_at' => '2023-09-15 19:25:50',
            ),
            417 =>
            array (
                'id' => 484,
                'product_id' => 173,
                'quantity' => 3,
                'price' => '12',
                'invoice_id' => 235,
                'created_at' => '2023-09-15 19:28:06',
                'updated_at' => '2023-09-15 19:28:06',
            ),
            418 =>
            array (
                'id' => 485,
                'product_id' => 200,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 235,
                'created_at' => '2023-09-15 19:28:06',
                'updated_at' => '2023-09-15 19:28:06',
            ),
            419 =>
            array (
                'id' => 486,
                'product_id' => 3,
                'quantity' => 3,
                'price' => '30',
                'invoice_id' => 236,
                'created_at' => '2023-09-15 19:28:58',
                'updated_at' => '2023-09-15 19:28:58',
            ),
            420 =>
            array (
                'id' => 487,
                'product_id' => 9,
                'quantity' => 3,
                'price' => '8',
                'invoice_id' => 236,
                'created_at' => '2023-09-15 19:28:58',
                'updated_at' => '2023-09-15 19:28:58',
            ),
            421 =>
            array (
                'id' => 488,
                'product_id' => 2,
                'quantity' => 4,
                'price' => '7',
                'invoice_id' => 236,
                'created_at' => '2023-09-15 19:28:58',
                'updated_at' => '2023-09-15 19:28:58',
            ),
            422 =>
            array (
                'id' => 489,
                'product_id' => 20,
                'quantity' => 1,
                'price' => '10',
                'invoice_id' => 237,
                'created_at' => '2023-09-15 19:29:59',
                'updated_at' => '2023-09-15 19:29:59',
            ),
            423 =>
            array (
                'id' => 490,
                'product_id' => 3,
                'quantity' => 6,
                'price' => '36',
                'invoice_id' => 237,
                'created_at' => '2023-09-15 19:29:59',
                'updated_at' => '2023-09-15 19:29:59',
            ),
            424 =>
            array (
                'id' => 491,
                'product_id' => 39,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 237,
                'created_at' => '2023-09-15 19:29:59',
                'updated_at' => '2023-09-15 19:29:59',
            ),
            425 =>
            array (
                'id' => 492,
                'product_id' => 2,
                'quantity' => 2,
                'price' => '8',
                'invoice_id' => 237,
                'created_at' => '2023-09-15 19:29:59',
                'updated_at' => '2023-09-15 19:29:59',
            ),
            426 =>
            array (
                'id' => 493,
                'product_id' => 9,
                'quantity' => 1,
                'price' => '9',
                'invoice_id' => 237,
                'created_at' => '2023-09-15 19:29:59',
                'updated_at' => '2023-09-15 19:29:59',
            ),
            427 =>
            array (
                'id' => 494,
                'product_id' => 169,
                'quantity' => 1,
                'price' => '10',
                'invoice_id' => 238,
                'created_at' => '2023-09-15 19:30:18',
                'updated_at' => '2023-09-15 19:30:18',
            ),
            428 =>
            array (
                'id' => 498,
                'product_id' => 20,
                'quantity' => 3,
                'price' => '12',
                'invoice_id' => 241,
                'created_at' => '2023-09-15 19:32:35',
                'updated_at' => '2023-09-15 19:32:35',
            ),
            429 =>
            array (
                'id' => 499,
                'product_id' => 114,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 241,
                'created_at' => '2023-09-15 19:32:35',
                'updated_at' => '2023-09-15 19:32:35',
            ),
            430 =>
            array (
                'id' => 500,
                'product_id' => 20,
                'quantity' => 1,
                'price' => '12',
                'invoice_id' => 245,
                'created_at' => '2023-09-15 19:34:56',
                'updated_at' => '2023-09-15 19:34:56',
            ),
            431 =>
            array (
                'id' => 501,
                'product_id' => 6,
                'quantity' => 1,
                'price' => '13',
                'invoice_id' => 246,
                'created_at' => '2023-09-15 19:35:19',
                'updated_at' => '2023-09-15 19:35:19',
            ),
            432 =>
            array (
                'id' => 502,
                'product_id' => 114,
                'quantity' => 1,
                'price' => '15',
                'invoice_id' => 246,
                'created_at' => '2023-09-15 19:35:19',
                'updated_at' => '2023-09-15 19:35:19',
            ),
            433 =>
            array (
                'id' => 503,
                'product_id' => 227,
                'quantity' => 2,
                'price' => '8',
                'invoice_id' => 247,
                'created_at' => '2023-09-15 19:35:51',
                'updated_at' => '2023-09-15 19:35:51',
            ),
            434 =>
            array (
                'id' => 504,
                'product_id' => 16,
                'quantity' => 2,
                'price' => '13',
                'invoice_id' => 247,
                'created_at' => '2023-09-15 19:35:51',
                'updated_at' => '2023-09-15 19:35:51',
            ),
            435 =>
            array (
                'id' => 505,
                'product_id' => 227,
                'quantity' => 1,
                'price' => '11',
                'invoice_id' => 248,
                'created_at' => '2023-09-15 19:36:33',
                'updated_at' => '2023-09-15 19:36:33',
            ),
            436 =>
            array (
                'id' => 506,
                'product_id' => 2,
                'quantity' => 2,
                'price' => '13',
                'invoice_id' => 248,
                'created_at' => '2023-09-15 19:36:33',
                'updated_at' => '2023-09-15 19:36:33',
            ),
            437 =>
            array (
                'id' => 507,
                'product_id' => 214,
                'quantity' => 10,
                'price' => '5',
                'invoice_id' => 248,
                'created_at' => '2023-09-15 19:36:33',
                'updated_at' => '2023-09-15 19:36:33',
            ),
            438 =>
            array (
                'id' => 508,
                'product_id' => 58,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 249,
                'created_at' => '2023-09-15 19:37:45',
                'updated_at' => '2023-09-15 19:37:45',
            ),
            439 =>
            array (
                'id' => 509,
                'product_id' => 4,
                'quantity' => 3,
                'price' => '14',
                'invoice_id' => 249,
                'created_at' => '2023-09-15 19:37:45',
                'updated_at' => '2023-09-15 19:37:45',
            ),
            440 =>
            array (
                'id' => 510,
                'product_id' => 3,
                'quantity' => 3,
                'price' => '24',
                'invoice_id' => 249,
                'created_at' => '2023-09-15 19:37:45',
                'updated_at' => '2023-09-15 19:37:45',
            ),
            441 =>
            array (
                'id' => 511,
                'product_id' => 2,
                'quantity' => 4,
                'price' => '18',
                'invoice_id' => 249,
                'created_at' => '2023-09-15 19:37:45',
                'updated_at' => '2023-09-15 19:37:45',
            ),
            442 =>
            array (
                'id' => 512,
                'product_id' => 145,
                'quantity' => 2,
                'price' => '14',
                'invoice_id' => 250,
                'created_at' => '2023-09-15 19:38:41',
                'updated_at' => '2023-09-15 19:38:41',
            ),
            443 =>
            array (
                'id' => 513,
                'product_id' => 27,
                'quantity' => 1,
                'price' => '13',
                'invoice_id' => 250,
                'created_at' => '2023-09-15 19:38:41',
                'updated_at' => '2023-09-15 19:38:41',
            ),
            444 =>
            array (
                'id' => 514,
                'product_id' => 26,
                'quantity' => 10,
                'price' => '7',
                'invoice_id' => 250,
                'created_at' => '2023-09-15 19:38:41',
                'updated_at' => '2023-09-15 19:38:41',
            ),
            445 =>
            array (
                'id' => 515,
                'product_id' => 106,
                'quantity' => 1,
                'price' => '12',
                'invoice_id' => 250,
                'created_at' => '2023-09-15 19:38:41',
                'updated_at' => '2023-09-15 19:38:41',
            ),
            446 =>
            array (
                'id' => 516,
                'product_id' => 169,
                'quantity' => 1,
                'price' => '12',
                'invoice_id' => 251,
                'created_at' => '2023-09-15 19:39:09',
                'updated_at' => '2023-09-15 19:39:09',
            ),
            447 =>
            array (
                'id' => 517,
                'product_id' => 26,
                'quantity' => 1,
                'price' => '6',
                'invoice_id' => 251,
                'created_at' => '2023-09-15 19:39:09',
                'updated_at' => '2023-09-15 19:39:09',
            ),
            448 =>
            array (
                'id' => 518,
                'product_id' => 169,
                'quantity' => 1,
                'price' => '11',
                'invoice_id' => 252,
                'created_at' => '2023-09-15 19:40:30',
                'updated_at' => '2023-09-15 19:40:30',
            ),
            449 =>
            array (
                'id' => 519,
                'product_id' => 154,
                'quantity' => 3,
                'price' => '14',
                'invoice_id' => 252,
                'created_at' => '2023-09-15 19:40:30',
                'updated_at' => '2023-09-15 19:40:30',
            ),
            450 =>
            array (
                'id' => 520,
                'product_id' => 25,
                'quantity' => 2,
                'price' => '8',
                'invoice_id' => 252,
                'created_at' => '2023-09-15 19:40:30',
                'updated_at' => '2023-09-15 19:40:30',
            ),
            451 =>
            array (
                'id' => 521,
                'product_id' => 179,
                'quantity' => 1,
                'price' => '6',
                'invoice_id' => 253,
                'created_at' => '2023-09-15 19:41:18',
                'updated_at' => '2023-09-15 19:41:18',
            ),
            452 =>
            array (
                'id' => 522,
                'product_id' => 62,
                'quantity' => 1,
                'price' => '4',
                'invoice_id' => 253,
                'created_at' => '2023-09-15 19:41:18',
                'updated_at' => '2023-09-15 19:41:18',
            ),
            453 =>
            array (
                'id' => 523,
                'product_id' => 67,
                'quantity' => 1,
                'price' => '6',
                'invoice_id' => 253,
                'created_at' => '2023-09-15 19:41:18',
                'updated_at' => '2023-09-15 19:41:18',
            ),
            454 =>
            array (
                'id' => 524,
                'product_id' => 24,
                'quantity' => 3,
                'price' => '12',
                'invoice_id' => 253,
                'created_at' => '2023-09-15 19:41:18',
                'updated_at' => '2023-09-15 19:41:18',
            ),
            455 =>
            array (
                'id' => 525,
                'product_id' => 235,
                'quantity' => 1,
                'price' => '20',
                'invoice_id' => 254,
                'created_at' => '2023-09-15 19:44:58',
                'updated_at' => '2023-09-15 19:44:58',
            ),
            456 =>
            array (
                'id' => 526,
                'product_id' => 169,
                'quantity' => 1,
                'price' => '11',
                'invoice_id' => 255,
                'created_at' => '2023-09-15 19:46:27',
                'updated_at' => '2023-09-15 19:46:27',
            ),
            457 =>
            array (
                'id' => 527,
                'product_id' => 238,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 255,
                'created_at' => '2023-09-15 19:46:27',
                'updated_at' => '2023-09-15 19:46:27',
            ),
            458 =>
            array (
                'id' => 528,
                'product_id' => 81,
                'quantity' => 1,
                'price' => '21',
                'invoice_id' => 256,
                'created_at' => '2023-09-15 19:46:45',
                'updated_at' => '2023-09-15 19:46:45',
            ),
            459 =>
            array (
                'id' => 529,
                'product_id' => 51,
                'quantity' => 1,
                'price' => '14',
                'invoice_id' => 257,
                'created_at' => '2023-09-15 19:47:04',
                'updated_at' => '2023-09-15 19:47:04',
            ),
            460 =>
            array (
                'id' => 530,
                'product_id' => 176,
                'quantity' => 1,
                'price' => '11',
                'invoice_id' => 258,
                'created_at' => '2023-09-15 19:47:48',
                'updated_at' => '2023-09-15 19:47:48',
            ),
            461 =>
            array (
                'id' => 531,
                'product_id' => 20,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 258,
                'created_at' => '2023-09-15 19:47:48',
                'updated_at' => '2023-09-15 19:47:48',
            ),
            462 =>
            array (
                'id' => 532,
                'product_id' => 228,
                'quantity' => 1,
                'price' => '6',
                'invoice_id' => 258,
                'created_at' => '2023-09-15 19:47:48',
                'updated_at' => '2023-09-15 19:47:48',
            ),
            463 =>
            array (
                'id' => 533,
                'product_id' => 1,
                'quantity' => 3,
                'price' => '26',
                'invoice_id' => 259,
                'created_at' => '2023-09-15 19:48:27',
                'updated_at' => '2023-09-15 19:48:27',
            ),
            464 =>
            array (
                'id' => 534,
                'product_id' => 16,
                'quantity' => 1,
                'price' => '10',
                'invoice_id' => 259,
                'created_at' => '2023-09-15 19:48:27',
                'updated_at' => '2023-09-15 19:48:27',
            ),
            465 =>
            array (
                'id' => 535,
                'product_id' => 114,
                'quantity' => 2,
                'price' => '22',
                'invoice_id' => 260,
                'created_at' => '2023-09-15 19:48:49',
                'updated_at' => '2023-09-15 19:48:49',
            ),
            466 =>
            array (
                'id' => 538,
                'product_id' => 3,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 261,
                'created_at' => '2023-09-15 19:50:27',
                'updated_at' => '2023-09-15 19:50:27',
            ),
            467 =>
            array (
                'id' => 539,
                'product_id' => 227,
                'quantity' => 1,
                'price' => '13',
                'invoice_id' => 261,
                'created_at' => '2023-09-15 19:50:27',
                'updated_at' => '2023-09-15 19:50:27',
            ),
            468 =>
            array (
                'id' => 540,
                'product_id' => 239,
                'quantity' => 4,
                'price' => '13',
                'invoice_id' => 261,
                'created_at' => '2023-09-15 19:50:27',
                'updated_at' => '2023-09-15 19:50:27',
            ),
            469 =>
            array (
                'id' => 541,
                'product_id' => 143,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 262,
                'created_at' => '2023-09-15 19:51:03',
                'updated_at' => '2023-09-15 19:51:03',
            ),
            470 =>
            array (
                'id' => 542,
                'product_id' => 95,
                'quantity' => 1,
                'price' => '6',
                'invoice_id' => 262,
                'created_at' => '2023-09-15 19:51:03',
                'updated_at' => '2023-09-15 19:51:03',
            ),
            471 =>
            array (
                'id' => 543,
                'product_id' => 151,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 263,
                'created_at' => '2023-09-15 19:51:49',
                'updated_at' => '2023-09-15 19:51:49',
            ),
            472 =>
            array (
                'id' => 544,
                'product_id' => 164,
                'quantity' => 1,
                'price' => '6',
                'invoice_id' => 263,
                'created_at' => '2023-09-15 19:51:49',
                'updated_at' => '2023-09-15 19:51:49',
            ),
            473 =>
            array (
                'id' => 545,
                'product_id' => 218,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 263,
                'created_at' => '2023-09-15 19:51:49',
                'updated_at' => '2023-09-15 19:51:49',
            ),
            474 =>
            array (
                'id' => 546,
                'product_id' => 136,
                'quantity' => 1,
                'price' => '6',
                'invoice_id' => 263,
                'created_at' => '2023-09-15 19:51:49',
                'updated_at' => '2023-09-15 19:51:49',
            ),
            475 =>
            array (
                'id' => 547,
                'product_id' => 32,
                'quantity' => 1,
                'price' => '12',
                'invoice_id' => 264,
                'created_at' => '2023-09-15 19:58:04',
                'updated_at' => '2023-09-15 19:58:04',
            ),
            476 =>
            array (
                'id' => 548,
                'product_id' => 79,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 264,
                'created_at' => '2023-09-15 19:58:04',
                'updated_at' => '2023-09-15 19:58:04',
            ),
            477 =>
            array (
                'id' => 549,
                'product_id' => 138,
                'quantity' => 1,
                'price' => '4',
                'invoice_id' => 264,
                'created_at' => '2023-09-15 19:58:04',
                'updated_at' => '2023-09-15 19:58:04',
            ),
            478 =>
            array (
                'id' => 550,
                'product_id' => 168,
                'quantity' => 1,
                'price' => '4',
                'invoice_id' => 264,
                'created_at' => '2023-09-15 19:58:04',
                'updated_at' => '2023-09-15 19:58:04',
            ),
            479 =>
            array (
                'id' => 551,
                'product_id' => 164,
                'quantity' => 3,
                'price' => '6',
                'invoice_id' => 264,
                'created_at' => '2023-09-15 19:58:04',
                'updated_at' => '2023-09-15 19:58:04',
            ),
            480 =>
            array (
                'id' => 552,
                'product_id' => 156,
                'quantity' => 1,
                'price' => '13',
                'invoice_id' => 265,
                'created_at' => '2023-09-15 19:58:23',
                'updated_at' => '2023-09-15 19:58:23',
            ),
            481 =>
            array (
                'id' => 553,
                'product_id' => 22,
                'quantity' => 1,
                'price' => '13',
                'invoice_id' => 266,
                'created_at' => '2023-09-15 19:59:08',
                'updated_at' => '2023-09-15 19:59:08',
            ),
            482 =>
            array (
                'id' => 554,
                'product_id' => 170,
                'quantity' => 2,
                'price' => '4',
                'invoice_id' => 267,
                'created_at' => '2023-09-15 20:00:12',
                'updated_at' => '2023-09-15 20:00:12',
            ),
            483 =>
            array (
                'id' => 555,
                'product_id' => 41,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 267,
                'created_at' => '2023-09-15 20:00:12',
                'updated_at' => '2023-09-15 20:00:12',
            ),
            484 =>
            array (
                'id' => 556,
                'product_id' => 2,
                'quantity' => 2,
                'price' => '12',
                'invoice_id' => 267,
                'created_at' => '2023-09-15 20:00:12',
                'updated_at' => '2023-09-15 20:00:12',
            ),
            485 =>
            array (
                'id' => 557,
                'product_id' => 7,
                'quantity' => 1,
                'price' => '1',
                'invoice_id' => 267,
                'created_at' => '2023-09-15 20:00:12',
                'updated_at' => '2023-09-15 20:00:12',
            ),
            486 =>
            array (
                'id' => 558,
                'product_id' => 41,
                'quantity' => 2,
                'price' => '14',
                'invoice_id' => 267,
                'created_at' => '2023-09-15 20:00:12',
                'updated_at' => '2023-09-15 20:00:12',
            ),
            487 =>
            array (
                'id' => 559,
                'product_id' => 126,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 268,
                'created_at' => '2023-09-15 20:00:39',
                'updated_at' => '2023-09-15 20:00:39',
            ),
            488 =>
            array (
                'id' => 560,
                'product_id' => 38,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 268,
                'created_at' => '2023-09-15 20:00:39',
                'updated_at' => '2023-09-15 20:00:39',
            ),
            489 =>
            array (
                'id' => 561,
                'product_id' => 234,
                'quantity' => 1,
                'price' => '12',
                'invoice_id' => 268,
                'created_at' => '2023-09-15 20:00:39',
                'updated_at' => '2023-09-15 20:00:39',
            ),
            490 =>
            array (
                'id' => 562,
                'product_id' => 3,
                'quantity' => 1,
                'price' => '11',
                'invoice_id' => 269,
                'created_at' => '2023-09-15 20:01:21',
                'updated_at' => '2023-09-15 20:01:21',
            ),
            491 =>
            array (
                'id' => 563,
                'product_id' => 11,
                'quantity' => 2,
                'price' => '6',
                'invoice_id' => 269,
                'created_at' => '2023-09-15 20:01:21',
                'updated_at' => '2023-09-15 20:01:21',
            ),
            492 =>
            array (
                'id' => 564,
                'product_id' => 12,
                'quantity' => 4,
                'price' => '5',
                'invoice_id' => 269,
                'created_at' => '2023-09-15 20:01:21',
                'updated_at' => '2023-09-15 20:01:21',
            ),
            493 =>
            array (
                'id' => 565,
                'product_id' => 58,
                'quantity' => 1,
                'price' => '3',
                'invoice_id' => 269,
                'created_at' => '2023-09-15 20:01:21',
                'updated_at' => '2023-09-15 20:01:21',
            ),
            494 =>
            array (
                'id' => 566,
                'product_id' => 68,
                'quantity' => 2,
                'price' => '2',
                'invoice_id' => 269,
                'created_at' => '2023-09-15 20:01:21',
                'updated_at' => '2023-09-15 20:01:21',
            ),
            495 =>
            array (
                'id' => 567,
                'product_id' => 3,
                'quantity' => 2,
                'price' => '12',
                'invoice_id' => 270,
                'created_at' => '2023-09-15 20:02:23',
                'updated_at' => '2023-09-15 20:02:23',
            ),
            496 =>
            array (
                'id' => 568,
                'product_id' => 170,
                'quantity' => 1,
                'price' => '3',
                'invoice_id' => 270,
                'created_at' => '2023-09-15 20:02:23',
                'updated_at' => '2023-09-15 20:02:23',
            ),
            497 =>
            array (
                'id' => 569,
                'product_id' => 26,
                'quantity' => 10,
                'price' => '3',
                'invoice_id' => 270,
                'created_at' => '2023-09-15 20:02:23',
                'updated_at' => '2023-09-15 20:02:23',
            ),
            498 =>
            array (
                'id' => 570,
                'product_id' => 80,
                'quantity' => 1,
                'price' => '14',
                'invoice_id' => 270,
                'created_at' => '2023-09-15 20:02:23',
                'updated_at' => '2023-09-15 20:02:23',
            ),
            499 =>
            array (
                'id' => 571,
                'product_id' => 85,
                'quantity' => 1,
                'price' => '17',
                'invoice_id' => 270,
                'created_at' => '2023-09-15 20:02:23',
                'updated_at' => '2023-09-15 20:02:23',
            ),
        ));
        \DB::table('invoice_products')->insert(array (
            0 =>
            array (
                'id' => 572,
                'product_id' => 179,
                'quantity' => 2,
                'price' => '13',
                'invoice_id' => 270,
                'created_at' => '2023-09-15 20:02:23',
                'updated_at' => '2023-09-15 20:02:23',
            ),
            1 =>
            array (
                'id' => 573,
                'product_id' => 240,
                'quantity' => 1,
                'price' => '13',
                'invoice_id' => 271,
                'created_at' => '2023-09-15 20:04:23',
                'updated_at' => '2023-09-15 20:04:23',
            ),
            2 =>
            array (
                'id' => 574,
                'product_id' => 179,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 271,
                'created_at' => '2023-09-15 20:04:23',
                'updated_at' => '2023-09-15 20:04:23',
            ),
            3 =>
            array (
                'id' => 575,
                'product_id' => 231,
                'quantity' => 1,
                'price' => '14',
                'invoice_id' => 272,
                'created_at' => '2023-09-15 20:05:09',
                'updated_at' => '2023-09-15 20:05:09',
            ),
            4 =>
            array (
                'id' => 576,
                'product_id' => 142,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 272,
                'created_at' => '2023-09-15 20:05:09',
                'updated_at' => '2023-09-15 20:05:09',
            ),
            5 =>
            array (
                'id' => 577,
                'product_id' => 3,
                'quantity' => 4,
                'price' => '15',
                'invoice_id' => 272,
                'created_at' => '2023-09-15 20:05:09',
                'updated_at' => '2023-09-15 20:05:09',
            ),
            6 =>
            array (
                'id' => 578,
                'product_id' => 20,
                'quantity' => 1,
                'price' => '11',
                'invoice_id' => 272,
                'created_at' => '2023-09-15 20:05:09',
                'updated_at' => '2023-09-15 20:05:09',
            ),
            7 =>
            array (
                'id' => 579,
                'product_id' => 241,
                'quantity' => 1,
                'price' => '20',
                'invoice_id' => 273,
                'created_at' => '2023-09-15 20:06:26',
                'updated_at' => '2023-09-15 20:06:26',
            ),
            8 =>
            array (
                'id' => 580,
                'product_id' => 94,
                'quantity' => 1,
                'price' => '15',
                'invoice_id' => 273,
                'created_at' => '2023-09-15 20:06:26',
                'updated_at' => '2023-09-15 20:06:26',
            ),
            9 =>
            array (
                'id' => 581,
                'product_id' => 3,
                'quantity' => 2,
                'price' => '22',
                'invoice_id' => 274,
                'created_at' => '2023-09-16 04:05:34',
                'updated_at' => '2023-09-16 04:05:34',
            ),
            10 =>
            array (
                'id' => 582,
                'product_id' => 244,
                'quantity' => 1,
                'price' => '2',
                'invoice_id' => 274,
                'created_at' => '2023-09-16 04:05:34',
                'updated_at' => '2023-09-16 04:05:34',
            ),
            11 =>
            array (
                'id' => 583,
                'product_id' => 241,
                'quantity' => 1,
                'price' => '13',
                'invoice_id' => 274,
                'created_at' => '2023-09-16 04:05:34',
                'updated_at' => '2023-09-16 04:05:34',
            ),
            12 =>
            array (
                'id' => 584,
                'product_id' => 136,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 274,
                'created_at' => '2023-09-16 04:05:34',
                'updated_at' => '2023-09-16 04:05:34',
            ),
            13 =>
            array (
                'id' => 585,
                'product_id' => 48,
                'quantity' => 1,
                'price' => '3',
                'invoice_id' => 274,
                'created_at' => '2023-09-16 04:05:34',
                'updated_at' => '2023-09-16 04:05:34',
            ),
            14 =>
            array (
                'id' => 586,
                'product_id' => 2,
                'quantity' => 4,
                'price' => '22',
                'invoice_id' => 275,
                'created_at' => '2023-09-16 04:06:28',
                'updated_at' => '2023-09-16 04:06:28',
            ),
            15 =>
            array (
                'id' => 587,
                'product_id' => 3,
                'quantity' => 1,
                'price' => '15',
                'invoice_id' => 275,
                'created_at' => '2023-09-16 04:06:28',
                'updated_at' => '2023-09-16 04:06:28',
            ),
            16 =>
            array (
                'id' => 588,
                'product_id' => 239,
                'quantity' => 5,
                'price' => '18',
                'invoice_id' => 275,
                'created_at' => '2023-09-16 04:06:28',
                'updated_at' => '2023-09-16 04:06:28',
            ),
            17 =>
            array (
                'id' => 589,
                'product_id' => 234,
                'quantity' => 1,
                'price' => '10',
                'invoice_id' => 277,
                'created_at' => '2023-09-16 04:12:55',
                'updated_at' => '2023-09-16 04:12:55',
            ),
            18 =>
            array (
                'id' => 590,
                'product_id' => 20,
                'quantity' => 3,
                'price' => '21',
                'invoice_id' => 278,
                'created_at' => '2023-09-16 04:15:08',
                'updated_at' => '2023-09-16 04:15:08',
            ),
            19 =>
            array (
                'id' => 591,
                'product_id' => 194,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 278,
                'created_at' => '2023-09-16 04:15:08',
                'updated_at' => '2023-09-16 04:15:08',
            ),
            20 =>
            array (
                'id' => 592,
                'product_id' => 93,
                'quantity' => 1,
                'price' => '13',
                'invoice_id' => 278,
                'created_at' => '2023-09-16 04:15:08',
                'updated_at' => '2023-09-16 04:15:08',
            ),
            21 =>
            array (
                'id' => 593,
                'product_id' => 169,
                'quantity' => 1,
                'price' => '12',
                'invoice_id' => 279,
                'created_at' => '2023-09-16 04:15:29',
                'updated_at' => '2023-09-16 04:15:29',
            ),
            22 =>
            array (
                'id' => 594,
                'product_id' => 4,
                'quantity' => 1,
                'price' => '12',
                'invoice_id' => 280,
                'created_at' => '2023-09-16 04:15:52',
                'updated_at' => '2023-09-16 04:15:52',
            ),
            23 =>
            array (
                'id' => 595,
                'product_id' => 6,
                'quantity' => 1,
                'price' => '15',
                'invoice_id' => 280,
                'created_at' => '2023-09-16 04:15:52',
                'updated_at' => '2023-09-16 04:15:52',
            ),
            24 =>
            array (
                'id' => 596,
                'product_id' => 23,
                'quantity' => 1,
                'price' => '10',
                'invoice_id' => 281,
                'created_at' => '2023-09-16 04:17:02',
                'updated_at' => '2023-09-16 04:17:02',
            ),
            25 =>
            array (
                'id' => 597,
                'product_id' => 47,
                'quantity' => 1,
                'price' => '6',
                'invoice_id' => 281,
                'created_at' => '2023-09-16 04:17:02',
                'updated_at' => '2023-09-16 04:17:02',
            ),
            26 =>
            array (
                'id' => 598,
                'product_id' => 9,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 281,
                'created_at' => '2023-09-16 04:17:02',
                'updated_at' => '2023-09-16 04:17:02',
            ),
            27 =>
            array (
                'id' => 599,
                'product_id' => 41,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 281,
                'created_at' => '2023-09-16 04:17:02',
                'updated_at' => '2023-09-16 04:17:02',
            ),
            28 =>
            array (
                'id' => 600,
                'product_id' => 4,
                'quantity' => 5,
                'price' => '23',
                'invoice_id' => 281,
                'created_at' => '2023-09-16 04:17:02',
                'updated_at' => '2023-09-16 04:17:02',
            ),
            29 =>
            array (
                'id' => 601,
                'product_id' => 94,
                'quantity' => 1,
                'price' => '20',
                'invoice_id' => 282,
                'created_at' => '2023-09-16 04:17:32',
                'updated_at' => '2023-09-16 04:17:32',
            ),
            30 =>
            array (
                'id' => 602,
                'product_id' => 27,
                'quantity' => 1,
                'price' => '15',
                'invoice_id' => 282,
                'created_at' => '2023-09-16 04:17:32',
                'updated_at' => '2023-09-16 04:17:32',
            ),
            31 =>
            array (
                'id' => 603,
                'product_id' => 80,
                'quantity' => 1,
                'price' => '14',
                'invoice_id' => 283,
                'created_at' => '2023-09-16 04:18:02',
                'updated_at' => '2023-09-16 04:18:02',
            ),
            32 =>
            array (
                'id' => 604,
                'product_id' => 186,
                'quantity' => 1,
                'price' => '16',
                'invoice_id' => 283,
                'created_at' => '2023-09-16 04:18:02',
                'updated_at' => '2023-09-16 04:18:02',
            ),
            33 =>
            array (
                'id' => 605,
                'product_id' => 41,
                'quantity' => 2,
                'price' => '12',
                'invoice_id' => 284,
                'created_at' => '2023-09-16 04:18:51',
                'updated_at' => '2023-09-16 04:18:51',
            ),
            34 =>
            array (
                'id' => 606,
                'product_id' => 3,
                'quantity' => 1,
                'price' => '15',
                'invoice_id' => 284,
                'created_at' => '2023-09-16 04:18:51',
                'updated_at' => '2023-09-16 04:18:51',
            ),
            35 =>
            array (
                'id' => 607,
                'product_id' => 95,
                'quantity' => 1,
                'price' => '6',
                'invoice_id' => 284,
                'created_at' => '2023-09-16 04:18:51',
                'updated_at' => '2023-09-16 04:18:51',
            ),
            36 =>
            array (
                'id' => 608,
                'product_id' => 58,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 284,
                'created_at' => '2023-09-16 04:18:51',
                'updated_at' => '2023-09-16 04:18:51',
            ),
            37 =>
            array (
                'id' => 609,
                'product_id' => 246,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 285,
                'created_at' => '2023-09-16 04:23:50',
                'updated_at' => '2023-09-16 04:23:50',
            ),
            38 =>
            array (
                'id' => 610,
                'product_id' => 248,
                'quantity' => 3,
                'price' => '8',
                'invoice_id' => 285,
                'created_at' => '2023-09-16 04:23:50',
                'updated_at' => '2023-09-16 04:23:50',
            ),
            39 =>
            array (
                'id' => 611,
                'product_id' => 170,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 285,
                'created_at' => '2023-09-16 04:23:50',
                'updated_at' => '2023-09-16 04:23:50',
            ),
            40 =>
            array (
                'id' => 612,
                'product_id' => 245,
                'quantity' => 1,
                'price' => '3',
                'invoice_id' => 285,
                'created_at' => '2023-09-16 04:23:50',
                'updated_at' => '2023-09-16 04:23:50',
            ),
            41 =>
            array (
                'id' => 613,
                'product_id' => 81,
                'quantity' => 1,
                'price' => '22',
                'invoice_id' => 286,
                'created_at' => '2023-09-16 04:24:09',
                'updated_at' => '2023-09-16 04:24:09',
            ),
            42 =>
            array (
                'id' => 614,
                'product_id' => 250,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 287,
                'created_at' => '2023-09-16 04:28:38',
                'updated_at' => '2023-09-16 04:28:38',
            ),
            43 =>
            array (
                'id' => 615,
                'product_id' => 249,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 287,
                'created_at' => '2023-09-16 04:28:38',
                'updated_at' => '2023-09-16 04:28:38',
            ),
            44 =>
            array (
                'id' => 616,
                'product_id' => 251,
                'quantity' => 4,
                'price' => '6',
                'invoice_id' => 287,
                'created_at' => '2023-09-16 04:28:38',
                'updated_at' => '2023-09-16 04:28:38',
            ),
            45 =>
            array (
                'id' => 617,
                'product_id' => 139,
                'quantity' => 1,
                'price' => '25',
                'invoice_id' => 288,
                'created_at' => '2023-09-16 04:29:11',
                'updated_at' => '2023-09-16 04:29:11',
            ),
            46 =>
            array (
                'id' => 618,
                'product_id' => 252,
                'quantity' => 1,
                'price' => '12',
                'invoice_id' => 289,
                'created_at' => '2023-09-16 04:30:19',
                'updated_at' => '2023-09-16 04:30:19',
            ),
            47 =>
            array (
                'id' => 619,
                'product_id' => 1,
                'quantity' => 1,
                'price' => '10',
                'invoice_id' => 239,
                'created_at' => '2023-09-16 04:32:13',
                'updated_at' => '2023-09-16 04:32:13',
            ),
            48 =>
            array (
                'id' => 620,
                'product_id' => 29,
                'quantity' => 100,
                'price' => '12',
                'invoice_id' => 239,
                'created_at' => '2023-09-16 04:32:13',
                'updated_at' => '2023-09-16 04:32:13',
            ),
            49 =>
            array (
                'id' => 621,
                'product_id' => 82,
                'quantity' => 10,
                'price' => '10',
                'invoice_id' => 239,
                'created_at' => '2023-09-16 04:32:13',
                'updated_at' => '2023-09-16 04:32:13',
            ),
            50 =>
            array (
                'id' => 622,
                'product_id' => 95,
                'quantity' => 1,
                'price' => '6',
                'invoice_id' => 239,
                'created_at' => '2023-09-16 04:32:13',
                'updated_at' => '2023-09-16 04:32:13',
            ),
            51 =>
            array (
                'id' => 623,
                'product_id' => 20,
                'quantity' => 1,
                'price' => '13',
                'invoice_id' => 239,
                'created_at' => '2023-09-16 04:32:13',
                'updated_at' => '2023-09-16 04:32:13',
            ),
            52 =>
            array (
                'id' => 624,
                'product_id' => 238,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 239,
                'created_at' => '2023-09-16 04:32:13',
                'updated_at' => '2023-09-16 04:32:13',
            ),
            53 =>
            array (
                'id' => 625,
                'product_id' => 39,
                'quantity' => 1,
                'price' => '12',
                'invoice_id' => 240,
                'created_at' => '2023-09-16 04:33:08',
                'updated_at' => '2023-09-16 04:33:08',
            ),
            54 =>
            array (
                'id' => 626,
                'product_id' => 121,
                'quantity' => 1,
                'price' => '13',
                'invoice_id' => 242,
                'created_at' => '2023-09-16 04:35:10',
                'updated_at' => '2023-09-16 04:35:10',
            ),
            55 =>
            array (
                'id' => 627,
                'product_id' => 71,
                'quantity' => 2,
                'price' => '6',
                'invoice_id' => 242,
                'created_at' => '2023-09-16 04:35:10',
                'updated_at' => '2023-09-16 04:35:10',
            ),
            56 =>
            array (
                'id' => 628,
                'product_id' => 26,
                'quantity' => 10,
                'price' => '8',
                'invoice_id' => 242,
                'created_at' => '2023-09-16 04:35:10',
                'updated_at' => '2023-09-16 04:35:10',
            ),
            57 =>
            array (
                'id' => 629,
                'product_id' => 65,
                'quantity' => 1,
                'price' => '6',
                'invoice_id' => 242,
                'created_at' => '2023-09-16 04:35:10',
                'updated_at' => '2023-09-16 04:35:10',
            ),
            58 =>
            array (
                'id' => 630,
                'product_id' => 220,
                'quantity' => 4,
                'price' => '6',
                'invoice_id' => 242,
                'created_at' => '2023-09-16 04:35:10',
                'updated_at' => '2023-09-16 04:35:10',
            ),
            59 =>
            array (
                'id' => 631,
                'product_id' => 20,
                'quantity' => 2,
                'price' => '13',
                'invoice_id' => 243,
                'created_at' => '2023-09-16 04:36:13',
                'updated_at' => '2023-09-16 04:36:13',
            ),
            60 =>
            array (
                'id' => 632,
                'product_id' => 179,
                'quantity' => 1,
                'price' => '8',
                'invoice_id' => 243,
                'created_at' => '2023-09-16 04:36:13',
                'updated_at' => '2023-09-16 04:36:13',
            ),
            61 =>
            array (
                'id' => 633,
                'product_id' => 164,
                'quantity' => 1,
                'price' => '5',
                'invoice_id' => 243,
                'created_at' => '2023-09-16 04:36:13',
                'updated_at' => '2023-09-16 04:36:13',
            ),
            62 =>
            array (
                'id' => 634,
                'product_id' => 95,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 243,
                'created_at' => '2023-09-16 04:36:13',
                'updated_at' => '2023-09-16 04:36:13',
            ),
            63 =>
            array (
                'id' => 635,
                'product_id' => 168,
                'quantity' => 1,
                'price' => '4',
                'invoice_id' => 243,
                'created_at' => '2023-09-16 04:36:13',
                'updated_at' => '2023-09-16 04:36:13',
            ),
            64 =>
            array (
                'id' => 636,
                'product_id' => 2,
                'quantity' => 1,
                'price' => '11',
                'invoice_id' => 243,
                'created_at' => '2023-09-16 04:36:13',
                'updated_at' => '2023-09-16 04:36:13',
            ),
            65 =>
            array (
                'id' => 637,
                'product_id' => 253,
                'quantity' => 1,
                'price' => '6',
                'invoice_id' => 244,
                'created_at' => '2023-09-16 04:38:02',
                'updated_at' => '2023-09-16 04:38:02',
            ),
            66 =>
            array (
                'id' => 638,
                'product_id' => 26,
                'quantity' => 10,
                'price' => '5',
                'invoice_id' => 244,
                'created_at' => '2023-09-16 04:38:02',
                'updated_at' => '2023-09-16 04:38:02',
            ),
            67 =>
            array (
                'id' => 639,
                'product_id' => 95,
                'quantity' => 1,
                'price' => '7',
                'invoice_id' => 244,
                'created_at' => '2023-09-16 04:38:02',
                'updated_at' => '2023-09-16 04:38:02',
            ),
            68 =>
            array (
                'id' => 640,
                'product_id' => 154,
                'quantity' => 2,
                'price' => '12',
                'invoice_id' => 244,
                'created_at' => '2023-09-16 04:38:02',
                'updated_at' => '2023-09-16 04:38:02',
            ),
            69 =>
            array (
                'id' => 641,
                'product_id' => 168,
                'quantity' => 5,
                'price' => '10',
                'invoice_id' => 244,
                'created_at' => '2023-09-16 04:38:02',
                'updated_at' => '2023-09-16 04:38:02',
            ),
            70 =>
            array (
                'id' => 642,
                'product_id' => 110,
                'quantity' => 1,
                'price' => '14',
                'invoice_id' => 244,
                'created_at' => '2023-09-16 04:38:02',
                'updated_at' => '2023-09-16 04:38:02',
            ),
            71 =>
            array (
                'id' => 643,
                'product_id' => 254,
                'quantity' => 1,
                'price' => '6',
                'invoice_id' => 276,
                'created_at' => '2023-09-16 04:39:29',
                'updated_at' => '2023-09-16 04:39:29',
            ),
            72 =>
            array (
                'id' => 644,
                'product_id' => 255,
                'quantity' => 1,
                'price' => '21',
                'invoice_id' => 234,
                'created_at' => '2023-09-16 04:43:49',
                'updated_at' => '2023-09-16 04:43:49',
            ),
            73 =>
            array (
                'id' => 645,
                'product_id' => 134,
                'quantity' => 1,
                'price' => '14',
                'invoice_id' => 290,
                'created_at' => '2023-09-16 04:46:40',
                'updated_at' => '2023-09-16 04:46:40',
            ),
            74 =>
            array (
                'id' => 646,
                'product_id' => 257,
                'quantity' => 1,
                'price' => '14',
                'invoice_id' => 185,
                'created_at' => '2023-09-16 05:07:42',
                'updated_at' => '2023-09-16 05:07:42',
            ),
        ));

//        $id = DB::table('invoice_products')->orderBy('id', 'DESC')->first();
//        DB::statement('alter sequence invoice_products_id_seq restart with '.($id->id+1));
    }
}
