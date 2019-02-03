<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprasTable extends Migration
{
    public function up()
    {
       //Definição da Tabela

        Schema::create('compras', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idCliente')->unsigned()->nullable();
            $table->integer('idInvestimento')->unsigned()->nullable();
            $table->string('dataInicial');
            $table->string('dataResgate');
            $table->timestamps();
        });

        //Definição da Chave Estrangeira(FK)
        Schema::table('compras', function (Blueprint $table) {
            $table->foreign('idCliente')->references('id')->on('clientes')->onDelete('set null');
            $table->foreign('idInvestimento')->references('id')->on('investimentos')->onDelete('set null');
        });

    }

    public function down()
    {
        Schema::dropIfExists('compras');
    }
}
