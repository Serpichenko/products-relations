<?php

namespace App\Repositories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductRepository
{
    public function getProductByVariationId(int $variantId): ?Product
    {
        return Product::whereHas('variants', function (Builder $query) use ($variantId) {
            $query->where('variant_id', '=', $variantId);
        })->with(['variants' => function (HasMany $query) use ($variantId) {
            $query->where('variant_id', '=', $variantId);
        }])->firstOrFail();
    }
}