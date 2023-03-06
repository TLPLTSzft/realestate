<?php

namespace Database\Seeders;

use App\Models\Realestate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RealestateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Realestate::factory(20)->create();
    }
}
