<?php

use App\Helpers\BlueprintHelper;
use App\Models\Room;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLightSwitchesTable extends Migration
{
    public function up()
    {
        Schema::create('light_switches', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->boolean('is_on');

            BlueprintHelper::foreignIdWithConstraint(
                $table,
                Room::class, 'room_id'
            );
        });
    }

    public function down()
    {
        Schema::dropIfExists('light_switches');
    }
}
