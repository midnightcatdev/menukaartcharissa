<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IngredientRecipeTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ingredient_recipe')->delete();
        
        \DB::table('ingredient_recipe')->insert(array (
            0 => 
            array (
                'id' => 1,
                'recipe_id' => 1,
                'ingredient_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'recipe_id' => 2,
                'ingredient_id' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'recipe_id' => 2,
                'ingredient_id' => 3,
            ),
            3 => 
            array (
                'id' => 4,
                'recipe_id' => 2,
                'ingredient_id' => 4,
            ),
            4 => 
            array (
                'id' => 5,
                'recipe_id' => 2,
                'ingredient_id' => 5,
            ),
            5 => 
            array (
                'id' => 9,
                'recipe_id' => 4,
                'ingredient_id' => 1,
            ),
            6 => 
            array (
                'id' => 12,
                'recipe_id' => 3,
                'ingredient_id' => 1,
            ),
            7 => 
            array (
                'id' => 18,
                'recipe_id' => 5,
                'ingredient_id' => 2,
            ),
            8 => 
            array (
                'id' => 19,
                'recipe_id' => 6,
                'ingredient_id' => 1,
            ),
            9 => 
            array (
                'id' => 20,
                'recipe_id' => 7,
                'ingredient_id' => 1,
            ),
            10 => 
            array (
                'id' => 21,
                'recipe_id' => 10,
                'ingredient_id' => 1,
            ),
            11 => 
            array (
                'id' => 22,
                'recipe_id' => 11,
                'ingredient_id' => 1,
            ),
            12 => 
            array (
                'id' => 23,
                'recipe_id' => 13,
                'ingredient_id' => 1,
            ),
            13 => 
            array (
                'id' => 24,
                'recipe_id' => 14,
                'ingredient_id' => 1,
            ),
            14 => 
            array (
                'id' => 25,
                'recipe_id' => 19,
                'ingredient_id' => 1,
            ),
            15 => 
            array (
                'id' => 26,
                'recipe_id' => 20,
                'ingredient_id' => 1,
            ),
            16 => 
            array (
                'id' => 27,
                'recipe_id' => 21,
                'ingredient_id' => 2,
            ),
            17 => 
            array (
                'id' => 28,
                'recipe_id' => 21,
                'ingredient_id' => 3,
            ),
            18 => 
            array (
                'id' => 29,
                'recipe_id' => 21,
                'ingredient_id' => 4,
            ),
            19 => 
            array (
                'id' => 32,
                'recipe_id' => 22,
                'ingredient_id' => 6,
            ),
            20 => 
            array (
                'id' => 33,
                'recipe_id' => 22,
                'ingredient_id' => 4,
            ),
            21 => 
            array (
                'id' => 34,
                'recipe_id' => 23,
                'ingredient_id' => 13,
            ),
            22 => 
            array (
                'id' => 35,
                'recipe_id' => 24,
                'ingredient_id' => 14,
            ),
            23 => 
            array (
                'id' => 36,
                'recipe_id' => 25,
                'ingredient_id' => 3,
            ),
            24 => 
            array (
                'id' => 37,
                'recipe_id' => 25,
                'ingredient_id' => 4,
            ),
            25 => 
            array (
                'id' => 38,
                'recipe_id' => 25,
                'ingredient_id' => 10,
            ),
            26 => 
            array (
                'id' => 39,
                'recipe_id' => 25,
                'ingredient_id' => 11,
            ),
            27 => 
            array (
                'id' => 40,
                'recipe_id' => 25,
                'ingredient_id' => 16,
            ),
            28 => 
            array (
                'id' => 41,
                'recipe_id' => 26,
                'ingredient_id' => 15,
            ),
        ));
        
        
    }
}