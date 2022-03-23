<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisSiswaIzinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regis_siswa_izins', function (Blueprint $table) {
            $table->id();
            $table->string('nama_siswa');
            $table->string('slug');
            $table->string('kelas');
            $table->string('angkatan');
            $table->string('jk');
            $table->string('foto')->nullable();
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
        Schema::dropIfExists('regis_siswa_izins');
    }
}
