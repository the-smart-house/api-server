<?php

use App\Helpers\BlueprintHelper;
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

            BlueprintHelper::foreignIdWithConstraint(
                $table,
                Room::class, 'room_id'
            );
        });
    }

    public function down()
    {
        Schema::dropIfExists('temperature_sensors');
    }
}
