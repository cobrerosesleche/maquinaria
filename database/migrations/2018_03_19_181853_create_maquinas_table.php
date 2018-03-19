<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaquinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maquinas', function (Blueprint $table) {

            $table->increments('id');

            $table->integer('marca_id')->nullable();
            $table->integer('familia_id')->nullable();
            $table->integer('categoria_id')->nullable();
            $table->integer('subCategoria_id');

            $table->integer('sala_id')->nullable();



            $table->string('nombre', 255);
            $table->string('modelo', 255);
            $table->string('numeroSerie', 50);
            $table->string('potencia', 50);
            $table->string('consumo', 50);
            $table->string('anoFabricacion', 50);
            $table->string('tipoEnergia', 50);

            $table->string('fechaAlta', 50);
            $table->string('fechaBaja', 50);

            $table->text('observaciones');
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
        Schema::dropIfExists('maquinas');
    }
}
