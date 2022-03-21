<?php

namespace Database\Factories;

use App\Models\statuses;
use Illuminate\Database\Eloquent\Factories\Factory;

class SalesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'name' => $this->faker->name,
            // 'phone' => $this->faker->phoneNumber,
            // 'email' => $this->faker->unique()->safeEmail(),
            // 'adress' => $this->faker->text,
            // 'name_sell' => $this->faker->text,
            // 'status_id' => statuses::all()->random()->id,
        ];
    }
}
