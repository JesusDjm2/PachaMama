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
        $this->call(TourSeeder::class);
        $this->call(EnglishCategorySeeder::class);
        $this->call(CategoryToursenPivotSeeder::class);
    }
}
