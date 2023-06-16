<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Supplier;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Supplier>
 */
class SupplierFactory extends Factory
{
    protected $model = Supplier::class;

    public function definition()
    {
        return [
            'company_name' => $this->faker->company,
            'contact_name' => $this->faker->name,
            'contact_title' => $this->faker->jobTitle,
            'address' => $this->faker->address,
            'city' => $this->faker->city,
            'region' => $this->faker->state,
            'postal_code' => $this->faker->postcode,
        ];
    }
}
