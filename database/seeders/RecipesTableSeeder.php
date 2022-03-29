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
                'updated_at' => '2022-03-28 13:58:32',
            ),
            1 => 
            array (
                'id' => 2,
                'dish_id' => 1,
                'name' => 'Aardappelpuree',
                'steps' => 'kook aardappelen, pureer, voeg melk en room toe.',
                'created_at' => '2022-03-14 09:35:05',
                'updated_at' => '2022-03-28 13:58:32',
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
                'dish_id' => 3,
                'name' => 'Biefstuk',
                'steps' => 'Bak de biefstuk',
                'created_at' => '2022-03-15 10:30:13',
                'updated_at' => '2022-03-28 12:59:27',
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
                'updated_at' => '2022-03-28 14:00:05',
            ),
            6 => 
            array (
                'id' => 25,
                'dish_id' => 8,
                'name' => 'Bananen cake recept',
                'steps' => 'Doe bloem banaan boter en suiker in een mengkom meng doe dan nog iets en dan nog iets',
                'created_at' => '2022-03-28 13:59:31',
                'updated_at' => '2022-03-28 13:59:45',
            ),
        ));
        
        
    }
}