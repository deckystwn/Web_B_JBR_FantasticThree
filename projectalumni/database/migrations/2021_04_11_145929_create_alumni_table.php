<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumni', function (Blueprint $table) {
            $table->bigIncrements('id_alumni');
            $table->string('id_user');
            $table->string('nama_alumni');
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan']);
            $table->string('status_alumni');
            $table->string('id_sosmed');
            $table->string('id_angkatan');
            $table->string('foto_alumni');
            $table->string('no_tlp_alumni');
            $table->string('motto_alumni');
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
        Schema::dropIfExists('alumni');
    }
}
