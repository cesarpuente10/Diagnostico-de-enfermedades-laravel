<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrediagnosticosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prediagnosticos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('paciente_id')->unique();
            $table->timestamp('fecha');
            $table->integer('edad');
            $table->char('sexo');
            $table->float('peso');
            $table->float('estatura');
            $table->string('tel_fijo')->nullable();
            $table->string('celular');
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
