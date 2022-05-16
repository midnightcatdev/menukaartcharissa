<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(DaypartsTableSeeder::class);
        $this->call(DishesTableSeeder::class);
        $this->call(FoodtypesTableSeeder::class);
        $this->call(IngredientRecipeTableSeeder::class);
        $this->call(IngredientsTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(PersonalAccessTokensTableSeeder::class);
        $this->call(RecipesTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(RestaurantsTableSeeder::class);
    }
}
