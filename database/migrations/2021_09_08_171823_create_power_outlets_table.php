<?php

use App\Models\Room;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePowerOutletsTable extends Migration
{
    public function up()
    {
        Schema::create('power_outlets', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->boolean('is_on');

            BlueprintHelper::foreignKeyWithConstraint(
                $table,
                Room::class, 'room_id'
            );

            $table->unique(['title', 'room_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('power_outlets');
    }
}
