<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReceiverPeopleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('receiver_people')->delete();
        
        \DB::table('receiver_people')->insert(array (
            0 => 
            array (
                'id' => 51,
                'full_name' => 'Saparova Shohista',
                'passport' => 'AD0011774',
                'birthdate' => '2003-05-10',
                'phone' => '998883683993',
                'address_id' => 1,
                'driver_id' => 3,
                'created_at' => '2023-09-15 11:53:28',
                'updated_at' => '2023-09-15 11:53:28',
            ),
            1 => 
            array (
                'id' => 52,
                'full_name' => 'Xudjayarova Xafiza',
                'passport' => 'AA7957777',
                'birthdate' => '1964-11-07',
                'phone' => '991958064',
                'address_id' => 1,
                'driver_id' => 3,
                'created_at' => '2023-09-15 11:54:13',
                'updated_at' => '2023-09-15 11:54:13',
            ),
            2 => 
            array (
                'id' => 53,
                'full_name' => 'Xudoyberdiyeva Fotima',
                'passport' => 'AB5872567',
                'birthdate' => '1978-04-30',
                'phone' => '979210206',
                'address_id' => 1,
                'driver_id' => 3,
                'created_at' => '2023-09-15 11:55:07',
                'updated_at' => '2023-09-15 11:55:07',
            ),
            3 => 
            array (
                'id' => 7,
                'full_name' => 'Xujayarova Sabina',
                'passport' => 'AB7144972',
                'birthdate' => '2001-06-28',
                'phone' => '937091267',
                'address_id' => 1,
                'driver_id' => 3,
                'created_at' => '2023-09-15 06:45:20',
                'updated_at' => '2023-09-15 06:45:44',
            ),
            4 => 
            array (
                'id' => 8,
                'full_name' => 'Kattaeva Gulnoza',
                'passport' => 'AB3716307',
                'birthdate' => '1980-09-11',
                'phone' => '998145741',
                'address_id' => 1,
                'driver_id' => 3,
                'created_at' => '2023-09-15 06:46:42',
                'updated_at' => '2023-09-15 06:46:42',
            ),
            5 => 
            array (
                'id' => 9,
                'full_name' => 'Kattayeva Fatima',
                'passport' => 'AD2175106',
                'birthdate' => '1967-12-12',
                'phone' => '934326621',
                'address_id' => 1,
                'driver_id' => 3,
                'created_at' => '2023-09-15 06:47:47',
                'updated_at' => '2023-09-15 06:47:47',
            ),
            6 => 
            array (
                'id' => 11,
                'full_name' => 'Usmonov Xurshid',
                'passport' => 'AD2769512',
                'birthdate' => '1993-01-20',
                'phone' => '998500020093',
                'address_id' => 1,
                'driver_id' => 3,
                'created_at' => '2023-09-15 06:55:24',
                'updated_at' => '2023-09-15 06:55:24',
            ),
            7 => 
            array (
                'id' => 12,
                'full_name' => 'Avlonova Rukiya',
                'passport' => 'AA6641380',
                'birthdate' => '1961-10-20',
                'phone' => '935886900',
                'address_id' => 1,
                'driver_id' => 3,
                'created_at' => '2023-09-15 06:59:09',
                'updated_at' => '2023-09-15 07:00:36',
            ),
            8 => 
            array (
                'id' => 13,
                'full_name' => 'Sobirova Muhayyo',
                'passport' => 'AA7462871',
                'birthdate' => '1970-09-30',
                'phone' => '998902849502',
                'address_id' => 1,
                'driver_id' => 3,
                'created_at' => '2023-09-15 07:01:28',
                'updated_at' => '2023-09-15 07:01:28',
            ),
            9 => 
            array (
                'id' => 14,
                'full_name' => 'Sabirov Azamat',
                'passport' => 'AD3384500',
                'birthdate' => '1968-04-06',
                'phone' => '998902849502',
                'address_id' => 1,
                'driver_id' => 3,
                'created_at' => '2023-09-15 07:02:29',
                'updated_at' => '2023-09-15 07:02:29',
            ),
            10 => 
            array (
                'id' => 10,
                'full_name' => 'Xakimova Muhabbat',
                'passport' => 'AA3897916',
                'birthdate' => '1977-07-13',
                'phone' => '933161227',
                'address_id' => 1,
                'driver_id' => 3,
                'created_at' => '2023-09-15 06:48:35',
                'updated_at' => '2023-09-15 07:31:37',
            ),
            11 => 
            array (
                'id' => 15,
                'full_name' => 'Jalilov Beknazar',
                'passport' => 'AD2522564',
                'birthdate' => '1986-02-20',
                'phone' => '935888482',
                'address_id' => 1,
                'driver_id' => 3,
                'created_at' => '2023-09-15 07:33:57',
                'updated_at' => '2023-09-15 07:33:57',
            ),
            12 => 
            array (
                'id' => 16,
                'full_name' => 'Xoliqulov Dostonjon',
                'passport' => 'AC0278128',
                'birthdate' => '1990-07-31',
                'phone' => '998934313190',
                'address_id' => 1,
                'driver_id' => 3,
                'created_at' => '2023-09-15 07:34:45',
                'updated_at' => '2023-09-15 07:34:45',
            ),
            13 => 
            array (
                'id' => 17,
                'full_name' => 'Rustamob Shohzod',
                'passport' => 'AA6684650',
                'birthdate' => '1998-05-04',
                'phone' => '998906000097',
                'address_id' => 1,
                'driver_id' => 3,
                'created_at' => '2023-09-15 07:35:28',
                'updated_at' => '2023-09-15 07:35:28',
            ),
            14 => 
            array (
                'id' => 18,
                'full_name' => 'Xushmamatov Bunyod',
                'passport' => 'AA3252297',
                'birthdate' => '1988-10-30',
                'phone' => '938038586',
                'address_id' => 4,
                'driver_id' => 3,
                'created_at' => '2023-09-15 07:36:37',
                'updated_at' => '2023-09-15 07:36:37',
            ),
            15 => 
            array (
                'id' => 19,
                'full_name' => 'Bobamuradova Manzura',
                'passport' => 'AA8250091',
                'birthdate' => '1965-04-09',
                'phone' => '998992675765',
                'address_id' => 1,
                'driver_id' => 3,
                'created_at' => '2023-09-15 07:37:23',
                'updated_at' => '2023-09-15 07:37:31',
            ),
            16 => 
            array (
                'id' => 20,
                'full_name' => 'Movlonov Abdumalik',
                'passport' => 'AA8071430',
                'birthdate' => '1967-04-02',
                'phone' => '+99897 206 94 04',
                'address_id' => 7,
                'driver_id' => 3,
                'created_at' => '2023-09-15 09:31:58',
                'updated_at' => '2023-09-15 09:31:58',
            ),
            17 => 
            array (
                'id' => 21,
                'full_name' => 'Ergashova Gulandon',
                'passport' => 'AB3017227',
                'birthdate' => '1956-02-02',
                'phone' => '998939519756',
                'address_id' => 4,
                'driver_id' => 3,
                'created_at' => '2023-09-15 09:33:09',
                'updated_at' => '2023-09-15 09:33:09',
            ),
            18 => 
            array (
                'id' => 22,
                'full_name' => 'Raxmatova Shalola',
                'passport' => 'AA1552659',
                'birthdate' => '1980-07-17',
                'phone' => '998934634518',
                'address_id' => 3,
                'driver_id' => 3,
                'created_at' => '2023-09-15 09:34:17',
                'updated_at' => '2023-09-15 09:34:17',
            ),
            19 => 
            array (
                'id' => 23,
                'full_name' => 'Botirova Dilnavoz',
                'passport' => 'AB6535934',
                'birthdate' => '1979-05-23',
                'phone' => '998932202379',
                'address_id' => 1,
                'driver_id' => 3,
                'created_at' => '2023-09-15 09:35:49',
                'updated_at' => '2023-09-15 09:35:49',
            ),
            20 => 
            array (
                'id' => 24,
                'full_name' => 'Yuldasheva Dinora',
                'passport' => 'AB8139585',
                'birthdate' => '2001-08-05',
                'phone' => '998942266160',
                'address_id' => 1,
                'driver_id' => 3,
                'created_at' => '2023-09-15 09:36:34',
                'updated_at' => '2023-09-15 09:36:34',
            ),
            21 => 
            array (
                'id' => 25,
                'full_name' => 'Teshaeva Buvitosh',
                'passport' => 'AB9191043',
                'birthdate' => '1950-02-23',
                'phone' => '998930465023',
                'address_id' => 1,
                'driver_id' => 3,
                'created_at' => '2023-09-15 09:37:18',
                'updated_at' => '2023-09-15 09:37:18',
            ),
            22 => 
            array (
                'id' => 26,
                'full_name' => 'Kurbanov Hasan',
                'passport' => 'AB9191049',
                'birthdate' => '1946-09-16',
                'phone' => '998973774640',
                'address_id' => 1,
                'driver_id' => 3,
                'created_at' => '2023-09-15 09:38:14',
                'updated_at' => '2023-09-15 09:38:14',
            ),
            23 => 
            array (
                'id' => 27,
                'full_name' => 'Kurbanova Sohiba',
                'passport' => 'AA9504284',
                'birthdate' => '1975-04-11',
                'phone' => '998943571175',
                'address_id' => 1,
                'driver_id' => 3,
                'created_at' => '2023-09-15 09:38:57',
                'updated_at' => '2023-09-15 09:38:57',
            ),
            24 => 
            array (
                'id' => 28,
                'full_name' => 'Xasanova Shaxribonu',
                'passport' => 'AD0615674',
                'birthdate' => '2005-08-08',
                'phone' => '998979250512',
                'address_id' => 1,
                'driver_id' => 3,
                'created_at' => '2023-09-15 09:39:40',
                'updated_at' => '2023-09-15 09:39:40',
            ),
            25 => 
            array (
                'id' => 29,
                'full_name' => 'Kurbanova Dilafruz',
                'passport' => 'AB6286587',
                'birthdate' => '1977-09-27',
                'phone' => '998934616390',
                'address_id' => 1,
                'driver_id' => 3,
                'created_at' => '2023-09-15 09:40:39',
                'updated_at' => '2023-09-15 09:40:39',
            ),
            26 => 
            array (
                'id' => 30,
                'full_name' => 'Abjalilov Zafar',
                'passport' => 'AB6298605',
                'birthdate' => '1978-03-19',
                'phone' => '93 460 63 90',
                'address_id' => 4,
                'driver_id' => 3,
                'created_at' => '2023-09-15 09:41:34',
                'updated_at' => '2023-09-15 09:41:34',
            ),
            27 => 
            array (
                'id' => 31,
                'full_name' => 'Xasanova Odinabonu',
                'passport' => 'AC2858265',
                'birthdate' => '2003-05-04',
                'phone' => '93 121 04 42',
                'address_id' => 4,
                'driver_id' => 3,
                'created_at' => '2023-09-15 09:42:24',
                'updated_at' => '2023-09-15 09:42:24',
            ),
            28 => 
            array (
                'id' => 32,
                'full_name' => 'Raimqulova Farangiz',
                'passport' => 'AD1235446',
                'birthdate' => '2005-12-04',
                'phone' => '998949742868',
                'address_id' => 4,
                'driver_id' => 3,
                'created_at' => '2023-09-15 09:43:08',
                'updated_at' => '2023-09-15 09:43:08',
            ),
            29 => 
            array (
                'id' => 33,
                'full_name' => 'Amankulov Ulugbek',
                'passport' => 'AB0730152',
                'birthdate' => '1970-07-15',
                'phone' => '935672231',
                'address_id' => 1,
                'driver_id' => 3,
                'created_at' => '2023-09-15 09:43:51',
                'updated_at' => '2023-09-15 09:43:51',
            ),
            30 => 
            array (
                'id' => 34,
                'full_name' => 'Odilov Adxam',
                'passport' => 'AD0527651',
                'birthdate' => '2005-06-05',
                'phone' => '998946052429',
                'address_id' => 1,
                'driver_id' => 3,
                'created_at' => '2023-09-15 09:44:50',
                'updated_at' => '2023-09-15 09:44:50',
            ),
            31 => 
            array (
                'id' => 35,
                'full_name' => 'Kurbanova Dilsuz',
                'passport' => 'AB9170018',
                'birthdate' => '1985-07-04',
                'phone' => '998944877954',
                'address_id' => 1,
                'driver_id' => 3,
                'created_at' => '2023-09-15 09:45:49',
                'updated_at' => '2023-09-15 09:45:49',
            ),
            32 => 
            array (
                'id' => 36,
                'full_name' => 'Shomurodov Xusniddin',
                'passport' => 'AB5789475',
                'birthdate' => '1979-07-27',
                'phone' => '937033379',
                'address_id' => 1,
                'driver_id' => 3,
                'created_at' => '2023-09-15 09:46:31',
                'updated_at' => '2023-09-15 09:46:31',
            ),
            33 => 
            array (
                'id' => 37,
                'full_name' => 'Kurbonov Muxiddin',
                'passport' => 'AD1397650',
                'birthdate' => '1971-10-15',
                'phone' => '973221871',
                'address_id' => 1,
                'driver_id' => 3,
                'created_at' => '2023-09-15 09:47:20',
                'updated_at' => '2023-09-15 09:47:20',
            ),
            34 => 
            array (
                'id' => 38,
                'full_name' => 'Axmedova Shaxzoda',
                'passport' => 'AA6522038',
                'birthdate' => '1973-07-06',
                'phone' => '906016760',
                'address_id' => 1,
                'driver_id' => 3,
                'created_at' => '2023-09-15 09:48:14',
                'updated_at' => '2023-09-15 09:48:14',
            ),
            35 => 
            array (
                'id' => 39,
                'full_name' => 'Yarmamtov Nuriddin',
                'passport' => 'AA5716496',
                'birthdate' => '1990-05-17',
                'phone' => '938344342',
                'address_id' => 1,
                'driver_id' => 3,
                'created_at' => '2023-09-15 09:49:07',
                'updated_at' => '2023-09-15 09:49:07',
            ),
            36 => 
            array (
                'id' => 40,
                'full_name' => 'Adizova Sevara',
                'passport' => 'AD1830442',
                'birthdate' => '1996-03-01',
                'phone' => '970099692',
                'address_id' => 1,
                'driver_id' => 3,
                'created_at' => '2023-09-15 09:49:52',
                'updated_at' => '2023-09-15 09:49:52',
            ),
            37 => 
            array (
                'id' => 41,
                'full_name' => 'Suyunov Olimjon',
                'passport' => 'AA7331138',
                'birthdate' => '1995-04-21',
                'phone' => '932808930',
                'address_id' => 4,
                'driver_id' => 3,
                'created_at' => '2023-09-15 11:45:40',
                'updated_at' => '2023-09-15 11:45:40',
            ),
            38 => 
            array (
                'id' => 42,
                'full_name' => 'Shodmonova Feruza',
                'passport' => 'AA5579494',
                'birthdate' => '1971-08-02',
                'phone' => '+998 90-620-03-99',
                'address_id' => 4,
                'driver_id' => 3,
                'created_at' => '2023-09-15 11:46:31',
                'updated_at' => '2023-09-15 11:46:31',
            ),
            39 => 
            array (
                'id' => 43,
                'full_name' => 'Shodmonov Iftixor',
                'passport' => 'AA5483630',
                'birthdate' => '1969-03-19',
                'phone' => '+998 94-220-69-71',
                'address_id' => 4,
                'driver_id' => 3,
                'created_at' => '2023-09-15 11:47:16',
                'updated_at' => '2023-09-15 11:47:16',
            ),
            40 => 
            array (
                'id' => 44,
                'full_name' => 'Mamatov Valisher',
                'passport' => 'FA2203811',
                'birthdate' => '1995-06-23',
                'phone' => '+99894 782 19 73',
                'address_id' => 4,
                'driver_id' => 3,
                'created_at' => '2023-09-15 11:48:16',
                'updated_at' => '2023-09-15 11:48:16',
            ),
            41 => 
            array (
                'id' => 45,
                'full_name' => 'Rasulov Fazlitdin',
                'passport' => 'FA2326051',
                'birthdate' => '1971-12-18',
                'phone' => '947821973',
                'address_id' => 4,
                'driver_id' => 3,
                'created_at' => '2023-09-15 11:48:58',
                'updated_at' => '2023-09-15 11:48:58',
            ),
            42 => 
            array (
                'id' => 46,
                'full_name' => 'Rajabov Oxunjon',
                'passport' => 'AA4155059',
                'birthdate' => '1996-08-06',
                'phone' => '+99893 136 46 52',
                'address_id' => 4,
                'driver_id' => 3,
                'created_at' => '2023-09-15 11:49:38',
                'updated_at' => '2023-09-15 11:49:38',
            ),
            43 => 
            array (
                'id' => 47,
                'full_name' => 'Ikromova Zebo',
                'passport' => 'AB8228712',
                'birthdate' => '1966-05-18',
                'phone' => '998970851866',
                'address_id' => 4,
                'driver_id' => 3,
                'created_at' => '2023-09-15 11:50:20',
                'updated_at' => '2023-09-15 11:50:20',
            ),
            44 => 
            array (
                'id' => 48,
                'full_name' => 'Ikromov Bahodir',
                'passport' => 'AB8835370',
                'birthdate' => '1959-12-27',
                'phone' => '998942242990',
                'address_id' => 4,
                'driver_id' => 3,
                'created_at' => '2023-09-15 11:51:15',
                'updated_at' => '2023-09-15 11:51:15',
            ),
            45 => 
            array (
                'id' => 49,
                'full_name' => 'Boboyeva Shaxnoza',
                'passport' => 'AB7936100',
                'birthdate' => '1995-08-27',
                'phone' => '+99897 2980525',
                'address_id' => 1,
                'driver_id' => 3,
                'created_at' => '2023-09-15 11:51:59',
                'updated_at' => '2023-09-15 11:51:59',
            ),
            46 => 
            array (
                'id' => 50,
                'full_name' => 'Amonov Umarjon',
                'passport' => 'AA5037076',
                'birthdate' => '1990-07-28',
                'phone' => '998939920728',
                'address_id' => 1,
                'driver_id' => 3,
                'created_at' => '2023-09-15 11:52:38',
                'updated_at' => '2023-09-15 11:52:38',
            ),
        ));
        
        
    }
}