<?php

namespace App\Models;

use Database\Factories\PropertyValueFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\PropertyValue
 *
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string $value
 * @method static Builder|PropertyValue newModelQuery()
 * @method static Builder|PropertyValue newQuery()
 * @method static Builder|PropertyValue query()
 * @method static Builder|PropertyValue whereCreatedAt($value)
 * @method static Builder|PropertyValue whereId($value)
 * @method static Builder|PropertyValue whereUpdatedAt($value)
 * @method static Builder|PropertyValue whereValue($value)
 * @method static PropertyValueFactory factory($count = null, $state = [])
 * @mixin Eloquent
 */
class PropertyValue extends Model
{
    use HasFactory;
}
