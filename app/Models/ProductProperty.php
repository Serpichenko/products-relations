<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\ProductProperty
 *
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property int $product_id
 * @property int $property_id
 * @property int $property_value_id
 * @method static Builder|ProductProperty newModelQuery()
 * @method static Builder|ProductProperty newQuery()
 * @method static Builder|ProductProperty query()
 * @method static Builder|ProductProperty whereCreatedAt($value)
 * @method static Builder|ProductProperty whereDeletedAt($value)
 * @method static Builder|ProductProperty whereId($value)
 * @method static Builder|ProductProperty whereProductId($value)
 * @method static Builder|ProductProperty wherePropertyId($value)
 * @method static Builder|ProductProperty wherePropertyValueId($value)
 * @method static Builder|ProductProperty whereUpdatedAt($value)
 * @mixin Eloquent
 */
class ProductProperty extends Model
{
    use HasFactory;
}
