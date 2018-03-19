<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partes', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fechaParte');
            $table->string('referenciaParte', 255);

            
            $table->integer('tipoRevision_id')->nullable();

            $table->integer('sala_id')->nullable();
            $table->integer('maquina_id')->nullable();
            $table->integer('revision_id')->nullable();

            $table->integer('user_id')->nullable();
            $table->integer('proveedor_id')->nullable();

            $table->string('tiempo', 50);
            $table->string('tipoHoras', 50);
            $table->string('desplazamiento', 50);
            $table->string('km', 50);
            $table->string('vehiculo', 50);

            
            $table->string('horaInicio', 50);
            $table->string('horaFin', 50);
            $table->string('descripcion', 255);

            $table->string('title', 255);

            $table->text('content');

            $table->string('slug')->nullable();
            $table->tinyInteger('status')->default(1);
         
            
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
        Schema::dropIfExists('partes');
    }
}
