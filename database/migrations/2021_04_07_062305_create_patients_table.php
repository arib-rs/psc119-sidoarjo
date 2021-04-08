<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('kode_kasus');
            $table->string('nama');
            $table->longText('alamat')->nullable();
            $table->string('gender');
            $table->date('tanggal_lahir')->nullable();
            $table->integer('usia')->nullable();
            $table->string('pict_url')->nullable();
            $table->string('keterangan_foto')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('patients');
    }
}
