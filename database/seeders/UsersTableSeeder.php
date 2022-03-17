<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@clweb.nl',
                'email_verified_at' => NULL,
                'password' => '$2y$10$10eFMxNxEuAKPiN8bxWy1O5niNFQXJnRuM3bvrvca7h2IjRAJ6Q/i',
                'remember_token' => NULL,
                'created_at' => '2022-03-14 08:38:56',
                'updated_at' => '2022-03-14 08:38:56',
            ),
        ));
        
        
    }
}