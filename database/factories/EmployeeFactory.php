<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employee;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    protected $model = Employee::class;

    public function definition()
    {
        return [
            'lastname' => $this->faker->lastName,
            'firstname' => $this->faker->firstName,
            'title' => $this->faker->jobTitle,
            'title_of_courtesy' => $this->faker->title,
            'birthdate' => $this->faker->date,
            'hire_date' => $this->faker->date,
            'address' => $this->faker->address,
            'city' => $this->faker->city,
            'region' => $this->faker->state,
        ];
    }
}
