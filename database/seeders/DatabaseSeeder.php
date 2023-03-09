<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Recipe;
use App\Models\User;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(12)->create();
        Category::factory(5)->create();

        for ($i = 1; $i < 13; $i++) {
            Recipe::factory(rand(1, 12))->create([
                'user_id' => $i,
                'category_id' => rand(1, 5)
            ]);
        }
    }
}
