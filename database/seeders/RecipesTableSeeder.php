<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RecipesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('recipes')->delete();
        
        \DB::table('recipes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'dish_id' => 1,
                'name' => 'Zalm',
                'steps' => 'Bak de zalm in pan',
                'created_at' => '2022-03-14 09:34:15',
                'updated_at' => '2022-03-15 11:32:26',
            ),
            1 => 
            array (
                'id' => 2,
                'dish_id' => 4,
                'name' => 'Aardappelpuree',
                'steps' => 'kook aardappelen, pureer, voeg melk en room toe.',
                'created_at' => '2022-03-14 09:35:05',
                'updated_at' => '2022-03-15 15:16:30',
            ),
            2 => 
            array (
                'id' => 21,
                'dish_id' => 3,
                'name' => 'Aardappelpuree',
                'steps' => 'kook aardappelen, pureer, voeg melk en room toe.',
                'created_at' => '2022-03-15 10:30:02',
                'updated_at' => '2022-03-15 11:00:11',
            ),
            3 => 
            array (
                'id' => 22,
                'dish_id' => 5,
                'name' => 'Biefstuk',
                'steps' => 'Bak de biefstuk',
                'created_at' => '2022-03-15 10:30:13',
                'updated_at' => '2022-03-15 15:16:37',
            ),
            4 => 
            array (
                'id' => 23,
                'dish_id' => 6,
                'name' => 'Eend',
                'steps' => 'Bakken',
                'created_at' => '2022-03-15 15:30:52',
                'updated_at' => '2022-03-15 15:31:25',
            ),
            5 => 
            array (
                'id' => 24,
                'dish_id' => 7,
                'name' => 'Kalkoen',
                'steps' => 'bakken',
                'created_at' => '2022-03-15 15:31:15',
                'updated_at' => '2022-03-15 15:31:50',
            ),
        ));
        
        
    }
}