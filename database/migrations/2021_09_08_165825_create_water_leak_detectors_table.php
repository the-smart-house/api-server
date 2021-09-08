<?php

use App\Models\Room;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWaterLeakDetectorsTable extends Migration
{
    public function up()
    {
        Schema::create('water_leak_detectors', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->boolean('is_active');

            $table->foreignIdFor(Room::class, 'room_id');

            $table->foreign('room_id')
                ->references('id')
                ->on('rooms');

            $table->unique(['title', 'room_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('water_leak_detectors');
    }
}
