<?php

use App\Helpers\BlueprintHelper;
use App\Models\House;
use App\Models\Room;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWindowsTable extends Migration
{
    public function up()
    {
        Schema::create('windows', function (Blueprint $table) {
            $table->id();
            $table->string('title');

            BlueprintHelper::foreignKeyWithConstraint(
                $table,
                Room::class, 'room_id'
            );

            $table->unique(['title', 'room_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('windows');
    }
}
