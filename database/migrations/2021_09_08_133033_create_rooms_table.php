<?php

use App\Helpers\BlueprintHelper;
use App\Models\House;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('title');

            BlueprintHelper::foreignKeyWithConstraint(
                $table,
                House::class, 'house_id'
            );
        });
    }

    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
