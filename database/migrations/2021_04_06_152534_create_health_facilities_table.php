<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHealthFacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('health_facilities', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->longText('alamat')->nullable();
            $table->string('pict_url')->nullable();
            $table->string('kategori')->nullable();
            $table->boolean('is_fullday');
            $table->boolean('is_has_ekg');
            $table->integer('jumlah_shift')->nullable();
            $table->longText('keterangan')->nullable();
            $table->string('phone_num')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('email')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('health_facilities');
    }
}
