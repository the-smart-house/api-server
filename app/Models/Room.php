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
class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'house_id',
    ];

    public $timestamps = false;

    public function windows(): HasMany
    {
        return $this->hasMany(Window::class);
    }
}
