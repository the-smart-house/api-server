<?php

use App\Helpers\BlueprintHelper;
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

            BlueprintHelper::foreignIdWithConstraint(
                $table,
                Room::class, 'room_id'
            );
        });
    }

    public function down()
    {
        Schema::dropIfExists('water_leak_detectors');
    }
}
