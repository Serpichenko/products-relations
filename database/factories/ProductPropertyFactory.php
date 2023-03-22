<?php

namespace Database\Factories;

use App\Models\ProductProperty;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ProductProperty>
 */
class ProductPropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => rand(1,20),
            'property_id' => rand(1,100),
            'property_value_id' => rand(1,150),
        ];
    }
}
