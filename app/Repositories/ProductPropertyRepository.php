<?php

namespace App\Repositories;

use App\Models\ProductProperty;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;

class ProductPropertyRepository
{
    public function getProductProperties(int $productId, int $variationId): Collection
    {
        /**
         * @see ProductProperty::property()
         * @see ProductProperty::propertyValue()
         */
        $properties = ProductProperty::with(['property', 'propertyValue'])->where('product_id', '=', $productId)->orderBy('variant_id')->get();

        $productVariant = $properties->filter(function ($item) use ($variationId) {
            return $item->variant_id === $variationId;
        })->map(function ($item) {
            return $item->property_value_id;
        })->unique()->toArray();

        $groupedVariants = $properties->groupBy('variant_id');
        $groupedVariants = $groupedVariants->filter(function ($item) use ($productVariant) {
            $toCheckDiff = [];
            foreach ($item as $variant) {
                $toCheckDiff[] = $variant->property_value_id;
            }
            $diff = array_diff($productVariant, $toCheckDiff);
            if (count($diff) == 1) {
                return $item;
            }
            return false;
        })->flatten(1)->sortBy('property_value_id')->unique('property_value_id');


        return $groupedVariants->mapToGroups(function ($item) {
            return [$item->property->title => $item];
        });
    }
}