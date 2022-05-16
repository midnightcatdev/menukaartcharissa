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
                'role_id' => 1,
                'name' => 'Admin',
                'email' => 'admin@clweb.nl',
                'email_verified_at' => '2022-05-10 09:47:32',
                'password' => '$2y$10$10eFMxNxEuAKPiN8bxWy1O5niNFQXJnRuM3bvrvca7h2IjRAJ6Q/i',
                'remember_token' => NULL,
                'created_at' => '2022-03-14 08:38:56',
                'updated_at' => '2022-03-14 08:38:56',
            ),
            1 => 
            array (
                'id' => 4,
                'role_id' => 2,
                'name' => 'knecht',
                'email' => 'knecht@clweb.nl',
                'email_verified_at' => '2022-05-18 09:47:35',
                'password' => '$2y$10$4ebtslyH44QpZdSfp5B/1eowUay3Ela.qjLrA3WwiXa9cNLbYWlm6',
                'remember_token' => NULL,
                'created_at' => '2022-04-28 13:58:32',
                'updated_at' => '2022-04-28 13:58:32',
            ),
            2 => 
            array (
                'id' => 5,
                'role_id' => 1,
                'name' => 'admin',
                'email' => 'test3@hotmail.com',
                'email_verified_at' => '2022-05-16 07:47:19',
                'password' => '$2y$10$d2KXJlnACro.sC6eFyRWqO6J2pj8O6jRusNpvYrRc0YXYQmAHQO6S',
                'remember_token' => NULL,
                'created_at' => '2022-05-16 07:46:55',
                'updated_at' => '2022-05-16 07:47:19',
            ),
        ));
        
        
    }
}