<?php

namespace Database\Seeders;

use App\Models\Furnishing;
use Illuminate\Database\Seeder;

class FurnishingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Furnishing::factory()->create(['type' => 'without furniture']);
        Furnishing::factory()->create(['type' => 'basic equipment']);
        Furnishing::factory()->create(['type' => 'fully furnished']);
    }
}
