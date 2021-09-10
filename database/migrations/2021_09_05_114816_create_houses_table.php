<?php

use App\Helpers\BlueprintHelper;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('title'); //TODO: установить макс. длину

            BlueprintHelper::foreignIdWithConstraint(
                $table,
                User::class,
                'user_id'
            );
        });
    }

    public function down()
    {
        Schema::dropIfExists('houses');
    }
}
