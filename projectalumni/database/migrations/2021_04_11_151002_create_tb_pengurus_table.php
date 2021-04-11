<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPengurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pengurus', function (Blueprint $table) {
            $table->bigIncrements('id_pengurus');
            $table->string('id_alumni');
            $table->string('id_jabatan');
            $table->string('id_angkatan');
            $table->string('nama_pengurus');
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
        Schema::dropIfExists('tb_pengurus');
    }
}
