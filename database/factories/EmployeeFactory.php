<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => $this->faker->unique()->numberBetween(1, 100),
            'department_id' => 1,
            'employee_number' => $this->faker->numberBetween(0, 200),
            'first_name' => $this->faker->name(),
            'last_name' => $this -> faker -> name(),
            'birthdate' => $this->faker->date(),
            'contact_number' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),            

        ];
    }
}
