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
                'foodtype_id' => 8,
                'name' => 'Zalm met pure en groente',
                'description' => 'Zalm op de huid gebakken met romige aardappel puree en geblancheerde groente',
                'allergies' => 'Vis Lactose',
                'price' => 21,
                'photo_name' => 'Zalm.jpg',
                'path' => 'images/fQUEWwvctL7UWYa2t7VUQpAeooXx89pHFtRrINAY.jpg',
                'created_at' => '2022-03-14 09:37:05',
                'updated_at' => '2022-03-28 14:00:49',
            ),
            1 => 
            array (
                'id' => 3,
                'foodtype_id' => 8,
                'name' => 'Biefstuk',
                'description' => 'Biefstuk met bla en bla',
                'allergies' => 'bla',
                'price' => 30,
                'photo_name' => 'Hamburger.jpg',
                'path' => 'images/yWxnDLPETAgi0nvnC2CDAzzzcwV7U1bP2NeNxAw5.jpg',
                'created_at' => '2022-03-14 10:50:21',
                'updated_at' => '2022-03-28 12:59:27',
            ),
            2 => 
            array (
                'id' => 6,
                'foodtype_id' => 9,
                'name' => 'Eend',
                'description' => 'eend',
                'allergies' => 'eend',
                'price' => 33,
                'photo_name' => 'Banaan.jpg',
                'path' => 'images/StHkcURkrdHlfUVbohaVp4T0AD5BiQNHYwppT7cO.jpg',
                'created_at' => '2022-03-15 15:31:25',
                'updated_at' => '2022-03-28 12:59:50',
            ),
            3 => 
            array (
                'id' => 7,
                'foodtype_id' => 9,
                'name' => 'kalkoen',
                'description' => 'kalkoen met groente en kalkoen groente en garnituur',
                'allergies' => 'veel',
                'price' => 40,
                'photo_name' => 'Hamburger.jpg',
                'path' => 'images/Buvj4CNW6sFQHg0BCToIszvrglFpsGK6GKofAm9F.jpg',
                'created_at' => '2022-03-15 15:31:50',
                'updated_at' => '2022-03-28 14:00:05',
            ),
            4 => 
            array (
                'id' => 8,
                'foodtype_id' => 4,
                'name' => 'Banaan',
                'description' => 'Bananencake met bananen',
                'allergies' => 'Gluten',
                'price' => 5,
                'photo_name' => 'Banaan.jpg',
                'path' => 'images/dtCHzQJWObNnmopWrXrrO47LlvT8invGB0pvZOCd.jpg',
                'created_at' => '2022-03-28 12:40:49',
                'updated_at' => '2022-03-28 13:59:57',
            ),
            5 => 
            array (
                'id' => 9,
                'foodtype_id' => 8,
                'name' => 'Zalm',
                'description' => 'Zalm op de huid gebakken met romige aardappel puree en geblancheerde groenteeee',
                'allergies' => 'Vis',
                'price' => 20,
                'photo_name' => 'Zalm.jpg',
                'path' => 'images/iN4LzKef5zzCks6QEgul8DLqm6wjenqdoHBguyrq.jpg',
                'created_at' => '2022-03-28 12:49:15',
                'updated_at' => '2022-03-28 12:58:49',
            ),
            6 => 
            array (
                'id' => 10,
                'foodtype_id' => 1,
                'name' => 'a',
                'description' => 'a',
                'allergies' => 'a',
                'price' => 1,
                'photo_name' => 'Banaan.jpg',
                'path' => 'images/DikIsz3b9VoP7IexaKF66MKGzZVqgK0tWRB08Xsg.jpg',
                'created_at' => '2022-03-28 13:54:48',
                'updated_at' => '2022-03-28 13:54:48',
            ),
        ));
        
        
    }
}