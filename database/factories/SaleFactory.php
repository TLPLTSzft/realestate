<?php

namespace Database\Factories;

use App\Models\Realestate;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sale>
 */
class SaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user_ids = User::all()->pluck('id');
        $realestate_ids = Realestate::all()->pluck('id');
        $realestate_id = fake()->unique()->randomElement($realestate_ids);
        $sale_date = fake()->dateTimeInInterval('+1 year', '+1 year');

        /*
        $sale_date = fake()->dateTimeBetween('-10 years', '-9 years');
        // $rent_ids = Rent::all()->pluck('end_date', 'id')->where('realestate_id', '==', $realestate_id);
        $rent_ids = Rent::all()->pluck('end_date', 'id');
        foreach ($rent_ids as $key => $value) {
            if (Carbon::createFromDate($sale_date) < Carbon::createFromDate($value)) {
                // if ($value != null) {
                $sale_date = fake()->dateTimeBetween('-5 years', '-4 years');
                // $sale_date = $value;
            }
        }
        */

        return [
            'user_id' => fake()->randomElement($user_ids),
            'realestate_id' => $realestate_id,
            'sale_date' => $sale_date
        ];
    }
}
