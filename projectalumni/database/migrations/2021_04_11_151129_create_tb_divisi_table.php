<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbDivisiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_divisi', function (Blueprint $table) {
            $table->bigIncrements('id_divisi');
            $table->string('id_jabatan');
            $table->string('id_pengurus');
            $table->string('nama_divisi');
            $table->string('nama_co');
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
        Schema::dropIfExists('tb_divisi');
    }
}
