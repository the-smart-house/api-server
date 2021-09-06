<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property-read int id
 * @property int
 */
class House extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
    ];

    public $timestamps = false;
}
