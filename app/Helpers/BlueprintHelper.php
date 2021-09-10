<?php

namespace App\Helpers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class BlueprintHelper extends Migration
{
    public static function foreignIdWithConstraint(
        Blueprint $table,
        string $modelClass,
        string $columnName = null
    )
    {
        $table->foreignIdFor($modelClass, $columnName);

        /**
         * @var Model $model
         */
        $model = new $modelClass;

        $table->foreign($columnName)
            ->references($model->getKeyName())
            ->on($model->getTable());
    }
}
