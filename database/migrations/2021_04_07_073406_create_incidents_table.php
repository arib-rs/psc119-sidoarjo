<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidents', function (Blueprint $table) {
            $table->id();
            $table->string('kode_kasus')->unique();
            $table->bigInteger('calltaker_id');
            $table->dateTime('waktu');
            $table->longText('lokasi');
            $table->longText('detail_lokasi');
            $table->string('longitude');
            $table->string('latitude');
            $table->string('lanjutan_kasus')->nullable();
            $table->string('nama_pelapor');
            $table->string('telp_pelapor');
            $table->longText('alamat_pelapor');
            $table->bigInteger('category_id');
            $table->string('jumlah_pasien');
            $table->longText('keterangan');
            $table->string('sumber_informasi');
            $table->string('status');
            $table->boolean('is_polres')->default(false);
            $table->boolean('is_pmk')->default(false);
            $table->boolean('is_bpbd')->default(false);
            $table->boolean('is_komando')->default(false);
            $table->dateTime('deleted_at')->nullable();
            $table->string('alasan_delete')->nullable();

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
        Schema::dropIfExists('incidents');
    }
}
