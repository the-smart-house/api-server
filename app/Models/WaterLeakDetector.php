<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property-read int $id
 * @property string $title
 * @mixin \Illuminate\Database\Query\Builder
 */
class WaterLeakDetector extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'room_id',
    ];

    public $timestamps = false;
}
