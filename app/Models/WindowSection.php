<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @property-read int $id
 * @property int $number Порядковый номер секции на окне, начинается с 0
 * @mixin \Illuminate\Database\Query\Builder
 */
class WindowSection extends Model
{
    use HasFactory;

    //По умолчанию Laravel попытается использовать таблицу
    //<название модели> + 's' = window_sections,
    //но windowS_sections звучит лучше
    protected $table = 'windows_sections';

    protected $fillable = [
        'number',
        'window_id',
    ];

    public $timestamps = false;

    public function window(): BelongsTo
    {
        return $this->belongsTo(Window::class);
    }

    public function rollerBlind(): HasOne
    {
        return $this->hasOne(RollerBlind::class);
    }

    public function windowOpener(): HasOne
    {
        return $this->hasOne(WindowOpener::class);
    }
}
