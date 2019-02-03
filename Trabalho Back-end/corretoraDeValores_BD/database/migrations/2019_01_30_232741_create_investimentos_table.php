<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvestimentosTable extends Migration
{
    public function up()
    {
        Schema::create('investimentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('tipo');
            $table->integer('preco')->unsigned();
            $table->string('risco');
            $table->string('liquidez');
            $table->string('procedencia');
            $table->string('rentabilidade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('investimentos');
    }
}
