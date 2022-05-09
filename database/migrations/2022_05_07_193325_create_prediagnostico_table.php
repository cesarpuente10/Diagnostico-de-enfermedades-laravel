<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrediagnosticoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prediagnostico', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->timestamp('fecha');
            $table->integer('edad');
            $table->char('sexo');
            $table->string('localidad');
            $table->float('peso');
            $table->float('estatura');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
