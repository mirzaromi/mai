<?php

use App\Models\RegisSiswaIzin;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerizinansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perizinans', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->unsignedBigInteger('regis_siswa_izin_id');
            
            $table->string('kategori');
            $table->string('keterangan');
            $table->dateTime('waktu_mulai');
            $table->dateTime('waktu_selesai');          
            $table->boolean('status_aktif')->default(1);
            $table->string('pembina');
            $table->timestamps();




            // $table->foreignId('regis_siswa_izin_id')->constrained('regis_siswa_izins')->onDelete('set null');
            // $table->foreignId('regis_siswa_izin_id')->constrained('regis_siswa_izins');
            // $table->foreignIdFor(RegisSiswaIzin::class);
        });
        
        Schema::table('perizinans', function (Blueprint $table) {
            $table->foreign('regis_siswa_izin_id')->references('id')->on('regis_siswa_izins')->onDelete('cascade');
            

            // $table->unsignedBigInteger('regis_siswa_izin_id');
            // $table->foreign('regis_siswa_izin_id')->references('id')->on('regis_siswa_izins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perizinans');
    }
}
