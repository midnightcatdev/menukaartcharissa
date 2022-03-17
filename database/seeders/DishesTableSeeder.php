<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DishesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('dishes')->delete();
        
        \DB::table('dishes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'foodtype_id' => 9,
                'name' => 'Zalm met pure en groente',
                'description' => 'Zalm op de huid gebakken met romige aardappel puree en geblancheerde groente',
                'allergies' => 'Vis Lactose',
                'price' => 21,
                'created_at' => '2022-03-14 09:37:05',
                'updated_at' => '2022-03-15 14:42:22',
            ),
            1 => 
            array (
                'id' => 3,
                'foodtype_id' => 8,
                'name' => 'Biefstuk',
                'description' => 'Biefstuk met bla en bla',
                'allergies' => 'bla',
                'price' => 30,
                'created_at' => '2022-03-14 10:50:21',
                'updated_at' => '2022-03-15 14:44:47',
            ),
            2 => 
            array (
                'id' => 4,
                'foodtype_id' => 1,
                'name' => 'Zalm met pure en groente',
                'description' => 'Zalm op de huid gebakken met romige aardappel puree en geblancheerde groente',
                'allergies' => 'Vis Lactose',
                'price' => 21,
                'created_at' => '2022-03-14 09:37:05',
                'updated_at' => '2022-03-15 15:16:30',
            ),
            3 => 
            array (
                'id' => 5,
                'foodtype_id' => 4,
                'name' => 'Biefstuk',
                'description' => 'Biefstuk met bla en bla',
                'allergies' => 'bla',
                'price' => 30,
                'created_at' => '2022-03-14 10:50:21',
                'updated_at' => '2022-03-15 15:16:37',
            ),
            4 => 
            array (
                'id' => 6,
                'foodtype_id' => 9,
                'name' => 'Eend',
                'description' => 'eend',
                'allergies' => 'eend',
                'price' => 33,
                'created_at' => '2022-03-15 15:31:25',
                'updated_at' => '2022-03-15 15:31:25',
            ),
            5 => 
            array (
                'id' => 7,
                'foodtype_id' => 9,
                'name' => 'kalkoen',
                'description' => 'kalkoen met groente en kalkoen groente en garnituur',
                'allergies' => 'veel',
                'price' => 40,
                'created_at' => '2022-03-15 15:31:50',
                'updated_at' => '2022-03-15 15:31:50',
            ),
        ));
        
        
    }
}