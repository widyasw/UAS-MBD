<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Customer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    protected $model = Customer::class;

    public function definition()
    {
        return [
            'company_name' => $this->faker->company,
            'contact_title' => $this->faker->jobTitle,
            'address' => $this->faker->address,
            'city' => $this->faker->city,
            'region' => $this->faker->state,
            'postal_code' => $this->faker->postcode,
        ];
    }
}
