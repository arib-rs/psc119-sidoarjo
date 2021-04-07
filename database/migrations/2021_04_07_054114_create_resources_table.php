<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resources', function (Blueprint $table) {
            $table->id();
            $table->string('jenis');
            $table->string('nomor_polisi');
            $table->string('kode')->unique();
            $table->string('kelas')->nullable();
            $table->string('tahun_produksi')->nullable();
            $table->string('merk');
            $table->string('tahun_pakai');
            $table->string('pict_url')->nullable();
            $table->string('klasifikasi');
            $table->string('status');
            $table->string('gps_id');
            $table->bigInteger('health_facility_id');
            $table->boolean('is_active');
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
        Schema::dropIfExists('resources');
    }
}
