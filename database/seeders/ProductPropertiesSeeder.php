<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductPropertiesSeeder extends Seeder
{
    private array $properties = [
        [
            'variant_id' => 1,
            'product_id' => 1,
            'property_id' => 1,
            'property_value_id' => 1,
        ],
        [
            'variant_id' => 1,
            'product_id' => 1,
            'property_id' => 2,
            'property_value_id' => 4,
        ],
        [
            'variant_id' => 2,
            'product_id' => 1,
            'property_id' => 1,
            'property_value_id' => 1,
        ],
        [
            'variant_id' => 2,
            'product_id' => 1,
            'property_id' => 2,
            'property_value_id' => 5,
        ],
        [
            'variant_id' => 3,
            'product_id' => 1,
            'property_id' => 1,
            'property_value_id' => 2,
        ],
        [
            'variant_id' => 3,
            'product_id' => 1,
            'property_id' => 2,
            'property_value_id' => 4,
        ],
        [
            'variant_id' => 4,
            'product_id' => 1,
            'property_id' => 1,
            'property_value_id' => 2,
        ],
        [
            'variant_id' => 4,
            'product_id' => 1,
            'property_id' => 2,
            'property_value_id' => 5,
        ],
        [
            'variant_id' => 5,
            'product_id' => 1,
            'property_id' => 1,
            'property_value_id' => 3,
        ],
        [
            'variant_id' => 5,
            'product_id' => 1,
            'property_id' => 2,
            'property_value_id' => 4,
        ],
        [
            'variant_id' => 6,
            'product_id' => 1,
            'property_id' => 1,
            'property_value_id' => 3,
        ],
        [
            'variant_id' => 6,
            'product_id' => 1,
            'property_id' => 2,
            'property_value_id' => 5,
        ],
    ];

    public function run(): void
    {
        foreach ($this->properties as $property) {
            DB::table('product_properties')->insert($property);
        }
    }
}
