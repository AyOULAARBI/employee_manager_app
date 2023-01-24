<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'registration_num' => $this->faker->unique()->randomNumber(),
            'full_name' => $this->faker->name(),
            'address' => $this->faker->address(),
            'city'=>$this->faker->city(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'departement' => $this->faker->word(),
            'hired_at' => $this->faker->date(),
        ];
    }
}
