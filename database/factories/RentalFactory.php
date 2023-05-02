<?php

namespace Database\Factories;

use App\Models\Realestate;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rental>
 */
class RentalFactory extends Factory
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
        $realestate_id = fake()->randomElement($realestate_ids);
        $booking_date = fake()->dateTimeBetween('-1 year');
        $seged = Carbon::createFromDate($booking_date)->addDay()->toDateString();
        $start_date = fake()->dateTimeInInterval($seged, '+1 year -1 day');
        $seged = Carbon::createFromDate($start_date)->addDay()->addMonth()->toDateString();
        $end_date =  fake()->dateTimeInInterval($seged, '+1 year -1 month -1 day');
        if (rand(0, 2) == 0) {
            $end_date = null;
        }

        return [
            'user_id' => fake()->randomElement($user_ids),
            'realestate_id' => $realestate_id,
            'booking_date' => $booking_date,
            'start_date' => $start_date,
            'end_date' => $end_date
        ];
    }
}
