<?php

use App\Models\User;
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
            $table->id();
            $table->string('name');
            $table->string('lastnamef');
            $table->string('lastnamem');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('role');
            $table->integer('nassist')->default('0');
            $table->string('especialidad')->nullable();
            $table->string('cedula')->nullable();
            $table->timestamps();
        });

        User::create([ 'name' => 'usuario', 'lastnamef' => 'de','lastnamem' => 'prueba','email' => 'prueba@prueba.com' ,'password' => 'EverestH*me32','role'=>'1']);

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
