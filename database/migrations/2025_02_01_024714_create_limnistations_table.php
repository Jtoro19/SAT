<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('limni_stations', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('stationID');
            $table->foreign('stationID')->references('id')->on('stations');

            $table->float('streamVolume');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('limnistations');
    }
};
