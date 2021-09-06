<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->string('first_name');
            $table->string('last_name');

            //Безопасная длина email - 256 символов (https://stackoverflow.com/a/1199238/12983861)
            $table->string('email', 256)->unique('uq_users_email');

            //Используем для хеширования паролей встроенную функцию password_hash()
            //с алгоритмом PASSWORD_BCRYPT. Длинна полученного хеша - 60 символов.
            //Примечание: с использованием этого алгоритма макс. длина пароля - 72 символа
            $table->char('password_hash', 60);
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
