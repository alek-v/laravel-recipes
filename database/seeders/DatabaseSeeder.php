<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Recipe;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(12)->create();

        for ($i = 1; $i < 13; $i++) {
            Recipe::factory(rand(1, 12))->create([
                'user_id' => $i
            ]);
        }
    }
}
