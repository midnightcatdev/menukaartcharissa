<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FoodtypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('foodtypes')->delete();
        
        \DB::table('foodtypes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'daypart_id' => 1,
                'name' => 'Ontbijt',
                'created_at' => '2022-03-14 08:39:46',
                'updated_at' => '2022-03-14 09:37:44',
            ),
            1 => 
            array (
                'id' => 2,
                'daypart_id' => 1,
                'name' => 'Soep',
                'created_at' => '2022-03-14 08:39:50',
                'updated_at' => '2022-03-14 08:39:50',
            ),
            2 => 
            array (
                'id' => 4,
                'daypart_id' => 2,
                'name' => 'Lunch',
                'created_at' => '2022-03-14 08:40:04',
                'updated_at' => '2022-03-14 08:40:04',
            ),
            3 => 
            array (
                'id' => 8,
                'daypart_id' => 28,
                'name' => 'Vis hoofdgerechten',
                'created_at' => '2022-03-15 13:21:49',
                'updated_at' => '2022-03-15 13:21:49',
            ),
            4 => 
            array (
                'id' => 9,
                'daypart_id' => 28,
                'name' => 'Vlees hoofgerechten',
                'created_at' => '2022-03-15 13:22:06',
                'updated_at' => '2022-03-15 13:22:06',
            ),
            5 => 
            array (
                'id' => 10,
                'daypart_id' => 28,
                'name' => 'Vega hoofgerechten',
                'created_at' => '2022-03-15 13:22:14',
                'updated_at' => '2022-03-15 13:22:14',
            ),
            6 => 
            array (
                'id' => 11,
                'daypart_id' => 28,
                'name' => 'Vegan hoofdgerechten',
                'created_at' => '2022-03-15 13:22:21',
                'updated_at' => '2022-03-15 13:22:21',
            ),
            7 => 
            array (
                'id' => 12,
                'daypart_id' => 28,
                'name' => 'Dessert',
                'created_at' => '2022-03-28 12:41:12',
                'updated_at' => '2022-03-28 12:41:12',
            ),
        ));
        
        
    }
}