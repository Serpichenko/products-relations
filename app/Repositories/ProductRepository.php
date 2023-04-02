<?php

namespace App\Repositories;

use App\Models\Product;
use App\Models\ProductProperty;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;

class ProductRepository
{
    public function getAllProducts(): Collection
    {
        return Product::all()->toBase();
    }

    public function getProductByVariationId(int $variantId): ?Product
    {
        return Product::whereHas('variants', function (Builder $query) use ($variantId) {
            $query->where('variant_id', '=', $variantId);
        })->with(['variants' => function (HasMany $query) use ($variantId) {
            $query->where('variant_id', '=', $variantId);
        }])->firstOrFail();
    }
}