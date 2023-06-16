<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Employee;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition()
    {
        return [
            'customers_id' => Customer::factory(),
            'employees_id' => Employee::factory(),
            'order_date' => $this->faker->date,
            'required_date' => $this->faker->date,
            'shipped_date' => $this->faker->date,
            'ship_via' => $this->faker->word,
            'ship_freight' => $this->faker->randomFloat(2, 10, 100),
            'ship_name' => $this->faker->name,
            'ship_address' => $this->faker->address,
            'ship_city' => $this->faker->city,
            'ship_region' => $this->faker->state,
            'ship_postal_code' => $this->faker->postcode,
            'ship_country' => $this->faker->country,
        ];
    }
}
