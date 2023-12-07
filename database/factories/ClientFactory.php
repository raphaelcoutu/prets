<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'charge_administration_fees' => $this->faker->boolean(70),
            'street_number' => $this->faker->numberBetween(100,5000),
            'street_name' => $this->faker->streetName,
            'city' => 'Sherbrooke',
            'email' => $this->faker->email,
            'phone_number_1' => $this->faker->phoneNumber,
            'phone_number_2' => $this->faker->phoneNumber,
            'fax_number' => $this->faker->phoneNumber
        ];
    }
}
