<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DaypartsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('dayparts')->delete();
        
        \DB::table('dayparts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Ochtend',
                'created_at' => '2022-03-14 08:39:09',
                'updated_at' => '2022-03-14 09:37:30',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Middag',
                'created_at' => '2022-03-14 08:39:16',
                'updated_at' => '2022-03-14 08:39:16',
            ),
            2 => 
            array (
                'id' => 28,
                'name' => 'Avond',
                'created_at' => '2022-03-14 15:57:27',
                'updated_at' => '2022-03-14 15:57:27',
            ),
        ));
        
        
    }
}