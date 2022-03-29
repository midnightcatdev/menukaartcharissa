<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IngredientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ingredients')->delete();
        
        \DB::table('ingredients')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Zalm',
                'unit' => 'gram',
                'value' => '120',
                'created_at' => '2022-03-14 08:44:23',
                'updated_at' => '2022-03-14 09:44:26',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Aardppel',
                'unit' => 'gram',
                'value' => '1000',
                'created_at' => '2022-03-14 08:45:35',
                'updated_at' => '2022-03-14 08:45:42',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Room',
                'unit' => 'gram',
                'value' => '500',
                'created_at' => '2022-03-14 08:45:58',
                'updated_at' => '2022-03-14 08:45:58',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Melk',
                'unit' => 'gram',
                'value' => '200',
                'created_at' => '2022-03-14 08:46:10',
                'updated_at' => '2022-03-14 08:46:10',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Zout',
                'unit' => 'gram',
                'value' => '5',
                'created_at' => '2022-03-14 08:46:20',
                'updated_at' => '2022-03-14 08:46:20',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Biefstuk',
                'unit' => 'gram',
                'value' => '300',
                'created_at' => '2022-03-14 08:46:39',
                'updated_at' => '2022-03-14 08:46:39',
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'a',
                'unit' => 'a',
                'value' => '100\\',
                'created_at' => '2022-03-14 14:51:31',
                'updated_at' => '2022-03-15 09:06:01',
            ),
            7 => 
            array (
                'id' => 9,
                'name' => 'Zout',
                'unit' => 'gram',
                'value' => '100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 10,
                'name' => 'Bloem',
                'unit' => 'gram',
                'value' => '100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 11,
                'name' => 'Suiker',
                'unit' => 'gram',
                'value' => '100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 12,
                'name' => 'Zeebaars',
                'unit' => 'gram',
                'value' => '100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 13,
                'name' => 'Eend',
                'unit' => 'gram',
                'value' => '100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 14,
                'name' => 'Kalkoen',
                'unit' => 'gram',
                'value' => '100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 15,
                'name' => 'Test',
                'unit' => 'Test',
                'value' => '99',
                'created_at' => '2022-03-28 13:12:11',
                'updated_at' => '2022-03-28 13:12:11',
            ),
            14 => 
            array (
                'id' => 16,
                'name' => 'Banaan',
                'unit' => 'gram',
                'value' => '1000',
                'created_at' => '2022-03-28 13:59:08',
                'updated_at' => '2022-03-28 13:59:08',
            ),
        ));
        
        
    }
}