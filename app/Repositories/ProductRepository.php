<?php

namespace App\Repositories;

use App\Models\Product;
use App\Models\ProductProperty;
use Illuminate\Support\Collection;

class ProductRepository
{
    public function getAllProducts(): Collection
    {
        return Product::all()->toBase();
    }
    public function getProductById(int $id): ?Product
    {
        /**
         * @see Product::properties()
         * @see ProductProperty::value()
         */
        return Product::with(['properties', 'properties.value'])->find($id);
    }
}