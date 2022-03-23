<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerizinanPembinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perizinan_pembinas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('perizinan_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('perizinan_id')->references('id')->on('perizinans')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('perizinan_pembinas');
    }
}
