<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property-read int $id
 * @property string $title
 * @mixin \Illuminate\Database\Query\Builder
 */
class Window extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_id',
        'title',
    ];

    public $timestamps = false;

    public function sections(): HasMany
    {
        return $this->hasMany(WindowSection::class);
    }
}
