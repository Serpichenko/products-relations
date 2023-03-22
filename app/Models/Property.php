<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Carbon;

/**
 * App\Models\Property
 *
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property string $title
 * @property-read Collection<int, PropertyValue> $value
 * @property-read int|null $value_count
 * @method static Builder|Property newModelQuery()
 * @method static Builder|Property newQuery()
 * @method static Builder|Property query()
 * @method static Builder|Property whereCreatedAt($value)
 * @method static Builder|Property whereDeletedAt($value)
 * @method static Builder|Property whereId($value)
 * @method static Builder|Property whereTitle($value)
 * @method static Builder|Property whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Property extends Model
{
    use HasFactory;

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'product_properties', 'product_id', 'id')->withTimestamps();
    }

    public function value(): BelongsToMany
    {
        return $this->BelongsToMany(PropertyValue::class, 'product_properties','property_id', 'id');
    }
}
