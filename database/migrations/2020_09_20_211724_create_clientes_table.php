<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('email')->nullable()->unique();
            $table->timestamps();
        }); 
        
        DB::table('clientes')->insert([
            ['nome' => 'Ittalo Lima', 'email' => 'ittalolz@gmail.com'],
            ['name' => 'Cliente 01', 'email' => 'cliente_1@cliente.com'],
            ['name' => 'Cliente 02', 'email' => 'cliente_2@cliente.com'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
