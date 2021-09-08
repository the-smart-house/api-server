<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property-read int $id
 *
 * @property int $lowering_percent
 * Процент "опускания" шторы. 100% - полностью опущена, 0% - полностью поднята
 *
 * @mixin \Illuminate\Database\Query\Builder
 */
class RollerBlind extends Model
{
    use HasFactory;

    protected $fillable = [
        'lowering_percent',
        'window_section_id',
    ];

    public $timestamps = false;
}
