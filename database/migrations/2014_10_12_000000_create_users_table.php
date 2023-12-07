<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); //Integer unsigned increment
            $table->string('name',100); //varchar (255), si se necesitan mas seria de tipo text
            $table->string('email')->unique(); //Unique solo deja que en bd exista uno 
            $table->timestamp('email_verified_at')->nullable(); //guarda la fecha de verificacion, nullable puede quedar vacio
            $table->string('password');
            $table->rememberToken();//mantene la sesion iniciada
            $table->timestamps();// dos columnas create_at y update_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
