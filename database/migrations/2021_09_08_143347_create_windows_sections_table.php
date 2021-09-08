<?php

use App\Models\Window;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateWindowsSectionsTable extends Migration
{
    public function up()
    {
        Schema::create('windows_sections', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('number');

            $table->foreignIdFor(Window::class, 'window_id');

            $table->foreign('window_id', 'fk_windows_sections_windows')
                ->references('id')
                ->on('windows');

            //У окна не может быть двух секций с одинаковым номером
            //(т.е. не может быть двух "первых" секций), поэтому устанавливаем
            //ограничение на уникальность

            $table->unique(
                ['number', 'window_id'],
                'uq_windows_sections_number_window_id'
            );
        });
    }

    public function down()
    {
        Schema::dropIfExists('windows_sections');
    }
}
