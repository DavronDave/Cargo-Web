<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SenderPeopleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('sender_people')->delete();

        \DB::table('sender_people')->insert(array (
            0 =>
            array (
                'id' => 4,
                'full_name' => 'Xudoyberdiyev Anarbay',
                'created_at' => '2023-09-14 19:20:15',
                'updated_at' => '2023-09-14 19:20:15',
            ),
            1 =>
            array (
                'id' => 3,
                'full_name' => 'Rahmonov Shohid',
                'created_at' => '2023-09-14 17:19:24',
                'updated_at' => '2023-09-14 19:20:24',
            ),
            2 =>
            array (
                'id' => 2,
                'full_name' => 'Komilov Muhriddin',
                'created_at' => '2023-09-14 17:19:18',
                'updated_at' => '2023-09-14 19:20:33',
            ),
            3 =>
            array (
                'id' => 5,
                'full_name' => 'Gaybullayev Mehroj',
                'created_at' => '2023-09-14 19:20:46',
                'updated_at' => '2023-09-14 19:20:46',
            ),
            4 =>
            array (
                'id' => 6,
                'full_name' => 'Mamatqulova Zukhra',
                'created_at' => '2023-09-14 19:20:55',
                'updated_at' => '2023-09-14 19:20:55',
            ),
            5 =>
            array (
                'id' => 7,
                'full_name' => 'Maqsudova Rozigul',
                'created_at' => '2023-09-14 19:21:06',
                'updated_at' => '2023-09-14 19:21:06',
            ),
            6 =>
            array (
                'id' => 8,
                'full_name' => 'Rahimov Vohidjon',
                'created_at' => '2023-09-14 19:21:13',
                'updated_at' => '2023-09-14 19:21:13',
            ),
            7 =>
            array (
                'id' => 9,
                'full_name' => 'Mamatqulova Zukhra',
                'created_at' => '2023-09-14 19:21:20',
                'updated_at' => '2023-09-14 19:21:20',
            ),
            8 =>
            array (
                'id' => 10,
                'full_name' => 'Rustamov Fattoh',
                'created_at' => '2023-09-14 19:21:32',
                'updated_at' => '2023-09-14 19:21:32',
            ),
            9 =>
            array (
                'id' => 11,
                'full_name' => 'Salohov Alimurod',
                'created_at' => '2023-09-14 19:21:38',
                'updated_at' => '2023-09-14 19:21:38',
            ),
            10 =>
            array (
                'id' => 12,
                'full_name' => 'Sherzodov Umidjon',
                'created_at' => '2023-09-14 19:21:45',
                'updated_at' => '2023-09-14 19:21:45',
            ),
            11 =>
            array (
                'id' => 13,
                'full_name' => 'Suvonqulov Doniyor',
                'created_at' => '2023-09-14 19:21:55',
                'updated_at' => '2023-09-14 19:21:55',
            ),
            12 =>
            array (
                'id' => 14,
                'full_name' => 'Xomidova Jasmina',
                'created_at' => '2023-09-14 19:22:01',
                'updated_at' => '2023-09-14 19:22:01',
            ),
            13 =>
            array (
                'id' => 15,
                'full_name' => 'Aliyorov Zafar',
                'created_at' => '2023-09-14 19:22:19',
                'updated_at' => '2023-09-14 19:22:19',
            ),
            14 =>
            array (
                'id' => 16,
                'full_name' => 'Abdivaitov Yunus',
                'created_at' => '2023-09-14 19:22:26',
                'updated_at' => '2023-09-14 19:22:26',
            ),
            15 =>
            array (
                'id' => 17,
                'full_name' => 'Turdimurodov Shaxbozjon',
                'created_at' => '2023-09-14 19:22:34',
                'updated_at' => '2023-09-14 19:22:34',
            ),
            16 =>
            array (
                'id' => 18,
                'full_name' => 'Nazirova Nargiza',
                'created_at' => '2023-09-14 19:22:48',
                'updated_at' => '2023-09-14 19:22:48',
            ),
            17 =>
            array (
                'id' => 19,
                'full_name' => 'Raxmonov Bekmurod',
                'created_at' => '2023-09-14 19:22:56',
                'updated_at' => '2023-09-14 19:22:56',
            ),
            18 =>
            array (
                'id' => 20,
                'full_name' => 'Elmurodov Dilmurod',
                'created_at' => '2023-09-14 19:23:04',
                'updated_at' => '2023-09-14 19:23:04',
            ),
            19 =>
            array (
                'id' => 21,
                'full_name' => 'Elmurodov Dilmurod',
                'created_at' => '2023-09-14 19:23:07',
                'updated_at' => '2023-09-14 19:23:07',
            ),
            20 =>
            array (
                'id' => 22,
                'full_name' => 'Xurramov Elbek',
                'created_at' => '2023-09-14 19:23:16',
                'updated_at' => '2023-09-14 19:23:16',
            ),
            21 =>
            array (
                'id' => 23,
                'full_name' => 'Samadova Zebiniso',
                'created_at' => '2023-09-14 19:23:22',
                'updated_at' => '2023-09-14 19:23:22',
            ),
            22 =>
            array (
                'id' => 24,
                'full_name' => 'Mustafayev Ozodbek',
                'created_at' => '2023-09-14 19:23:29',
                'updated_at' => '2023-09-14 19:23:29',
            ),
            23 =>
            array (
                'id' => 25,
                'full_name' => 'Zaripov Sunnatillo',
                'created_at' => '2023-09-14 19:23:36',
                'updated_at' => '2023-09-14 19:23:36',
            ),
            24 =>
            array (
                'id' => 26,
                'full_name' => 'Zaripov Sunnatillo',
                'created_at' => '2023-09-14 19:23:39',
                'updated_at' => '2023-09-14 19:23:39',
            ),
            25 =>
            array (
                'id' => 27,
                'full_name' => 'Qurbonov Shoxrux',
                'created_at' => '2023-09-14 19:23:46',
                'updated_at' => '2023-09-14 19:23:46',
            ),
            26 =>
            array (
                'id' => 28,
                'full_name' => 'Hamdullayev Mexriddin',
                'created_at' => '2023-09-14 19:23:52',
                'updated_at' => '2023-09-14 19:23:52',
            ),
            27 =>
            array (
                'id' => 29,
                'full_name' => 'Toshimova Mekhri',
                'created_at' => '2023-09-14 19:23:59',
                'updated_at' => '2023-09-14 19:23:59',
            ),
            28 =>
            array (
                'id' => 30,
                'full_name' => 'Hosilov Ibroyim',
                'created_at' => '2023-09-14 19:24:07',
                'updated_at' => '2023-09-14 19:24:07',
            ),
            29 =>
            array (
                'id' => 31,
                'full_name' => 'Yaqubova Gulasal',
                'created_at' => '2023-09-14 19:24:13',
                'updated_at' => '2023-09-14 19:24:13',
            ),
            30 =>
            array (
                'id' => 32,
                'full_name' => 'Bobonazarova Adolat',
                'created_at' => '2023-09-14 19:24:19',
                'updated_at' => '2023-09-14 19:24:19',
            ),
            31 =>
            array (
                'id' => 33,
                'full_name' => 'Bobonazarova Adolat',
                'created_at' => '2023-09-14 19:24:22',
                'updated_at' => '2023-09-14 19:24:22',
            ),
            32 =>
            array (
                'id' => 34,
                'full_name' => 'Boyqobilov Akmal',
                'created_at' => '2023-09-14 19:24:32',
                'updated_at' => '2023-09-14 19:24:32',
            ),
            33 =>
            array (
                'id' => 35,
                'full_name' => 'Pardayev Shaxzod',
                'created_at' => '2023-09-14 19:24:37',
                'updated_at' => '2023-09-14 19:24:37',
            ),
            34 =>
            array (
                'id' => 36,
                'full_name' => 'Maxammadeyiv Shuxrat',
                'created_at' => '2023-09-14 19:24:44',
                'updated_at' => '2023-09-14 19:24:44',
            ),
            35 =>
            array (
                'id' => 37,
                'full_name' => 'Tayloqov Alixon',
                'created_at' => '2023-09-14 19:24:51',
                'updated_at' => '2023-09-14 19:24:51',
            ),
            36 =>
            array (
                'id' => 38,
                'full_name' => 'Tog’ayeva Gulasal',
                'created_at' => '2023-09-14 19:25:00',
                'updated_at' => '2023-09-14 19:25:00',
            ),
            37 =>
            array (
                'id' => 39,
                'full_name' => 'Qalandarov Doniyor',
                'created_at' => '2023-09-14 19:25:06',
                'updated_at' => '2023-09-14 19:25:06',
            ),
            38 =>
            array (
                'id' => 40,
                'full_name' => 'Malikov ALisher',
                'created_at' => '2023-09-14 19:25:12',
                'updated_at' => '2023-09-14 19:25:12',
            ),
            39 =>
            array (
                'id' => 41,
                'full_name' => 'Axmadjonov Umidjon',
                'created_at' => '2023-09-14 19:25:19',
                'updated_at' => '2023-09-14 19:25:19',
            ),
            40 =>
            array (
                'id' => 42,
                'full_name' => 'Temirov Artur',
                'created_at' => '2023-09-14 19:25:59',
                'updated_at' => '2023-09-14 19:25:59',
            ),
            41 =>
            array (
                'id' => 43,
                'full_name' => 'Allayoruva Muxayyo',
                'created_at' => '2023-09-14 19:26:06',
                'updated_at' => '2023-09-14 19:26:06',
            ),
            42 =>
            array (
                'id' => 44,
                'full_name' => 'Bektayev Asadbek',
                'created_at' => '2023-09-14 19:26:12',
                'updated_at' => '2023-09-14 19:26:12',
            ),
            43 =>
            array (
                'id' => 45,
                'full_name' => 'Kalandarov Dilshodjon',
                'created_at' => '2023-09-14 19:26:18',
                'updated_at' => '2023-09-14 19:26:18',
            ),
            44 =>
            array (
                'id' => 46,
                'full_name' => 'Omonov Asadbek',
                'created_at' => '2023-09-14 19:26:27',
                'updated_at' => '2023-09-14 19:26:27',
            ),
            45 =>
            array (
                'id' => 47,
                'full_name' => 'Jabborov  Jasur',
                'created_at' => '2023-09-14 19:26:33',
                'updated_at' => '2023-09-14 19:26:33',
            ),
            46 =>
            array (
                'id' => 48,
                'full_name' => 'Xubbimov Abdurauf',
                'created_at' => '2023-09-14 19:26:40',
                'updated_at' => '2023-09-14 19:26:40',
            ),
            47 =>
            array (
                'id' => 49,
                'full_name' => 'Yusupov Asliddin',
                'created_at' => '2023-09-14 19:26:45',
                'updated_at' => '2023-09-14 19:26:45',
            ),
            48 =>
            array (
                'id' => 50,
                'full_name' => 'Rasaqulov Axror',
                'created_at' => '2023-09-14 19:26:58',
                'updated_at' => '2023-09-14 19:26:58',
            ),
            49 =>
            array (
                'id' => 73,
                'full_name' => 'Mamadiyorov Xujamurod',
                'created_at' => '2023-09-15 05:25:29',
                'updated_at' => '2023-09-15 05:25:29',
            ),
            50 =>
            array (
                'id' => 74,
                'full_name' => 'Asadov Xayrulla',
                'created_at' => '2023-09-15 05:25:55',
                'updated_at' => '2023-09-15 05:25:55',
            ),
            51 =>
            array (
                'id' => 75,
                'full_name' => 'Zakirov Ravshan',
                'created_at' => '2023-09-15 05:26:03',
                'updated_at' => '2023-09-15 05:26:03',
            ),
            52 =>
            array (
                'id' => 76,
                'full_name' => 'Nazarov Nodir',
                'created_at' => '2023-09-15 05:26:09',
                'updated_at' => '2023-09-15 05:26:09',
            ),
            53 =>
            array (
                'id' => 77,
                'full_name' => 'Yuldasheva Uraltosh',
                'created_at' => '2023-09-15 05:26:17',
                'updated_at' => '2023-09-15 05:26:17',
            ),
            54 =>
            array (
                'id' => 78,
                'full_name' => 'Yuldasheva Uraltosh',
                'created_at' => '2023-09-15 05:26:21',
                'updated_at' => '2023-09-15 05:26:21',
            ),
            55 =>
            array (
                'id' => 79,
                'full_name' => 'Shukurov Yigitali',
                'created_at' => '2023-09-15 05:26:29',
                'updated_at' => '2023-09-15 05:26:29',
            ),
            56 =>
            array (
                'id' => 80,
                'full_name' => 'Shakarova Muxayyo',
                'created_at' => '2023-09-15 05:26:37',
                'updated_at' => '2023-09-15 05:26:37',
            ),
            57 =>
            array (
                'id' => 81,
                'full_name' => 'Maxammadiyeva Nargiza',
                'created_at' => '2023-09-15 05:26:44',
                'updated_at' => '2023-09-15 05:26:44',
            ),
            58 =>
            array (
                'id' => 82,
                'full_name' => 'Usmonov Anvar',
                'created_at' => '2023-09-15 05:26:53',
                'updated_at' => '2023-09-15 05:26:53',
            ),
            59 =>
            array (
                'id' => 83,
                'full_name' => 'Eshqobilov Abdulloh',
                'created_at' => '2023-09-15 05:27:00',
                'updated_at' => '2023-09-15 05:27:00',
            ),
            60 =>
            array (
                'id' => 84,
                'full_name' => 'Tilovova Qunduz',
                'created_at' => '2023-09-15 05:27:06',
                'updated_at' => '2023-09-15 05:27:06',
            ),
            61 =>
            array (
                'id' => 85,
                'full_name' => 'Uraquva Maxliyo',
                'created_at' => '2023-09-15 05:27:14',
                'updated_at' => '2023-09-15 05:27:14',
            ),
            62 =>
            array (
                'id' => 86,
                'full_name' => 'Izzatullayev Farrux',
                'created_at' => '2023-09-15 05:27:20',
                'updated_at' => '2023-09-15 05:27:20',
            ),
            63 =>
            array (
                'id' => 87,
                'full_name' => 'Usmonov Zayniddin',
                'created_at' => '2023-09-15 05:27:27',
                'updated_at' => '2023-09-15 05:27:27',
            ),
            64 =>
            array (
                'id' => 88,
                'full_name' => 'Usmonov Zayniddin',
                'created_at' => '2023-09-15 05:27:30',
                'updated_at' => '2023-09-15 05:27:30',
            ),
            65 =>
            array (
                'id' => 89,
                'full_name' => 'Rashidova Dilnoza',
                'created_at' => '2023-09-15 05:27:38',
                'updated_at' => '2023-09-15 05:27:38',
            ),
            66 =>
            array (
                'id' => 90,
                'full_name' => 'Ruziqulova Manzura',
                'created_at' => '2023-09-15 05:27:50',
                'updated_at' => '2023-09-15 05:27:50',
            ),
            67 =>
            array (
                'id' => 91,
                'full_name' => 'Qilichev Eldor',
                'created_at' => '2023-09-15 05:27:58',
                'updated_at' => '2023-09-15 05:27:58',
            ),
            68 =>
            array (
                'id' => 92,
                'full_name' => 'Uraqov Odil',
                'created_at' => '2023-09-15 05:28:03',
                'updated_at' => '2023-09-15 05:28:03',
            ),
            69 =>
            array (
                'id' => 93,
                'full_name' => 'Uraqov Odil',
                'created_at' => '2023-09-15 05:28:06',
                'updated_at' => '2023-09-15 05:28:06',
            ),
            70 =>
            array (
                'id' => 94,
                'full_name' => 'Qiryigitov Shermamat',
                'created_at' => '2023-09-15 05:28:13',
                'updated_at' => '2023-09-15 05:28:13',
            ),
            71 =>
            array (
                'id' => 95,
                'full_name' => 'Norov Tuxtasin',
                'created_at' => '2023-09-15 05:28:20',
                'updated_at' => '2023-09-15 05:28:20',
            ),
            72 =>
            array (
                'id' => 96,
                'full_name' => 'Yarashova Sitora',
                'created_at' => '2023-09-15 05:28:30',
                'updated_at' => '2023-09-15 05:28:30',
            ),
            73 =>
            array (
                'id' => 97,
                'full_name' => 'Sharipova Norchuchuk',
                'created_at' => '2023-09-15 05:28:47',
                'updated_at' => '2023-09-15 05:28:47',
            ),
            74 =>
            array (
                'id' => 98,
                'full_name' => 'Gafforova Maftuna',
                'created_at' => '2023-09-15 05:28:53',
                'updated_at' => '2023-09-15 05:28:53',
            ),
            75 =>
            array (
                'id' => 99,
                'full_name' => 'Mirzayev Mamaniyoz',
                'created_at' => '2023-09-15 05:29:00',
                'updated_at' => '2023-09-15 05:29:00',
            ),
            76 =>
            array (
                'id' => 100,
                'full_name' => 'Rajapova Guljahon',
                'created_at' => '2023-09-15 05:29:08',
                'updated_at' => '2023-09-15 05:29:08',
            ),
            77 =>
            array (
                'id' => 101,
                'full_name' => 'Eshqobilov Abdulloh',
                'created_at' => '2023-09-15 05:29:18',
                'updated_at' => '2023-09-15 05:29:18',
            ),
            78 =>
            array (
                'id' => 102,
                'full_name' => 'Shakarova Nasiba',
                'created_at' => '2023-09-15 05:29:26',
                'updated_at' => '2023-09-15 05:29:26',
            ),
            79 =>
            array (
                'id' => 103,
                'full_name' => 'Xaliqulov Rustam',
                'created_at' => '2023-09-15 05:29:35',
                'updated_at' => '2023-09-15 05:29:35',
            ),
            80 =>
            array (
                'id' => 104,
                'full_name' => 'Ruziyev Dilshod',
                'created_at' => '2023-09-15 05:29:42',
                'updated_at' => '2023-09-15 05:29:42',
            ),
            81 =>
            array (
                'id' => 105,
                'full_name' => 'Xo’jaqulov Ikrom',
                'created_at' => '2023-09-15 05:30:16',
                'updated_at' => '2023-09-15 05:30:16',
            ),
            82 =>
            array (
                'id' => 106,
                'full_name' => 'Xakimov Said',
                'created_at' => '2023-09-15 05:30:22',
                'updated_at' => '2023-09-15 05:30:22',
            ),
            83 =>
            array (
                'id' => 107,
                'full_name' => 'Nurkulov Shavkat',
                'created_at' => '2023-09-15 05:30:29',
                'updated_at' => '2023-09-15 05:30:29',
            ),
            84 =>
            array (
                'id' => 108,
                'full_name' => 'Nasibov Ilhom',
                'created_at' => '2023-09-15 05:30:36',
                'updated_at' => '2023-09-15 05:30:36',
            ),
            85 =>
            array (
                'id' => 109,
                'full_name' => 'Allaberdiyev Ilyos',
                'created_at' => '2023-09-15 05:30:46',
                'updated_at' => '2023-09-15 05:30:46',
            ),
            86 =>
            array (
                'id' => 110,
                'full_name' => 'Kattabekov Inomjon',
                'created_at' => '2023-09-15 05:30:55',
                'updated_at' => '2023-09-15 05:30:55',
            ),
            87 =>
            array (
                'id' => 111,
                'full_name' => 'Nurkulov Shavkat',
                'created_at' => '2023-09-15 05:31:01',
                'updated_at' => '2023-09-15 05:31:01',
            ),
            88 =>
            array (
                'id' => 112,
                'full_name' => 'Raxmonova Rayxona',
                'created_at' => '2023-09-15 05:31:11',
                'updated_at' => '2023-09-15 05:31:11',
            ),
            89 =>
            array (
                'id' => 113,
                'full_name' => 'Boboyev Fozil',
                'created_at' => '2023-09-15 05:31:18',
                'updated_at' => '2023-09-15 05:31:18',
            ),
            90 =>
            array (
                'id' => 114,
                'full_name' => 'Xosilova O’giloy',
                'created_at' => '2023-09-15 05:31:30',
                'updated_at' => '2023-09-15 05:31:30',
            ),
            91 =>
            array (
                'id' => 115,
                'full_name' => 'Raxmonova Rayxona',
                'created_at' => '2023-09-15 05:31:37',
                'updated_at' => '2023-09-15 05:31:37',
            ),
            92 =>
            array (
                'id' => 116,
                'full_name' => 'Yo’ldoshev Sherali',
                'created_at' => '2023-09-15 05:31:43',
                'updated_at' => '2023-09-15 05:31:43',
            ),
            93 =>
            array (
                'id' => 117,
                'full_name' => 'Muxitdinov Jamol',
                'created_at' => '2023-09-15 05:31:50',
                'updated_at' => '2023-09-15 05:31:50',
            ),
            94 =>
            array (
                'id' => 118,
                'full_name' => 'Hojahmedov Vohidjon',
                'created_at' => '2023-09-15 05:31:58',
                'updated_at' => '2023-09-15 05:31:58',
            ),
            95 =>
            array (
                'id' => 119,
                'full_name' => 'Muxitdinov Jamol',
                'created_at' => '2023-09-15 05:32:09',
                'updated_at' => '2023-09-15 05:32:09',
            ),
            96 =>
            array (
                'id' => 120,
                'full_name' => 'Sattorov Ikrom',
                'created_at' => '2023-09-15 05:32:15',
                'updated_at' => '2023-09-15 05:32:15',
            ),
            97 =>
            array (
                'id' => 121,
                'full_name' => 'Qosimov Jalil',
                'created_at' => '2023-09-15 05:32:26',
                'updated_at' => '2023-09-15 05:32:26',
            ),
            98 =>
            array (
                'id' => 122,
                'full_name' => 'Sharipova Manzura',
                'created_at' => '2023-09-15 05:32:32',
                'updated_at' => '2023-09-15 05:32:32',
            ),
            99 =>
            array (
                'id' => 1,
                'full_name' => 'Tojiyev Sanjar',
                'created_at' => '2023-09-12 17:05:28',
                'updated_at' => '2023-09-15 11:42:38',
            ),
        ));

        $id = DB::table('sender_people')->orderBy('id', 'DESC')->first();
        DB::statement('alter sequence sender_people_id_seq restart with '.($id->id+1));
    }
}
