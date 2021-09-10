<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property-read int $id
 * @property bool is_open
 * @mixin \Illuminate\Database\Query\Builder
 */
class WindowOpener extends Model
{
    use HasFactory;

    protected $fillable= [
        'is_open',
        'window_section_id',
    ];

    public $timestamps = false;
}
