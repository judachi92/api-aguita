<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo', 100);
            $table->string('descripcion', 255);
            $table->double('precio',12,2);
            $table->double('descuento',3,2)->nullable();
            $table->date('fechainicio_descuento')->nullable();
            $table->date('fechafin_descuento')->nullable();
            $table->text('imagen')->nullable();
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
        Schema::dropIfExists('producto');
    }
}
