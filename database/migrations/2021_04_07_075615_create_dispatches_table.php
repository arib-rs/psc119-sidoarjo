<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDispatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dispatches', function (Blueprint $table) {
            $table->id();
            $table->string('kode_kasus');
            $table->bigInteger('resource_id');
            $table->bigInteger('faskes_asal_id');
            $table->dateTime('ke_lokasi_at');
            $table->dateTime('tiba_lokasi_at');
            $table->dateTime('ke_rs_at');
            $table->bigInteger('faskes_tujuan_id');
            $table->string('status');
            $table->dateTime('verified_at');
            $table->bigInteger('verificator_id');
            $table->longText('keterangan');
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
        Schema::dropIfExists('dispatches');
    }
}
