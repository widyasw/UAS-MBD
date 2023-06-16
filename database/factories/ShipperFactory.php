<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Shipper;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shipper>
 */
class ShipperFactory extends Factory
{
    protected $model = Shipper::class;

    public function definition()
    {
        return [
            'company_name' => $this->faker->company,
            'phone' => $this->faker->phoneNumber,
        ];
    }
}
