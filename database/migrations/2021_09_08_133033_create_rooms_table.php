<?php

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

            $table->foreignIdFor(House::class, 'house_id');

            $table->foreign('house_id')
                ->references('id')
                ->on('houses');

            $table->unique(['title', 'house_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
