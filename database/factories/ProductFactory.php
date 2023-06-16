<?php

namespace Database\Factories;

use App\Models\Supplier;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'product_name' => $this->faker->word,
            'suppliers_id' => Supplier::factory(),
            'quantity_per_unit' => $this->faker->numberBetween(1, 10) . ' units',
            'unit_price' => $this->faker->randomFloat(2, 10, 100),
            'units_in_stock' => $this->faker->numberBetween(10, 100),
            'units_on_order' => $this->faker->numberBetween(0, 20),
            'reorder_level' => $this->faker->numberBetween(5, 15),
            'discontinued' => $this->faker->boolean,
        ];
    }
}
