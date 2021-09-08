<?php

use App\Models\Room;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemperatureSensorsTable extends Migration
{
    public function up()
    {
        Schema::create('temperature_sensors', function (Blueprint $table) {
            $table->id();
            $table->string('title');

            $table->foreignIdFor(Room::class, 'room_id');

            $table->foreign('room_id', 'fk_temperature_sensors_rooms')
                ->references('id')
                ->on('rooms');

            $table->unique(
                ['title', 'room_id'],
                'uq_temperature_sensors_title_room_id'
            );
        });
    }

    public function down()
    {
        Schema::dropIfExists('temperature_sensors');
    }
}
