<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition()
    {
        return [
            'category_id' => $this->faker->unique()->numberBetween(1, 100),
            'category_name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'picture' => null,
        ];
    }
}
