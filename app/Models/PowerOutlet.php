<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property-read int $id
 * @property string $title
 * @property bool $is_on
 * @mixin \Illuminate\Database\Query\Builder
 */
class PowerOutlet extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'is_on',
        'room_id',
    ];

    public $timestamps = false;
}
