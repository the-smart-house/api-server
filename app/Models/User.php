<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * @property-read int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $password_hash
 * @mixin \Illuminate\Database\Query\Builder
 */
class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password_hash',
    ];

    protected $hidden = [
        'password_hash',
    ];

    public $timestamps = false;

    public function houses(): HasMany
    {
        return $this->hasMany(House::class);
    }
}

