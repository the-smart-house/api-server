<?php

use App\Models\WindowSection;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRollerBlindsTable extends Migration
{
    public function up()
    {
        Schema::create('roller_blinds', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('lowering_percent');

            $table->foreignIdFor(WindowSection::class, 'window_section_id');

            $table->foreign('window_section_id')
                ->references('id')
                ->on('windows_sections');

            //На одной секции может быть максимум одна штора
            $table->unique(['window_section_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('roller_blinds');
    }
}
