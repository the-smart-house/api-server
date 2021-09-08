<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
