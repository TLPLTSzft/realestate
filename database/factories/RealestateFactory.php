<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Realestate>
 */
class RealestateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $realestate_code = fake()->unique()->regexify('[A-Z]{3}-[0-9]{3}');
        $room = fake()->numberBetween(0, 5) + fake()->numberBetween(1, 2) * 0.5;
        $furnishing = fake()->numberBetween(0, 2);
        $rental_fee = fake()->numberBetween(150, 1500);
        $sale_price = fake()->numberBetween(15, 150);
        $rand = rand(0, 10);
        if ($rand < 3) {
            $rental_fee = null;
        } elseif ($rand < 6) {
            $sale_price = null;
        }

        return [
            'realestate_code' => $realestate_code,
            'address' => fake()->address(),
            'room' => $room,
            'furnishing' => $furnishing,
            'rental_fee' => $rental_fee,
            'sale_price' => $sale_price,
            'description' => fake()->realTextBetween(10, 30, 2)
        ];
    }
}
