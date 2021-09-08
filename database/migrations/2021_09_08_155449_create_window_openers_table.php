<?php

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

            $table->foreignIdFor(WindowSection::class, 'window_section_id');

            $table->foreign('window_section_id')
                ->references('id')
                ->on('windows_sections');

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
