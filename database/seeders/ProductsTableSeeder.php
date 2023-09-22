<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('products')->delete();

        \DB::table('products')->insert(array (
            0 =>
            array (
                'id' => 3,
                'name' => 'Kurtka mujskiy',
                'code' => '620120',
                'position' => 1,
                'category_id' => 1,
                'created_at' => '2023-09-14 18:45:35',
                'updated_at' => '2023-09-14 18:45:35',
            ),
            1 =>
            array (
                'id' => 76,
                'name' => 'Karcher',
                'code' => '842430',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-15 06:11:17',
                'updated_at' => '2023-09-15 06:11:17',
            ),
            2 =>
            array (
                'id' => 48,
                'name' => 'Rezetka',
                'code' => '853669',
                'position' => 2,
                'category_id' => 4,
                'created_at' => '2023-09-14 19:14:53',
                'updated_at' => '2023-09-14 19:14:53',
            ),
            3 =>
            array (
                'id' => 77,
                'name' => 'Lopatka',
                'code' => '820110',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-15 06:12:29',
                'updated_at' => '2023-09-15 06:12:29',
            ),
            4 =>
            array (
                'id' => 92,
                'name' => 'Adyol',
                'code' => '940440',
                'position' => 2,
                'category_id' => 1,
                'created_at' => '2023-09-15 06:42:39',
                'updated_at' => '2023-09-15 06:42:39',
            ),
            5 =>
            array (
                'id' => 5,
                'name' => 'Tufli jenksiy',
                'code' => '640399',
                'position' => 1,
                'category_id' => 3,
                'created_at' => '2023-09-14 18:48:41',
                'updated_at' => '2023-09-14 18:48:41',
            ),
            6 =>
            array (
                'id' => 8,
                'name' => 'Jinfer',
                'code' => '611020',
                'position' => 1,
                'category_id' => 1,
                'created_at' => '2023-09-14 18:49:56',
                'updated_at' => '2023-09-14 18:49:56',
            ),
            7 =>
            array (
                'id' => 9,
                'name' => 'Jenifer',
                'code' => '611020',
                'position' => 1,
                'category_id' => 1,
                'created_at' => '2023-09-14 18:50:07',
                'updated_at' => '2023-09-14 18:50:07',
            ),
            8 =>
            array (
                'id' => 10,
                'name' => 'Kofe',
                'code' => '090121',
                'position' => 1,
                'category_id' => 5,
                'created_at' => '2023-09-14 18:50:38',
                'updated_at' => '2023-09-14 18:50:38',
            ),
            9 =>
            array (
                'id' => 11,
                'name' => 'Shampun',
                'code' => '330510',
                'position' => 1,
                'category_id' => 10,
                'created_at' => '2023-09-14 18:51:04',
                'updated_at' => '2023-09-14 18:51:04',
            ),
            10 =>
            array (
                'id' => 12,
                'name' => 'Sovun',
                'code' => '340111',
                'position' => 1,
                'category_id' => 10,
                'created_at' => '2023-09-14 18:51:31',
                'updated_at' => '2023-09-14 18:51:31',
            ),
            11 =>
            array (
                'id' => 13,
                'name' => 'Shkolad',
                'code' => '180632',
                'position' => 1,
                'category_id' => 5,
                'created_at' => '2023-09-14 18:52:02',
                'updated_at' => '2023-09-14 18:52:02',
            ),
            12 =>
            array (
                'id' => 14,
                'name' => 'Utyuk',
                'code' => '851640',
                'position' => 1,
                'category_id' => 2,
                'created_at' => '2023-09-14 18:52:29',
                'updated_at' => '2023-09-14 18:52:29',
            ),
            13 =>
            array (
                'id' => 15,
                'name' => 'Utuk',
                'code' => '851640',
                'position' => 1,
                'category_id' => 2,
                'created_at' => '2023-09-14 18:52:42',
                'updated_at' => '2023-09-14 18:52:42',
            ),
            14 =>
            array (
                'id' => 16,
                'name' => 'Kurtka detskiy',
                'code' => '620990',
                'position' => 1,
                'category_id' => 1,
                'created_at' => '2023-09-14 18:53:33',
                'updated_at' => '2023-09-14 18:53:33',
            ),
            15 =>
            array (
                'id' => 17,
                'name' => 'Shapka',
                'code' => '650500',
                'position' => 1,
                'category_id' => 1,
                'created_at' => '2023-09-14 18:53:56',
                'updated_at' => '2023-09-14 18:53:56',
            ),
            16 =>
            array (
                'id' => 18,
                'name' => 'Kostyum mujskiy',
                'code' => '620311',
                'position' => 1,
                'category_id' => 1,
                'created_at' => '2023-09-14 18:54:31',
                'updated_at' => '2023-09-14 18:54:31',
            ),
            17 =>
            array (
                'id' => 19,
                'name' => 'Kastyum',
                'code' => '620311',
                'position' => 1,
                'category_id' => 1,
                'created_at' => '2023-09-14 18:54:46',
                'updated_at' => '2023-09-14 18:54:46',
            ),
            18 =>
            array (
                'id' => 78,
                'name' => 'Masterok',
                'code' => '820190',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-15 06:12:48',
                'updated_at' => '2023-09-15 06:12:48',
            ),
            19 =>
            array (
                'id' => 21,
                'name' => 'Igrushka',
                'code' => '950300',
                'position' => 1,
                'category_id' => 11,
                'created_at' => '2023-09-14 18:55:35',
                'updated_at' => '2023-09-14 18:56:40',
            ),
            20 =>
            array (
                'id' => 24,
                'name' => 'Instrument',
                'code' => '820600',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-14 18:58:01',
                'updated_at' => '2023-09-14 18:58:01',
            ),
            21 =>
            array (
                'id' => 25,
                'name' => 'Instrumentlar',
                'code' => '820600',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-14 18:58:35',
                'updated_at' => '2023-09-14 18:58:35',
            ),
            22 =>
            array (
                'id' => 26,
                'name' => 'Perchatka',
                'code' => '621600',
                'position' => 1,
                'category_id' => 1,
                'created_at' => '2023-09-14 18:59:03',
                'updated_at' => '2023-09-14 18:59:03',
            ),
            23 =>
            array (
                'id' => 27,
                'name' => 'Klyuch nabor',
                'code' => '820411',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-14 19:00:07',
                'updated_at' => '2023-09-14 19:00:07',
            ),
            24 =>
            array (
                'id' => 29,
                'name' => 'Ruchka',
                'code' => '960810',
                'position' => 1,
                'category_id' => 8,
                'created_at' => '2023-09-14 19:00:47',
                'updated_at' => '2023-09-14 19:00:47',
            ),
            25 =>
            array (
                'id' => 30,
                'name' => 'Qalam',
                'code' => '960910',
                'position' => 1,
                'category_id' => 8,
                'created_at' => '2023-09-14 19:01:04',
                'updated_at' => '2023-09-14 19:01:04',
            ),
            26 =>
            array (
                'id' => 31,
                'name' => 'Stakan',
                'code' => '701337',
                'position' => 1,
                'category_id' => 9,
                'created_at' => '2023-09-14 19:02:10',
                'updated_at' => '2023-09-14 19:02:10',
            ),
            27 =>
            array (
                'id' => 32,
                'name' => 'Skvarodka',
                'code' => '732391',
                'position' => 1,
                'category_id' => 9,
                'created_at' => '2023-09-14 19:02:46',
                'updated_at' => '2023-09-14 19:02:46',
            ),
            28 =>
            array (
                'id' => 34,
                'name' => 'Postelni belyo',
                'code' => '630210',
                'position' => 1,
                'category_id' => 1,
                'created_at' => '2023-09-14 19:04:32',
                'updated_at' => '2023-09-14 19:04:32',
            ),
            29 =>
            array (
                'id' => 35,
                'name' => 'Batariya',
                'code' => '850680',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-14 19:05:18',
                'updated_at' => '2023-09-14 19:05:34',
            ),
            30 =>
            array (
                'id' => 36,
                'name' => 'Velosped',
                'code' => '871200',
                'position' => 1,
                'category_id' => 7,
                'created_at' => '2023-09-14 19:06:15',
                'updated_at' => '2023-09-14 19:06:15',
            ),
            31 =>
            array (
                'id' => 38,
                'name' => 'Lopatka',
                'code' => '820110',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-14 19:09:09',
                'updated_at' => '2023-09-14 19:09:09',
            ),
            32 =>
            array (
                'id' => 39,
                'name' => 'Arra',
                'code' => '820210',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-14 19:09:31',
                'updated_at' => '2023-09-14 19:09:31',
            ),
            33 =>
            array (
                'id' => 37,
                'name' => 'Kolyaska',
                'code' => '871500',
                'position' => 1,
                'category_id' => 7,
                'created_at' => '2023-09-14 19:08:07',
                'updated_at' => '2023-09-14 19:10:14',
            ),
            34 =>
            array (
                'id' => 40,
                'name' => 'Kreslo',
                'code' => '940191',
                'position' => 1,
                'category_id' => 9,
                'created_at' => '2023-09-14 19:11:00',
                'updated_at' => '2023-09-14 19:11:00',
            ),
            35 =>
            array (
                'id' => 41,
                'name' => 'Kuylak jenskiy',
                'code' => '620690',
                'position' => 1,
                'category_id' => 1,
                'created_at' => '2023-09-14 19:11:26',
                'updated_at' => '2023-09-14 19:11:26',
            ),
            36 =>
            array (
                'id' => 42,
                'name' => 'Gitara',
                'code' => '920290',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-14 19:11:46',
                'updated_at' => '2023-09-14 19:11:46',
            ),
            37 =>
            array (
                'id' => 43,
                'name' => 'Getara',
                'code' => '920290',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-14 19:11:58',
                'updated_at' => '2023-09-14 19:11:58',
            ),
            38 =>
            array (
                'id' => 44,
                'name' => 'Tikuv moshina',
                'code' => '845210',
                'position' => 1,
                'category_id' => 2,
                'created_at' => '2023-09-14 19:12:35',
                'updated_at' => '2023-09-14 19:12:35',
            ),
            39 =>
            array (
                'id' => 45,
                'name' => 'Balon',
                'code' => '401110',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-14 19:13:13',
                'updated_at' => '2023-09-14 19:13:13',
            ),
            40 =>
            array (
                'id' => 46,
                'name' => 'Shina',
                'code' => '401110',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-14 19:13:26',
                'updated_at' => '2023-09-14 19:13:26',
            ),
            41 =>
            array (
                'id' => 47,
                'name' => 'Fen',
                'code' => '851631',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-14 19:14:05',
                'updated_at' => '2023-09-14 19:14:05',
            ),
            42 =>
            array (
                'id' => 49,
                'name' => 'Rezitka',
                'code' => '853669',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-14 19:15:09',
                'updated_at' => '2023-09-14 19:15:09',
            ),
            43 =>
            array (
                'id' => 50,
                'name' => 'Kalyaska',
                'code' => '871500',
                'position' => 1,
                'category_id' => 7,
                'created_at' => '2023-09-14 19:18:19',
                'updated_at' => '2023-09-14 19:18:19',
            ),
            44 =>
            array (
                'id' => 51,
                'name' => 'Kalonka',
                'code' => '851822',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-15 05:34:58',
                'updated_at' => '2023-09-15 05:34:58',
            ),
            45 =>
            array (
                'id' => 53,
                'name' => 'Moloko',
                'code' => '040120',
                'position' => 1,
                'category_id' => 5,
                'created_at' => '2023-09-15 05:36:27',
                'updated_at' => '2023-09-15 05:36:27',
            ),
            46 =>
            array (
                'id' => 54,
                'name' => 'Sut',
                'code' => '040120',
                'position' => 1,
                'category_id' => 5,
                'created_at' => '2023-09-15 05:36:39',
                'updated_at' => '2023-09-15 05:36:39',
            ),
            47 =>
            array (
                'id' => 55,
                'name' => 'Asal',
                'code' => '040900',
                'position' => 1,
                'category_id' => 5,
                'created_at' => '2023-09-15 05:36:54',
                'updated_at' => '2023-09-15 05:36:54',
            ),
            48 =>
            array (
                'id' => 56,
                'name' => 'Un',
                'code' => '110100',
                'position' => 1,
                'category_id' => 5,
                'created_at' => '2023-09-15 05:37:30',
                'updated_at' => '2023-09-15 05:37:30',
            ),
            49 =>
            array (
                'id' => 57,
                'name' => 'Muka',
                'code' => '110100',
                'position' => 1,
                'category_id' => 5,
                'created_at' => '2023-09-15 05:37:46',
                'updated_at' => '2023-09-15 05:37:46',
            ),
            50 =>
            array (
                'id' => 58,
                'name' => 'Konfet',
                'code' => '170490',
                'position' => 1,
                'category_id' => 5,
                'created_at' => '2023-09-15 05:38:11',
                'updated_at' => '2023-09-15 05:38:11',
            ),
            51 =>
            array (
                'id' => 59,
                'name' => 'Vino',
                'code' => '220430',
                'position' => 1,
                'category_id' => 5,
                'created_at' => '2023-09-15 05:39:03',
                'updated_at' => '2023-09-15 05:39:03',
            ),
            52 =>
            array (
                'id' => 60,
                'name' => 'Viski',
                'code' => '220830',
                'position' => 1,
                'category_id' => 5,
                'created_at' => '2023-09-15 05:39:23',
                'updated_at' => '2023-09-15 05:39:23',
            ),
            53 =>
            array (
                'id' => 61,
                'name' => 'Vodka',
                'code' => '220860',
                'position' => 1,
                'category_id' => 5,
                'created_at' => '2023-09-15 05:39:39',
                'updated_at' => '2023-09-15 05:39:39',
            ),
            54 =>
            array (
                'id' => 62,
                'name' => 'Aroq',
                'code' => '220860',
                'position' => 1,
                'category_id' => 5,
                'created_at' => '2023-09-15 05:39:54',
                'updated_at' => '2023-09-15 05:39:54',
            ),
            55 =>
            array (
                'id' => 63,
                'name' => 'Sigaret',
                'code' => '240220',
                'position' => 1,
                'category_id' => 5,
                'created_at' => '2023-09-15 05:40:18',
                'updated_at' => '2023-09-15 05:40:18',
            ),
            56 =>
            array (
                'id' => 64,
                'name' => 'Elektr segaret',
                'code' => '240412',
                'position' => 1,
                'category_id' => 5,
                'created_at' => '2023-09-15 05:41:02',
                'updated_at' => '2023-09-15 05:41:02',
            ),
            57 =>
            array (
                'id' => 65,
                'name' => 'Kraska',
                'code' => '320810',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-15 05:41:42',
                'updated_at' => '2023-09-15 05:41:42',
            ),
            58 =>
            array (
                'id' => 66,
                'name' => 'Kiraska',
                'code' => '320810',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-15 05:41:57',
                'updated_at' => '2023-09-15 05:41:57',
            ),
            59 =>
            array (
                'id' => 67,
                'name' => 'Pena, Kley germetika',
                'code' => '321410',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-15 05:42:32',
                'updated_at' => '2023-09-15 05:42:32',
            ),
            60 =>
            array (
                'id' => 69,
                'name' => 'Zubnaya pasta',
                'code' => '330610',
                'position' => 3,
                'category_id' => 10,
                'created_at' => '2023-09-15 05:43:10',
                'updated_at' => '2023-09-15 05:43:10',
            ),
            61 =>
            array (
                'id' => 68,
                'name' => 'Tish pasta',
                'code' => '330610',
                'position' => 3,
                'category_id' => 10,
                'created_at' => '2023-09-15 05:42:56',
                'updated_at' => '2023-09-15 05:43:21',
            ),
            62 =>
            array (
                'id' => 70,
                'name' => 'Jidkoe milo',
                'code' => '340130',
                'position' => 2,
                'category_id' => 10,
                'created_at' => '2023-09-15 05:43:49',
                'updated_at' => '2023-09-15 05:43:49',
            ),
            63 =>
            array (
                'id' => 71,
                'name' => 'Kley',
                'code' => '350610',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-15 05:44:07',
                'updated_at' => '2023-09-15 05:44:07',
            ),
            64 =>
            array (
                'id' => 72,
                'name' => 'Rakvina',
                'code' => '392210',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-15 05:44:34',
                'updated_at' => '2023-09-15 05:44:34',
            ),
            65 =>
            array (
                'id' => 73,
                'name' => 'Mikser',
                'code' => '850940',
                'position' => 1,
                'category_id' => 2,
                'created_at' => '2023-09-15 06:04:01',
                'updated_at' => '2023-09-15 06:04:01',
            ),
            66 =>
            array (
                'id' => 74,
                'name' => 'Topar',
                'code' => '820140',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-15 06:07:55',
                'updated_at' => '2023-09-15 06:07:55',
            ),
            67 =>
            array (
                'id' => 75,
                'name' => 'Svarka apparat',
                'code' => '851521',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-15 06:10:16',
                'updated_at' => '2023-09-15 06:10:16',
            ),
            68 =>
            array (
                'id' => 80,
                'name' => 'Perforator',
                'code' => '901710',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-15 06:24:44',
                'updated_at' => '2023-09-15 06:24:44',
            ),
            69 =>
            array (
                'id' => 81,
                'name' => 'Mikrovolnovka',
                'code' => '851650',
                'position' => 1,
                'category_id' => 2,
                'created_at' => '2023-09-15 06:29:12',
                'updated_at' => '2023-09-15 06:29:12',
            ),
            70 =>
            array (
                'id' => 83,
                'name' => 'Matras',
                'code' => '940421',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-15 06:31:52',
                'updated_at' => '2023-09-15 06:31:52',
            ),
            71 =>
            array (
                'id' => 84,
                'name' => 'Material',
                'code' => '521111',
                'position' => 1,
                'category_id' => 1,
                'created_at' => '2023-09-15 06:35:33',
                'updated_at' => '2023-09-15 06:35:33',
            ),
            72 =>
            array (
                'id' => 85,
                'name' => 'Shurpavyor',
                'code' => '521111',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-15 06:38:00',
                'updated_at' => '2023-09-15 06:38:00',
            ),
            73 =>
            array (
                'id' => 86,
                'name' => 'Shlang',
                'code' => '400911',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-15 06:38:57',
                'updated_at' => '2023-09-15 06:38:57',
            ),
            74 =>
            array (
                'id' => 87,
                'name' => 'Shilang',
                'code' => '400911',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-15 06:39:10',
                'updated_at' => '2023-09-15 06:39:10',
            ),
            75 =>
            array (
                'id' => 88,
                'name' => 'Plitka rez',
                'code' => '901710',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-15 06:40:06',
                'updated_at' => '2023-09-15 06:40:06',
            ),
            76 =>
            array (
                'id' => 90,
                'name' => 'Podayalnik',
                'code' => '630210',
                'position' => 1,
                'category_id' => 1,
                'created_at' => '2023-09-15 06:42:02',
                'updated_at' => '2023-09-15 06:42:02',
            ),
            77 =>
            array (
                'id' => 91,
                'name' => 'Padayalnik',
                'code' => '630210',
                'position' => 1,
                'category_id' => 1,
                'created_at' => '2023-09-15 06:42:13',
                'updated_at' => '2023-09-15 06:42:13',
            ),
            78 =>
            array (
                'id' => 93,
                'name' => 'Plesos',
                'code' => '850819',
                'position' => 1,
                'category_id' => 2,
                'created_at' => '2023-09-15 10:00:23',
                'updated_at' => '2023-09-15 10:00:23',
            ),
            79 =>
            array (
                'id' => 94,
                'name' => 'Elektr pech',
                'code' => '732181',
                'position' => 1,
                'category_id' => 2,
                'created_at' => '2023-09-15 10:02:00',
                'updated_at' => '2023-09-15 10:02:00',
            ),
            80 =>
            array (
                'id' => 95,
                'name' => 'Sumka',
                'code' => '420212',
                'position' => 1,
                'category_id' => 1,
                'created_at' => '2023-09-15 10:06:51',
                'updated_at' => '2023-09-15 10:06:51',
            ),
            81 =>
            array (
                'id' => 96,
                'name' => 'Telefon',
                'code' => '851713',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-15 10:12:57',
                'updated_at' => '2023-09-15 10:12:57',
            ),
            82 =>
            array (
                'id' => 23,
                'name' => 'Qozon',
                'code' => '732391',
                'position' => 4,
                'category_id' => 2,
                'created_at' => '2023-09-14 18:57:07',
                'updated_at' => '2023-09-14 18:57:07',
            ),
            83 =>
            array (
                'id' => 79,
                'name' => 'Shpatel',
                'code' => '820551',
                'position' => 4,
                'category_id' => 4,
                'created_at' => '2023-09-15 06:13:26',
                'updated_at' => '2023-09-15 06:13:26',
            ),
            84 =>
            array (
                'id' => 22,
                'name' => 'Igrushka detskiy',
                'code' => '950300',
                'position' => 24,
                'category_id' => 11,
                'created_at' => '2023-09-14 18:55:59',
                'updated_at' => '2023-09-14 18:55:59',
            ),
            85 =>
            array (
                'id' => 28,
                'name' => 'Daftar',
                'code' => '392610',
                'position' => 2,
                'category_id' => 8,
                'created_at' => '2023-09-14 19:00:30',
                'updated_at' => '2023-09-14 19:00:30',
            ),
            86 =>
            array (
                'id' => 6,
                'name' => 'Krasovka mujskiy',
                'code' => '640399',
                'position' => 10,
                'category_id' => 3,
                'created_at' => '2023-09-14 18:49:05',
                'updated_at' => '2023-09-14 18:49:05',
            ),
            87 =>
            array (
                'id' => 2,
                'name' => 'Buryuk mujskiy',
                'code' => '610341',
                'position' => 1,
                'category_id' => 1,
                'created_at' => '2023-09-04 13:42:31',
                'updated_at' => '2023-09-14 18:46:30',
            ),
            88 =>
            array (
                'id' => 33,
                'name' => 'Parashok',
                'code' => '340250',
                'position' => 8,
                'category_id' => 10,
                'created_at' => '2023-09-14 19:03:52',
                'updated_at' => '2023-09-14 19:03:52',
            ),
            89 =>
            array (
                'id' => 1,
                'name' => 'Buryuk jenskiy',
                'code' => '620462',
                'position' => 1,
                'category_id' => 1,
                'created_at' => '2023-07-05 00:00:00',
                'updated_at' => '2023-09-14 18:46:58',
            ),
            90 =>
            array (
                'id' => 52,
                'name' => 'Manti qozon',
                'code' => '732392',
                'position' => 2,
                'category_id' => 9,
                'created_at' => '2023-09-15 05:35:34',
                'updated_at' => '2023-09-15 05:35:34',
            ),
            91 =>
            array (
                'id' => 7,
                'name' => 'Krasovka jenskiy',
                'code' => '640399',
                'position' => 4,
                'category_id' => 3,
                'created_at' => '2023-09-14 18:49:18',
                'updated_at' => '2023-09-14 18:49:18',
            ),
            92 =>
            array (
                'id' => 82,
                'name' => 'Tarelka',
                'code' => '691200',
                'position' => 5,
                'category_id' => 9,
                'created_at' => '2023-09-15 06:31:03',
                'updated_at' => '2023-09-15 06:31:03',
            ),
            93 =>
            array (
                'id' => 20,
                'name' => 'Etik mujskiy',
                'code' => '640399',
                'position' => 12,
                'category_id' => 3,
                'created_at' => '2023-09-14 18:55:08',
                'updated_at' => '2023-09-19 11:18:23',
            ),
            94 =>
            array (
                'id' => 98,
                'name' => 'Zaryadchik telefon',
                'code' => '850440',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-15 10:13:48',
                'updated_at' => '2023-09-15 10:13:48',
            ),
            95 =>
            array (
                'id' => 99,
                'name' => 'Magnitofon',
                'code' => '851981',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-15 10:17:10',
                'updated_at' => '2023-09-15 10:17:10',
            ),
            96 =>
            array (
                'id' => 100,
                'name' => 'Voda nagrevatel',
                'code' => '851610',
                'position' => 1,
                'category_id' => 2,
                'created_at' => '2023-09-15 10:17:55',
                'updated_at' => '2023-09-15 10:17:55',
            ),
            97 =>
            array (
                'id' => 101,
                'name' => 'Avtomobil fara',
                'code' => '851220',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-15 10:19:22',
                'updated_at' => '2023-09-15 10:19:22',
            ),
            98 =>
            array (
                'id' => 102,
                'name' => 'Avtomobil zapchast',
                'code' => '870810',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-15 10:19:59',
                'updated_at' => '2023-09-15 10:19:59',
            ),
            99 =>
            array (
                'id' => 103,
                'name' => 'Avto detskiy kreslo',
                'code' => '950300',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-15 10:20:40',
                'updated_at' => '2023-09-15 10:20:40',
            ),
            100 =>
            array (
                'id' => 105,
                'name' => 'Turba',
                'code' => '730630',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-15 10:29:04',
                'updated_at' => '2023-09-15 10:29:04',
            ),
            101 =>
            array (
                'id' => 106,
                'name' => 'Suv nasos',
                'code' => '841350',
                'position' => 1,
                'category_id' => 2,
                'created_at' => '2023-09-15 10:29:46',
                'updated_at' => '2023-09-15 10:29:46',
            ),
            102 =>
            array (
                'id' => 107,
                'name' => 'Protsessor',
                'code' => '847150',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-15 10:30:36',
                'updated_at' => '2023-09-15 10:30:36',
            ),
            103 =>
            array (
                'id' => 108,
                'name' => 'DVD',
                'code' => '852190',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-15 10:30:55',
                'updated_at' => '2023-09-15 10:30:55',
            ),
            104 =>
            array (
                'id' => 109,
                'name' => 'Projector',
                'code' => '852862',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-15 10:31:27',
                'updated_at' => '2023-09-15 10:31:27',
            ),
            105 =>
            array (
                'id' => 110,
                'name' => 'Dril',
                'code' => '846721',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-15 10:32:58',
                'updated_at' => '2023-09-15 10:32:58',
            ),
            106 =>
            array (
                'id' => 111,
                'name' => 'Diril',
                'code' => '846721',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-15 10:33:08',
                'updated_at' => '2023-09-15 10:33:08',
            ),
            107 =>
            array (
                'id' => 112,
                'name' => 'Klaviatura',
                'code' => '847160',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-15 10:34:05',
                'updated_at' => '2023-09-15 10:34:05',
            ),
            108 =>
            array (
                'id' => 113,
                'name' => 'Telivizor',
                'code' => '852872',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-15 10:43:15',
                'updated_at' => '2023-09-15 10:43:15',
            ),
            109 =>
            array (
                'id' => 114,
                'name' => 'Blendr',
                'code' => '850940',
                'position' => 1,
                'category_id' => 2,
                'created_at' => '2023-09-15 10:43:47',
                'updated_at' => '2023-09-15 10:43:47',
            ),
            110 =>
            array (
                'id' => 115,
                'name' => 'Bilinder',
                'code' => '850940',
                'position' => 1,
                'category_id' => 2,
                'created_at' => '2023-09-15 10:43:58',
                'updated_at' => '2023-09-15 10:43:58',
            ),
            111 =>
            array (
                'id' => 116,
                'name' => 'Zontik',
                'code' => '660199',
                'position' => 1,
                'category_id' => 10,
                'created_at' => '2023-09-15 10:44:39',
                'updated_at' => '2023-09-15 10:44:39',
            ),
            112 =>
            array (
                'id' => 117,
                'name' => 'Gorshok',
                'code' => '392490',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-15 10:48:02',
                'updated_at' => '2023-09-15 10:48:02',
            ),
            113 =>
            array (
                'id' => 119,
                'name' => 'Choy',
                'code' => '090220',
                'position' => 1,
                'category_id' => 5,
                'created_at' => '2023-09-15 10:50:48',
                'updated_at' => '2023-09-15 10:50:48',
            ),
            114 =>
            array (
                'id' => 121,
                'name' => 'Bolgarka',
                'code' => '901710',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-15 10:54:22',
                'updated_at' => '2023-09-15 10:54:22',
            ),
            115 =>
            array (
                'id' => 122,
                'name' => 'Balgarka',
                'code' => '901710',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-15 10:54:38',
                'updated_at' => '2023-09-15 10:54:38',
            ),
            116 =>
            array (
                'id' => 123,
                'name' => 'Soat',
                'code' => '910211',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-15 10:57:56',
                'updated_at' => '2023-09-15 10:57:56',
            ),
            117 =>
            array (
                'id' => 125,
                'name' => 'Tabaka kalyana',
                'code' => '240311',
                'position' => 1,
                'category_id' => 5,
                'created_at' => '2023-09-15 11:00:55',
                'updated_at' => '2023-09-15 11:00:55',
            ),
            118 =>
            array (
                'id' => 126,
                'name' => 'Molotok',
                'code' => '820520',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-15 11:03:58',
                'updated_at' => '2023-09-15 11:03:58',
            ),
            119 =>
            array (
                'id' => 127,
                'name' => 'Malatok',
                'code' => '820520',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-15 11:04:08',
                'updated_at' => '2023-09-15 11:04:08',
            ),
            120 =>
            array (
                'id' => 128,
                'name' => 'Wi-fi',
                'code' => '851762',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-15 11:09:19',
                'updated_at' => '2023-09-15 11:09:19',
            ),
            121 =>
            array (
                'id' => 129,
                'name' => 'Rezetka, Vilka',
                'code' => '853669',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-15 11:12:50',
                'updated_at' => '2023-09-15 11:12:50',
            ),
            122 =>
            array (
                'id' => 130,
                'name' => 'Antiradar',
                'code' => '851230',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-15 11:15:03',
                'updated_at' => '2023-09-15 11:15:03',
            ),
            123 =>
            array (
                'id' => 131,
                'name' => 'Tefal',
                'code' => '851671',
                'position' => 1,
                'category_id' => 2,
                'created_at' => '2023-09-15 11:19:29',
                'updated_at' => '2023-09-15 11:19:29',
            ),
            124 =>
            array (
                'id' => 132,
                'name' => 'Termos',
                'code' => '961700',
                'position' => 1,
                'category_id' => 9,
                'created_at' => '2023-09-15 11:26:33',
                'updated_at' => '2023-09-15 11:26:33',
            ),
            125 =>
            array (
                'id' => 133,
                'name' => 'Santexnik Utyuk',
                'code' => '851640',
                'position' => 1,
                'category_id' => 2,
                'created_at' => '2023-09-15 11:29:28',
                'updated_at' => '2023-09-15 11:29:28',
            ),
            126 =>
            array (
                'id' => 135,
                'name' => 'Noj nabor',
                'code' => '820830',
                'position' => 1,
                'category_id' => 2,
                'created_at' => '2023-09-15 11:32:06',
                'updated_at' => '2023-09-15 11:32:06',
            ),
            127 =>
            array (
                'id' => 136,
                'name' => 'Nojnitsa',
                'code' => '820330',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-15 11:32:33',
                'updated_at' => '2023-09-15 11:32:33',
            ),
            128 =>
            array (
                'id' => 137,
                'name' => 'Qaychi',
                'code' => '820330',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-15 11:35:26',
                'updated_at' => '2023-09-15 11:35:26',
            ),
            129 =>
            array (
                'id' => 138,
                'name' => 'Pichoq kuxni',
                'code' => '820830',
                'position' => 1,
                'category_id' => 9,
                'created_at' => '2023-09-15 11:37:33',
                'updated_at' => '2023-09-15 11:37:33',
            ),
            130 =>
            array (
                'id' => 140,
                'name' => 'Stiralka',
                'code' => '845011',
                'position' => 1,
                'category_id' => 2,
                'created_at' => '2023-09-15 12:05:22',
                'updated_at' => '2023-09-15 12:05:22',
            ),
            131 =>
            array (
                'id' => 141,
                'name' => 'Kir moshina',
                'code' => '845011',
                'position' => 1,
                'category_id' => 2,
                'created_at' => '2023-09-15 12:05:33',
                'updated_at' => '2023-09-15 12:05:33',
            ),
            132 =>
            array (
                'id' => 144,
                'name' => 'Pult',
                'code' => '950450',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-15 12:13:12',
                'updated_at' => '2023-09-15 12:13:12',
            ),
            133 =>
            array (
                'id' => 145,
                'name' => 'Avto zapchast',
                'code' => '870810',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-15 12:14:05',
                'updated_at' => '2023-09-15 12:14:05',
            ),
            134 =>
            array (
                'id' => 146,
                'name' => 'Pampers',
                'code' => '961900',
                'position' => 1,
                'category_id' => 10,
                'created_at' => '2023-09-15 12:18:07',
                'updated_at' => '2023-09-15 12:18:07',
            ),
            135 =>
            array (
                'id' => 148,
                'name' => 'Polotinsa',
                'code' => '481810',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-15 12:20:07',
                'updated_at' => '2023-09-15 12:20:07',
            ),
            136 =>
            array (
                'id' => 150,
                'name' => 'Fonar',
                'code' => '851310',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-15 12:31:41',
                'updated_at' => '2023-09-15 12:31:41',
            ),
            137 =>
            array (
                'id' => 151,
                'name' => 'Fanar',
                'code' => '851310',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-15 12:31:53',
                'updated_at' => '2023-09-15 12:31:53',
            ),
            138 =>
            array (
                'id' => 152,
                'name' => 'Naushnik',
                'code' => '851830',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-15 12:32:33',
                'updated_at' => '2023-09-15 12:32:33',
            ),
            139 =>
            array (
                'id' => 154,
                'name' => 'Instrument zapchastlar',
                'code' => '820600',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-15 12:37:42',
                'updated_at' => '2023-09-15 12:37:42',
            ),
            140 =>
            array (
                'id' => 155,
                'name' => 'Elektr samokat',
                'code' => '871190',
                'position' => 1,
                'category_id' => 7,
                'created_at' => '2023-09-15 12:41:25',
                'updated_at' => '2023-09-15 12:41:25',
            ),
            141 =>
            array (
                'id' => 156,
                'name' => 'Samokat',
                'code' => '950300',
                'position' => 1,
                'category_id' => 7,
                'created_at' => '2023-09-15 12:41:45',
                'updated_at' => '2023-09-15 12:41:45',
            ),
            142 =>
            array (
                'id' => 158,
                'name' => 'Umivalnik',
                'code' => '691010',
                'position' => 1,
                'category_id' => 2,
                'created_at' => '2023-09-15 13:12:10',
                'updated_at' => '2023-09-15 13:12:10',
            ),
            143 =>
            array (
                'id' => 159,
                'name' => 'Jelezni list',
                'code' => '251710',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-15 13:15:08',
                'updated_at' => '2023-09-15 13:15:08',
            ),
            144 =>
            array (
                'id' => 160,
                'name' => 'Vanna',
                'code' => '392210',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-15 13:23:21',
                'updated_at' => '2023-09-15 13:23:21',
            ),
            145 =>
            array (
                'id' => 161,
                'name' => 'Britva',
                'code' => '330710',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-15 13:24:41',
                'updated_at' => '2023-09-15 13:24:41',
            ),
            146 =>
            array (
                'id' => 163,
                'name' => 'Kitob',
                'code' => '490110',
                'position' => 1,
                'category_id' => 8,
                'created_at' => '2023-09-15 13:33:37',
                'updated_at' => '2023-09-15 13:33:37',
            ),
            147 =>
            array (
                'id' => 164,
                'name' => 'Skotch',
                'code' => '391910',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-15 15:14:32',
                'updated_at' => '2023-09-15 15:14:32',
            ),
            148 =>
            array (
                'id' => 165,
                'name' => 'Stellaj',
                'code' => '940320',
                'position' => 1,
                'category_id' => 9,
                'created_at' => '2023-09-15 15:15:37',
                'updated_at' => '2023-09-15 15:15:37',
            ),
            149 =>
            array (
                'id' => 167,
                'name' => 'Bolta',
                'code' => '820140',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-15 15:19:49',
                'updated_at' => '2023-09-15 15:19:49',
            ),
            150 =>
            array (
                'id' => 168,
                'name' => 'Klyuch',
                'code' => '820411',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-15 15:20:45',
                'updated_at' => '2023-09-15 15:20:45',
            ),
            151 =>
            array (
                'id' => 169,
                'name' => 'Kabel',
                'code' => '854430',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-15 15:24:50',
                'updated_at' => '2023-09-15 15:24:50',
            ),
            152 =>
            array (
                'id' => 170,
                'name' => 'Udilnetil',
                'code' => '854430',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-15 15:25:03',
                'updated_at' => '2023-09-15 15:25:03',
            ),
            153 =>
            array (
                'id' => 171,
                'name' => 'Stol',
                'code' => '940310',
                'position' => 1,
                'category_id' => 9,
                'created_at' => '2023-09-15 15:34:49',
                'updated_at' => '2023-09-15 15:34:49',
            ),
            154 =>
            array (
                'id' => 173,
                'name' => 'Lampa',
                'code' => '940521',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-15 15:37:18',
                'updated_at' => '2023-09-15 15:37:18',
            ),
            155 =>
            array (
                'id' => 175,
                'name' => 'Payalnik',
                'code' => '851511',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-15 15:44:30',
                'updated_at' => '2023-09-15 15:44:30',
            ),
            156 =>
            array (
                'id' => 176,
                'name' => 'Kastrulka',
                'code' => '732392',
                'position' => 1,
                'category_id' => 9,
                'created_at' => '2023-09-15 15:48:59',
                'updated_at' => '2023-09-15 15:48:59',
            ),
            157 =>
            array (
                'id' => 178,
                'name' => 'Masaj aparati',
                'code' => '950691',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-15 15:55:59',
                'updated_at' => '2023-09-15 15:55:59',
            ),
            158 =>
            array (
                'id' => 179,
                'name' => 'Lazer uroven',
                'code' => '903180',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-15 16:00:43',
                'updated_at' => '2023-09-15 16:00:43',
            ),
            159 =>
            array (
                'id' => 180,
                'name' => 'Multivarka',
                'code' => '851679',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-15 16:02:44',
                'updated_at' => '2023-09-15 16:02:44',
            ),
            160 =>
            array (
                'id' => 183,
                'name' => 'Metr',
                'code' => '901790',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-15 16:15:53',
                'updated_at' => '2023-09-15 16:15:53',
            ),
            161 =>
            array (
                'id' => 184,
                'name' => 'Ruletka',
                'code' => '901790',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-15 16:16:06',
                'updated_at' => '2023-09-15 16:16:06',
            ),
            162 =>
            array (
                'id' => 185,
                'name' => 'Polka',
                'code' => '940320',
                'position' => 1,
                'category_id' => 9,
                'created_at' => '2023-09-15 16:25:05',
                'updated_at' => '2023-09-15 16:25:05',
            ),
            163 =>
            array (
                'id' => 186,
                'name' => 'Trinojka',
                'code' => '940320',
                'position' => 1,
                'category_id' => 9,
                'created_at' => '2023-09-15 16:25:20',
                'updated_at' => '2023-09-15 16:25:20',
            ),
            164 =>
            array (
                'id' => 187,
                'name' => 'Taxta',
                'code' => '940391',
                'position' => 1,
                'category_id' => 9,
                'created_at' => '2023-09-15 16:27:16',
                'updated_at' => '2023-09-15 16:27:16',
            ),
            165 =>
            array (
                'id' => 188,
                'name' => 'Eshik ramka',
                'code' => '392520',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-15 17:12:05',
                'updated_at' => '2023-09-15 17:12:05',
            ),
            166 =>
            array (
                'id' => 189,
                'name' => 'Deraza ramka',
                'code' => '392520',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-15 17:12:28',
                'updated_at' => '2023-09-15 17:12:28',
            ),
            167 =>
            array (
                'id' => 190,
                'name' => 'Tachka rama',
                'code' => '871631',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-15 17:25:01',
                'updated_at' => '2023-09-15 17:25:01',
            ),
            168 =>
            array (
                'id' => 191,
                'name' => 'Arava',
                'code' => '871631',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-15 17:25:12',
                'updated_at' => '2023-09-15 17:25:12',
            ),
            169 =>
            array (
                'id' => 97,
                'name' => 'Aksessuar telefon',
                'code' => '420211',
                'position' => 3,
                'category_id' => 4,
                'created_at' => '2023-09-15 10:13:17',
                'updated_at' => '2023-09-15 10:13:17',
            ),
            170 =>
            array (
                'id' => 104,
                'name' => 'Akvarium zapchast',
                'code' => '392490',
                'position' => 18,
                'category_id' => 6,
                'created_at' => '2023-09-15 10:22:28',
                'updated_at' => '2023-09-15 10:22:28',
            ),
            171 =>
            array (
                'id' => 118,
                'name' => 'Sapog detskiy',
                'code' => '640399',
                'position' => 17,
                'category_id' => 3,
                'created_at' => '2023-09-15 10:49:07',
                'updated_at' => '2023-09-15 10:49:07',
            ),
            172 =>
            array (
                'id' => 147,
                'name' => 'Pasuda detskiy',
                'code' => '392490',
                'position' => 31,
                'category_id' => 9,
                'created_at' => '2023-09-15 12:18:46',
                'updated_at' => '2023-09-15 12:18:46',
            ),
            173 =>
            array (
                'id' => 134,
                'name' => 'Krovat',
                'code' => '940360',
                'position' => 5,
                'category_id' => 6,
                'created_at' => '2023-09-15 11:31:23',
                'updated_at' => '2023-09-15 11:31:23',
            ),
            174 =>
            array (
                'id' => 149,
                'name' => 'Sokvijimalka',
                'code' => '392490',
                'position' => 23,
                'category_id' => 2,
                'created_at' => '2023-09-15 12:22:00',
                'updated_at' => '2023-09-15 12:22:00',
            ),
            175 =>
            array (
                'id' => 153,
                'name' => 'Unitaz',
                'code' => '691010',
                'position' => 3,
                'category_id' => 4,
                'created_at' => '2023-09-15 12:35:07',
                'updated_at' => '2023-09-15 12:35:07',
            ),
            176 =>
            array (
                'id' => 162,
                'name' => 'Parashok',
                'code' => '340250',
                'position' => 8,
                'category_id' => 10,
                'created_at' => '2023-09-15 13:28:44',
                'updated_at' => '2023-09-15 13:28:44',
            ),
            177 =>
            array (
                'id' => 157,
                'name' => 'Xadinok',
                'code' => '950300',
                'position' => 16,
                'category_id' => 7,
                'created_at' => '2023-09-15 12:46:10',
                'updated_at' => '2023-09-15 12:46:10',
            ),
            178 =>
            array (
                'id' => 181,
                'name' => 'Xadinok',
                'code' => '950300',
                'position' => 16,
                'category_id' => 4,
                'created_at' => '2023-09-15 16:06:23',
                'updated_at' => '2023-09-15 16:06:23',
            ),
            179 =>
            array (
                'id' => 182,
                'name' => 'Misrovka',
                'code' => '850940',
                'position' => 4,
                'category_id' => 9,
                'created_at' => '2023-09-15 16:08:05',
                'updated_at' => '2023-09-15 16:08:05',
            ),
            180 =>
            array (
                'id' => 166,
                'name' => 'Sushilka',
                'code' => '732399',
                'position' => 3,
                'category_id' => 2,
                'created_at' => '2023-09-15 15:18:45',
                'updated_at' => '2023-09-15 15:18:45',
            ),
            181 =>
            array (
                'id' => 172,
                'name' => 'Svetadiodli lampa',
                'code' => '853951',
                'position' => 2,
                'category_id' => 6,
                'created_at' => '2023-09-15 15:36:53',
                'updated_at' => '2023-09-15 15:36:53',
            ),
            182 =>
            array (
                'id' => 174,
                'name' => 'Veshilka',
                'code' => '392490',
                'position' => 10,
                'category_id' => 4,
                'created_at' => '2023-09-15 15:41:38',
                'updated_at' => '2023-09-15 15:41:38',
            ),
            183 =>
            array (
                'id' => 177,
                'name' => 'Massaj aparati',
                'code' => '330112',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-15 15:55:45',
                'updated_at' => '2023-09-15 15:55:45',
            ),
            184 =>
            array (
                'id' => 124,
                'name' => 'Kofevarka',
                'code' => '851671',
                'position' => 3,
                'category_id' => 2,
                'created_at' => '2023-09-15 10:59:59',
                'updated_at' => '2023-09-15 10:59:59',
            ),
            185 =>
            array (
                'id' => 143,
                'name' => 'Kolesa',
                'code' => '871410',
                'position' => 2,
                'category_id' => 6,
                'created_at' => '2023-09-15 12:07:01',
                'updated_at' => '2023-09-15 12:07:01',
            ),
            186 =>
            array (
                'id' => 120,
                'name' => 'Choynak',
                'code' => '732391',
                'position' => 2,
                'category_id' => 9,
                'created_at' => '2023-09-15 10:51:08',
                'updated_at' => '2023-09-15 10:51:08',
            ),
            187 =>
            array (
                'id' => 142,
                'name' => 'Soch moshinka',
                'code' => '961590',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-15 12:05:58',
                'updated_at' => '2023-09-15 12:05:58',
            ),
            188 =>
            array (
                'id' => 192,
                'name' => 'Konyak',
                'code' => '220820',
                'position' => 1,
                'category_id' => 5,
                'created_at' => '2023-09-15 17:29:17',
                'updated_at' => '2023-09-15 17:29:17',
            ),
            189 =>
            array (
                'id' => 193,
                'name' => 'Kanyak',
                'code' => '220820',
                'position' => 1,
                'category_id' => 5,
                'created_at' => '2023-09-15 17:29:27',
                'updated_at' => '2023-09-15 17:29:27',
            ),
            190 =>
            array (
                'id' => 194,
                'name' => 'Sapog mujskiy',
                'code' => '640399',
                'position' => 1,
                'category_id' => 3,
                'created_at' => '2023-09-15 17:30:14',
                'updated_at' => '2023-09-15 17:30:14',
            ),
            191 =>
            array (
                'id' => 195,
                'name' => 'Sapog jenskiy',
                'code' => '640399',
                'position' => 1,
                'category_id' => 3,
                'created_at' => '2023-09-15 17:30:27',
                'updated_at' => '2023-09-15 17:30:27',
            ),
            192 =>
            array (
                'id' => 197,
                'name' => 'Tonometr',
                'code' => '901890',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-15 17:50:03',
                'updated_at' => '2023-09-15 17:50:03',
            ),
            193 =>
            array (
                'id' => 199,
                'name' => 'Dovleniya o\'lchagich',
                'code' => '901890',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-15 17:50:45',
                'updated_at' => '2023-09-15 17:50:45',
            ),
            194 =>
            array (
                'id' => 201,
                'name' => 'Boks kaska',
                'code' => '950699',
                'position' => 1,
                'category_id' => 1,
                'created_at' => '2023-09-15 17:52:17',
                'updated_at' => '2023-09-15 17:52:17',
            ),
            195 =>
            array (
                'id' => 202,
                'name' => 'Krem dilya ruka',
                'code' => '330499',
                'position' => 1,
                'category_id' => 10,
                'created_at' => '2023-09-15 17:55:17',
                'updated_at' => '2023-09-15 17:55:17',
            ),
            196 =>
            array (
                'id' => 203,
                'name' => 'Krem ot zagara',
                'code' => '330499',
                'position' => 1,
                'category_id' => 10,
                'created_at' => '2023-09-15 17:55:41',
                'updated_at' => '2023-09-15 17:55:41',
            ),
            197 =>
            array (
                'id' => 205,
                'name' => 'Rubashka mujskiy',
                'code' => '610510',
                'position' => 1,
                'category_id' => 1,
                'created_at' => '2023-09-15 18:03:39',
                'updated_at' => '2023-09-15 18:04:05',
            ),
            198 =>
            array (
                'id' => 206,
                'name' => 'Rubashka jenskiy',
                'code' => '620690',
                'position' => 1,
                'category_id' => 1,
                'created_at' => '2023-09-15 18:04:24',
                'updated_at' => '2023-09-15 18:04:24',
            ),
            199 =>
            array (
                'id' => 207,
                'name' => 'Truba',
                'code' => '730630',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-15 18:04:45',
                'updated_at' => '2023-09-15 18:04:45',
            ),
            200 =>
            array (
                'id' => 208,
                'name' => 'Turba',
                'code' => '730630',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-15 18:04:59',
                'updated_at' => '2023-09-15 18:04:59',
            ),
            201 =>
            array (
                'id' => 209,
                'name' => 'Osvejitel',
                'code' => '850980',
                'position' => 1,
                'category_id' => 10,
                'created_at' => '2023-09-15 18:05:43',
                'updated_at' => '2023-09-15 18:05:43',
            ),
            202 =>
            array (
                'id' => 211,
                'name' => 'Avto monitor',
                'code' => '852859',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-15 18:27:17',
                'updated_at' => '2023-09-15 18:27:17',
            ),
            203 =>
            array (
                'id' => 212,
                'name' => 'Pojarni shlang',
                'code' => '590900',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-15 18:28:18',
                'updated_at' => '2023-09-15 18:28:18',
            ),
            204 =>
            array (
                'id' => 213,
                'name' => 'Detskiy kasha',
                'code' => '190110',
                'position' => 1,
                'category_id' => 5,
                'created_at' => '2023-09-15 18:31:35',
                'updated_at' => '2023-09-15 18:31:35',
            ),
            205 =>
            array (
                'id' => 214,
                'name' => 'Noski mujskiy',
                'code' => '611594',
                'position' => 1,
                'category_id' => 1,
                'created_at' => '2023-09-15 18:32:32',
                'updated_at' => '2023-09-15 18:32:32',
            ),
            206 =>
            array (
                'id' => 215,
                'name' => 'Noski jenskiy',
                'code' => '611530',
                'position' => 1,
                'category_id' => 1,
                'created_at' => '2023-09-15 18:32:56',
                'updated_at' => '2023-09-15 18:32:56',
            ),
            207 =>
            array (
                'id' => 216,
                'name' => 'Chulki',
                'code' => '611530',
                'position' => 1,
                'category_id' => 1,
                'created_at' => '2023-09-15 18:33:11',
                'updated_at' => '2023-09-15 18:33:11',
            ),
            208 =>
            array (
                'id' => 217,
                'name' => 'Kalgotka',
                'code' => '611120',
                'position' => 1,
                'category_id' => 1,
                'created_at' => '2023-09-15 18:33:28',
                'updated_at' => '2023-09-15 18:33:28',
            ),
            209 =>
            array (
                'id' => 218,
                'name' => 'Lampochka',
                'code' => '853951',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-15 18:36:39',
                'updated_at' => '2023-09-15 18:36:39',
            ),
            210 =>
            array (
                'id' => 220,
                'name' => 'Bolgarka disk',
                'code' => '901710',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-15 18:44:55',
                'updated_at' => '2023-09-15 18:44:55',
            ),
            211 =>
            array (
                'id' => 221,
                'name' => 'Sharf',
                'code' => '611710',
                'position' => 1,
                'category_id' => 1,
                'created_at' => '2023-09-15 18:48:17',
                'updated_at' => '2023-09-15 18:48:17',
            ),
            212 =>
            array (
                'id' => 222,
                'name' => 'Elektr pila',
                'code' => '846722',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-15 18:50:08',
                'updated_at' => '2023-09-15 18:50:08',
            ),
            213 =>
            array (
                'id' => 223,
                'name' => 'Elektr pela',
                'code' => '846722',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-15 18:50:22',
                'updated_at' => '2023-09-15 18:50:22',
            ),
            214 =>
            array (
                'id' => 224,
                'name' => 'Pela',
                'code' => '820210',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-15 18:50:35',
                'updated_at' => '2023-09-15 18:50:35',
            ),
            215 =>
            array (
                'id' => 225,
                'name' => 'Pila',
                'code' => '820210',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-15 18:50:50',
                'updated_at' => '2023-09-15 18:50:50',
            ),
            216 =>
            array (
                'id' => 227,
                'name' => 'Sportivka',
                'code' => '611030',
                'position' => 1,
                'category_id' => 1,
                'created_at' => '2023-09-15 19:01:40',
                'updated_at' => '2023-09-15 19:01:40',
            ),
            217 =>
            array (
                'id' => 228,
                'name' => 'Magnitola',
                'code' => '852721',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-15 19:03:24',
                'updated_at' => '2023-09-15 19:03:24',
            ),
            218 =>
            array (
                'id' => 229,
                'name' => 'Postel',
                'code' => '630210',
                'position' => 1,
                'category_id' => 1,
                'created_at' => '2023-09-15 19:09:12',
                'updated_at' => '2023-09-15 19:09:12',
            ),
            219 =>
            array (
                'id' => 230,
                'name' => 'Padstavka',
                'code' => '940310',
                'position' => 1,
                'category_id' => 9,
                'created_at' => '2023-09-15 19:13:35',
                'updated_at' => '2023-09-15 19:13:35',
            ),
            220 =>
            array (
                'id' => 231,
                'name' => 'Smestetil',
                'code' => '848180',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-15 19:18:10',
                'updated_at' => '2023-09-15 19:18:10',
            ),
            221 =>
            array (
                'id' => 232,
                'name' => 'Gazovoy klyuch',
                'code' => '820411',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-15 19:18:45',
                'updated_at' => '2023-09-15 19:18:45',
            ),
            222 =>
            array (
                'id' => 233,
                'name' => 'Pokrishka velosped',
                'code' => '401110',
                'position' => 1,
                'category_id' => 7,
                'created_at' => '2023-09-15 19:21:57',
                'updated_at' => '2023-09-15 19:21:57',
            ),
            223 =>
            array (
                'id' => 234,
                'name' => 'Pechka',
                'code' => '732181',
                'position' => 1,
                'category_id' => 9,
                'created_at' => '2023-09-15 19:23:17',
                'updated_at' => '2023-09-15 19:23:17',
            ),
            224 =>
            array (
                'id' => 235,
                'name' => 'Bolt',
                'code' => '741533',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-15 19:42:18',
                'updated_at' => '2023-09-15 19:42:18',
            ),
            225 =>
            array (
                'id' => 236,
                'name' => 'Mix',
                'code' => '741510',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-15 19:43:49',
                'updated_at' => '2023-09-15 19:43:49',
            ),
            226 =>
            array (
                'id' => 237,
                'name' => 'Shurp',
                'code' => '741539',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-15 19:44:16',
                'updated_at' => '2023-09-15 19:44:16',
            ),
            227 =>
            array (
                'id' => 238,
                'name' => 'Tapochka',
                'code' => '640399',
                'position' => 1,
                'category_id' => 3,
                'created_at' => '2023-09-15 19:45:55',
                'updated_at' => '2023-09-15 19:45:55',
            ),
            228 =>
            array (
                'id' => 239,
                'name' => 'Futbolka mujskiy',
                'code' => '610910',
                'position' => 1,
                'category_id' => 1,
                'created_at' => '2023-09-15 19:49:52',
                'updated_at' => '2023-09-15 19:49:52',
            ),
            229 =>
            array (
                'id' => 240,
                'name' => 'Kafel rezka',
                'code' => '820150',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-15 20:03:46',
                'updated_at' => '2023-09-15 20:03:46',
            ),
            230 =>
            array (
                'id' => 241,
                'name' => 'Ventilyator',
                'code' => '841451',
                'position' => 1,
                'category_id' => 2,
                'created_at' => '2023-09-15 20:05:52',
                'updated_at' => '2023-09-15 20:05:52',
            ),
            231 =>
            array (
                'id' => 242,
                'name' => 'Cho\'mich',
                'code' => '821599',
                'position' => 1,
                'category_id' => 9,
                'created_at' => '2023-09-16 04:04:11',
                'updated_at' => '2023-09-16 04:04:11',
            ),
            232 =>
            array (
                'id' => 244,
                'name' => 'Kapkir',
                'code' => '821599',
                'position' => 1,
                'category_id' => 9,
                'created_at' => '2023-09-16 04:04:44',
                'updated_at' => '2023-09-16 04:04:44',
            ),
            233 =>
            array (
                'id' => 245,
                'name' => 'Ploskugubsi',
                'code' => '820320',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-16 04:20:53',
                'updated_at' => '2023-09-16 04:20:53',
            ),
            234 =>
            array (
                'id' => 246,
                'name' => 'Klyuchatel avtomatiskiy',
                'code' => '853620',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-16 04:21:56',
                'updated_at' => '2023-09-16 04:21:56',
            ),
            235 =>
            array (
                'id' => 247,
                'name' => 'Klyuchatel',
                'code' => '853620',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-16 04:22:11',
                'updated_at' => '2023-09-16 04:22:11',
            ),
            236 =>
            array (
                'id' => 249,
                'name' => 'Paket',
                'code' => '392049',
                'position' => 1,
                'category_id' => 9,
                'created_at' => '2023-09-16 04:24:58',
                'updated_at' => '2023-09-16 04:24:58',
            ),
            237 =>
            array (
                'id' => 251,
                'name' => 'Mujskiy tursiki',
                'code' => '621111',
                'position' => 1,
                'category_id' => 1,
                'created_at' => '2023-09-16 04:27:42',
                'updated_at' => '2023-09-16 04:27:42',
            ),
            238 =>
            array (
                'id' => 252,
                'name' => 'Stul',
                'code' => '940141',
                'position' => 1,
                'category_id' => 9,
                'created_at' => '2023-09-16 04:30:00',
                'updated_at' => '2023-09-16 04:30:00',
            ),
            239 =>
            array (
                'id' => 253,
                'name' => 'Koptok',
                'code' => '950662',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-16 04:37:03',
                'updated_at' => '2023-09-16 04:37:03',
            ),
            240 =>
            array (
                'id' => 257,
                'name' => 'Elektr nabor',
                'code' => '901710',
                'position' => 1,
                'category_id' => 4,
                'created_at' => '2023-09-16 05:07:26',
                'updated_at' => '2023-09-16 05:07:26',
            ),
            241 =>
            array (
                'id' => 258,
                'name' => 'Gaz pilta',
                'code' => '732111',
                'position' => 1,
                'category_id' => 2,
                'created_at' => '2023-09-17 10:20:15',
                'updated_at' => '2023-09-17 10:20:15',
            ),
            242 =>
            array (
                'id' => 139,
                'name' => 'Detskiy velosped',
                'code' => '871200',
                'position' => 1,
                'category_id' => 7,
                'created_at' => '2023-09-15 11:41:10',
                'updated_at' => '2023-09-15 11:41:10',
            ),
            243 =>
            array (
                'id' => 256,
                'name' => 'Krovat',
                'code' => '940360',
                'position' => 5,
                'category_id' => 4,
                'created_at' => '2023-09-16 04:46:15',
                'updated_at' => '2023-09-16 04:46:15',
            ),
            244 =>
            array (
                'id' => 259,
                'name' => 'Sut',
                'code' => '040120',
                'position' => 1,
                'category_id' => 5,
                'created_at' => '2023-09-18 18:39:22',
                'updated_at' => '2023-09-18 18:39:22',
            ),
            245 =>
            array (
                'id' => 196,
                'name' => 'Basseyn',
                'code' => '950699',
                'position' => 7,
                'category_id' => 6,
                'created_at' => '2023-09-15 17:41:13',
                'updated_at' => '2023-09-15 17:41:13',
            ),
            246 =>
            array (
                'id' => 198,
                'name' => 'Davleniya o\'lchagich',
                'code' => '901890',
                'position' => 3,
                'category_id' => 4,
                'created_at' => '2023-09-15 17:50:18',
                'updated_at' => '2023-09-15 17:50:18',
            ),
            247 =>
            array (
                'id' => 260,
                'name' => 'Maloko',
                'code' => '040120',
                'position' => 1,
                'category_id' => 5,
                'created_at' => '2023-09-18 18:39:50',
                'updated_at' => '2023-09-18 18:39:50',
            ),
            248 =>
            array (
                'id' => 204,
                'name' => 'Lak dilya ruka',
                'code' => '330499',
                'position' => 2,
                'category_id' => 10,
                'created_at' => '2023-09-15 18:01:06',
                'updated_at' => '2023-09-15 18:01:06',
            ),
            249 =>
            array (
                'id' => 210,
                'name' => 'Detskiy moshina',
                'code' => '950300',
                'position' => 14,
                'category_id' => 11,
                'created_at' => '2023-09-15 18:14:27',
                'updated_at' => '2023-09-15 18:14:27',
            ),
            250 =>
            array (
                'id' => 219,
                'name' => 'Eshik zamok',
                'code' => '940391',
                'position' => 3,
                'category_id' => 6,
                'created_at' => '2023-09-15 18:39:51',
                'updated_at' => '2023-09-15 18:39:51',
            ),
            251 =>
            array (
                'id' => 255,
                'name' => 'Kosmetologiya aparat',
                'code' => '901890',
                'position' => 2,
                'category_id' => 10,
                'created_at' => '2023-09-16 04:42:37',
                'updated_at' => '2023-09-16 04:42:37',
            ),
            252 =>
            array (
                'id' => 200,
                'name' => 'Zashita kaska',
                'code' => '650610',
                'position' => 3,
                'category_id' => 6,
                'created_at' => '2023-09-15 17:51:53',
                'updated_at' => '2023-09-15 17:51:53',
            ),
            253 =>
            array (
                'id' => 4,
                'name' => 'Tufli mujskiy',
                'code' => '640399',
                'position' => 11,
                'category_id' => 3,
                'created_at' => '2023-09-14 18:47:21',
                'updated_at' => '2023-09-14 18:47:21',
            ),
            254 =>
            array (
                'id' => 254,
                'name' => 'Rulon paket',
                'code' => '392321',
                'position' => 2,
                'category_id' => 9,
                'created_at' => '2023-09-16 04:39:05',
                'updated_at' => '2023-09-16 04:39:05',
            ),
            255 =>
            array (
                'id' => 248,
                'name' => 'Pasuda',
                'code' => '392490',
                'position' => 20,
                'category_id' => 9,
                'created_at' => '2023-09-16 04:23:12',
                'updated_at' => '2023-09-16 04:23:12',
            ),
            256 =>
            array (
                'id' => 250,
                'name' => 'Frukti suxoy',
                'code' => '081340',
                'position' => 2,
                'category_id' => 5,
                'created_at' => '2023-09-16 04:26:24',
                'updated_at' => '2023-09-16 04:26:24',
            ),
            257 =>
            array (
                'id' => 261,
                'name' => 'Asal',
                'code' => '040900',
                'position' => 1,
                'category_id' => 5,
                'created_at' => '2023-09-18 18:40:09',
                'updated_at' => '2023-09-18 18:40:09',
            ),
            258 =>
            array (
                'id' => 262,
                'name' => 'Мёд',
                'code' => '040900',
                'position' => 1,
                'category_id' => 5,
                'created_at' => '2023-09-18 18:40:30',
                'updated_at' => '2023-09-18 18:40:30',
            ),
            259 =>
            array (
                'id' => 263,
                'name' => 'Garox',
                'code' => '070810',
                'position' => 1,
                'category_id' => 5,
                'created_at' => '2023-09-18 18:40:48',
                'updated_at' => '2023-09-18 18:40:48',
            ),
            260 =>
            array (
                'id' => 264,
                'name' => 'Un',
                'code' => '110100',
                'position' => 1,
                'category_id' => 5,
                'created_at' => '2023-09-18 18:41:34',
                'updated_at' => '2023-09-18 18:41:34',
            ),
            261 =>
            array (
                'id' => 265,
                'name' => 'Muja',
                'code' => '110100',
                'position' => 1,
                'category_id' => 5,
                'created_at' => '2023-09-18 18:41:47',
                'updated_at' => '2023-09-18 18:41:47',
            ),
            262 =>
            array (
                'id' => 266,
                'name' => 'Semichka',
                'code' => '120600',
                'position' => 1,
                'category_id' => 5,
                'created_at' => '2023-09-18 18:42:10',
                'updated_at' => '2023-09-18 18:42:10',
            ),
            263 =>
            array (
                'id' => 267,
                'name' => 'Yog\'',
                'code' => '150920',
                'position' => 1,
                'category_id' => 5,
                'created_at' => '2023-09-18 18:42:27',
                'updated_at' => '2023-09-18 18:42:27',
            ),
            264 =>
            array (
                'id' => 268,
                'name' => 'Maslo',
                'code' => '150920',
                'position' => 1,
                'category_id' => 5,
                'created_at' => '2023-09-18 18:42:47',
                'updated_at' => '2023-09-18 18:42:47',
            ),
            265 =>
            array (
                'id' => 269,
                'name' => 'Масло',
                'code' => '150920',
                'position' => 1,
                'category_id' => 5,
                'created_at' => '2023-09-18 18:43:37',
                'updated_at' => '2023-09-18 18:43:37',
            ),
            266 =>
            array (
                'id' => 270,
                'name' => 'Shakar',
                'code' => '170199',
                'position' => 1,
                'category_id' => 5,
                'created_at' => '2023-09-18 18:43:55',
                'updated_at' => '2023-09-18 18:43:55',
            ),
            267 =>
            array (
                'id' => 271,
                'name' => 'Сахар',
                'code' => '170199',
                'position' => 1,
                'category_id' => 5,
                'created_at' => '2023-09-18 18:44:15',
                'updated_at' => '2023-09-18 18:44:15',
            ),
            268 =>
            array (
                'id' => 272,
                'name' => 'Kakao',
                'code' => '180500',
                'position' => 1,
                'category_id' => 5,
                'created_at' => '2023-09-18 18:44:33',
                'updated_at' => '2023-09-18 18:44:33',
            ),
            269 =>
            array (
                'id' => 273,
                'name' => 'Shokolad',
                'code' => '180632',
                'position' => 1,
                'category_id' => 5,
                'created_at' => '2023-09-18 18:44:53',
                'updated_at' => '2023-09-18 18:44:53',
            ),
            270 =>
            array (
                'id' => 274,
                'name' => 'Makaron',
                'code' => '190219',
                'position' => 1,
                'category_id' => 5,
                'created_at' => '2023-09-18 18:45:09',
                'updated_at' => '2023-09-18 18:45:09',
            ),
            271 =>
            array (
                'id' => 275,
                'name' => 'Ketchup',
                'code' => '210320',
                'position' => 1,
                'category_id' => 5,
                'created_at' => '2023-09-18 18:45:41',
                'updated_at' => '2023-09-18 18:45:41',
            ),
            272 =>
            array (
                'id' => 276,
                'name' => 'Mayonez',
                'code' => '210390',
                'position' => 1,
                'category_id' => 5,
                'created_at' => '2023-09-18 18:45:59',
                'updated_at' => '2023-09-18 18:45:59',
            ),
            273 =>
            array (
                'id' => 277,
                'name' => 'Energetik',
                'code' => '220110',
                'position' => 1,
                'category_id' => 5,
                'created_at' => '2023-09-18 18:46:23',
                'updated_at' => '2023-09-18 18:46:23',
            ),
            274 =>
            array (
                'id' => 278,
                'name' => 'Pivo',
                'code' => '220300',
                'position' => 1,
                'category_id' => 5,
                'created_at' => '2023-09-18 18:46:42',
                'updated_at' => '2023-09-18 18:46:42',
            ),
            275 =>
            array (
                'id' => 279,
                'name' => 'Piva',
                'code' => '220300',
                'position' => 1,
                'category_id' => 5,
                'created_at' => '2023-09-18 18:46:54',
                'updated_at' => '2023-09-18 18:46:54',
            ),
            276 =>
            array (
                'id' => 280,
                'name' => 'Shampaniskiy',
                'code' => '220410',
                'position' => 1,
                'category_id' => 5,
                'created_at' => '2023-09-18 18:47:11',
                'updated_at' => '2023-09-18 18:47:11',
            ),
            277 =>
            array (
                'id' => 281,
                'name' => 'Matorni masla',
                'code' => '271019',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-18 18:48:44',
                'updated_at' => '2023-09-18 18:48:44',
            ),
            278 =>
            array (
                'id' => 282,
                'name' => 'Bint',
                'code' => '300590',
                'position' => 1,
                'category_id' => 10,
                'created_at' => '2023-09-18 18:49:13',
                'updated_at' => '2023-09-18 18:49:13',
            ),
            279 =>
            array (
                'id' => 283,
                'name' => 'Aptechka',
                'code' => '300650',
                'position' => 1,
                'category_id' => 10,
                'created_at' => '2023-09-18 18:49:30',
                'updated_at' => '2023-09-18 18:49:30',
            ),
            280 =>
            array (
                'id' => 284,
                'name' => 'Pamada',
                'code' => '330410',
                'position' => 1,
                'category_id' => 10,
                'created_at' => '2023-09-18 18:49:57',
                'updated_at' => '2023-09-18 18:49:57',
            ),
            281 =>
            array (
                'id' => 285,
                'name' => 'Kosmetika',
                'code' => '330420',
                'position' => 3,
                'category_id' => 10,
                'created_at' => '2023-09-18 18:50:37',
                'updated_at' => '2023-09-18 18:50:37',
            ),
            282 =>
            array (
                'id' => 286,
                'name' => 'Duxi',
                'code' => '330720',
                'position' => 1,
                'category_id' => 10,
                'created_at' => '2023-09-18 18:51:07',
                'updated_at' => '2023-09-18 18:51:07',
            ),
            283 =>
            array (
                'id' => 287,
                'name' => 'Atir',
                'code' => '330720',
                'position' => 1,
                'category_id' => 10,
                'created_at' => '2023-09-18 18:51:19',
                'updated_at' => '2023-09-18 18:51:19',
            ),
            284 =>
            array (
                'id' => 288,
                'name' => 'Dezodorant',
                'code' => '330720',
                'position' => 1,
                'category_id' => 10,
                'created_at' => '2023-09-18 18:51:47',
                'updated_at' => '2023-09-18 18:51:47',
            ),
            285 =>
            array (
                'id' => 289,
                'name' => 'Dezadarant',
                'code' => '330720',
                'position' => 1,
                'category_id' => 10,
                'created_at' => '2023-09-18 18:52:01',
                'updated_at' => '2023-09-18 18:52:01',
            ),
            286 =>
            array (
                'id' => 290,
                'name' => 'Asvejetil',
                'code' => '330749',
                'position' => 1,
                'category_id' => 10,
                'created_at' => '2023-09-18 18:52:30',
                'updated_at' => '2023-09-18 18:52:30',
            ),
            287 =>
            array (
                'id' => 291,
                'name' => 'Sredstva',
                'code' => '340250',
                'position' => 6,
                'category_id' => 10,
                'created_at' => '2023-09-18 18:53:11',
                'updated_at' => '2023-09-18 18:53:11',
            ),
            288 =>
            array (
                'id' => 292,
                'name' => 'Garshok',
                'code' => '392490',
                'position' => 1,
                'category_id' => 10,
                'created_at' => '2023-09-18 18:54:26',
                'updated_at' => '2023-09-18 18:54:26',
            ),
            289 =>
            array (
                'id' => 293,
                'name' => 'Detskiy gorshok',
                'code' => '392490',
                'position' => 1,
                'category_id' => 10,
                'created_at' => '2023-09-18 18:54:46',
                'updated_at' => '2023-09-18 18:54:46',
            ),
            290 =>
            array (
                'id' => 294,
                'name' => 'Eshik',
                'code' => '392520',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-18 18:56:34',
                'updated_at' => '2023-09-18 18:56:34',
            ),
            291 =>
            array (
                'id' => 295,
                'name' => 'Dver',
                'code' => '392520',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-18 18:56:48',
                'updated_at' => '2023-09-18 18:56:48',
            ),
            292 =>
            array (
                'id' => 296,
                'name' => 'Deraza',
                'code' => '392520',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-18 18:57:02',
                'updated_at' => '2023-09-18 18:57:02',
            ),
            293 =>
            array (
                'id' => 297,
                'name' => 'Okno',
                'code' => '392520',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-18 18:57:24',
                'updated_at' => '2023-09-18 18:57:24',
            ),
            294 =>
            array (
                'id' => 298,
                'name' => 'Padakolnik',
                'code' => '392590',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-18 18:57:53',
                'updated_at' => '2023-09-18 18:57:53',
            ),
            295 =>
            array (
                'id' => 299,
                'name' => 'Podokolnik',
                'code' => '392590',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-18 18:58:09',
                'updated_at' => '2023-09-18 18:58:09',
            ),
            296 =>
            array (
                'id' => 300,
                'name' => 'Musor bak',
                'code' => '392690',
                'position' => 1,
                'category_id' => 6,
                'created_at' => '2023-09-18 18:58:48',
                'updated_at' => '2023-09-18 18:58:48',
            ),
            297 =>
            array (
                'id' => 301,
                'name' => 'Chemodan',
                'code' => '420212',
                'position' => 2,
                'category_id' => 6,
                'created_at' => '2023-09-18 18:59:49',
                'updated_at' => '2023-09-18 18:59:59',
            ),
            298 =>
            array (
                'id' => 303,
                'name' => 'Рюкзак',
                'code' => '420212',
                'position' => 8,
                'category_id' => 1,
                'created_at' => '2023-09-18 19:00:42',
                'updated_at' => '2023-09-18 19:00:42',
            ),
            299 =>
            array (
                'id' => 302,
                'name' => 'Ruguzak',
                'code' => '420212',
                'position' => 8,
                'category_id' => 1,
                'created_at' => '2023-09-18 19:00:22',
                'updated_at' => '2023-09-18 19:00:53',
            ),
            300 =>
            array (
                'id' => 304,
                'name' => 'Tualitni bumaga',
                'code' => '481810',
                'position' => 2,
                'category_id' => 6,
                'created_at' => '2023-09-18 19:01:58',
                'updated_at' => '2023-09-18 19:01:58',
            ),
            301 =>
            array (
                'id' => 305,
                'name' => 'Salfetka',
                'code' => '481820',
                'position' => 1,
                'category_id' => 9,
                'created_at' => '2023-09-18 19:02:22',
                'updated_at' => '2023-09-18 19:02:22',
            ),
            302 =>
            array (
                'id' => 306,
                'name' => 'Skuter',
                'code' => '871190',
                'position' => 2,
                'category_id' => 7,
                'created_at' => '2023-09-18 19:03:09',
                'updated_at' => '2023-09-18 19:03:09',
            ),
            303 =>
            array (
                'id' => 307,
                'name' => 'Kolyaska invalidni',
                'code' => '871390',
                'position' => 1,
                'category_id' => 7,
                'created_at' => '2023-09-18 19:03:31',
                'updated_at' => '2023-09-18 19:03:31',
            ),
        ));

        $id = DB::table('products')->orderBy('id', 'DESC')->first();
        DB::statement('alter sequence products_id_seq restart with '.($id->id+1));
    }
}
