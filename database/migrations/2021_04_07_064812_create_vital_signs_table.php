<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVitalSignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vital_signs', function (Blueprint $table) {
            $table->id();
            $table->string('tekanan_darah')->nullable();
            $table->string('frekuensi_pernafasan')->nullable();
            $table->string('frekuensi_nadi')->nullable();
            $table->string('suhu_tubuh')->nullable();
            $table->string('gcs')->nullable();
            $table->bigInteger('patient_id')->unique();
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
        Schema::dropIfExists('vital_signs');
    }
}
