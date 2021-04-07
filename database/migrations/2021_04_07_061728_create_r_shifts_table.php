<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRShiftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('r_shifts', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->bigInteger('health_facility_id');
            $table->bigInteger('resource_id');
            $table->bigInteger('driver_id');
            $table->bigInteger('paramedic_id');
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
        Schema::dropIfExists('r_shifts');
    }
}
