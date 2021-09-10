<?php

use App\Helpers\BlueprintHelper;
use App\Models\WindowSection;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWindowOpenersTable extends Migration
{
    public function up()
    {
        Schema::create('window_openers', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_open');

            BlueprintHelper::foreignIdWithConstraint(
                $table,
                WindowSection::class, 'window_section_id'
            );

            //На одной секции может быть установлен максимум
            //один модуль открывания
            $table->unique(['window_section_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('window_openers');
    }
}
