<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
