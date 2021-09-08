<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property-read int id
 * @property string $title
 * @mixin \Illuminate\Database\Query\Builder
 */
class House extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
    ];

    public $timestamps = false;

    public function rooms(): HasMany
    {
        return $this->hasMany(Room::class);
    }
}
