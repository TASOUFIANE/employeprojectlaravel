<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'registration_number' => $this->faker->randomDigit(),
            'fullname' => $this->faker->name(),
            'departement' => $this->faker->word(),
            'hire_date' =>$this->faker->date(), 
            'phone' => $this->faker->numberBetween(),
            'adreese' => $this->faker->address(),
            'city' => $this->faker->city(),
        ];
    }
}
