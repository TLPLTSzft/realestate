<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(20)->create();

        $this->call(FurnishingSeeder::class);
        $this->call(RealestateSeeder::class);
        $this->call(RentalSeeder::class);
        $this->call(SaleSeeder::class);
    }
}
