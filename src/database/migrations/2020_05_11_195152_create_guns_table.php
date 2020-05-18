<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guns', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('ammo');
            $table->string('award');
            $table->string('damage');
            $table->string('firerate');
            $table->string('recoil_control');
            $table->string('accurate_range');
            $table->string('armor_penetration');
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categoria_armas')->onDelete('cascade');
            $table->unsignedBigInteger('jogo_id');
            $table->foreign('jogo_id')->references('id')->on('jogos')->onDelete('cascade');
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
        Schema::dropIfExists('guns');
    }
}
