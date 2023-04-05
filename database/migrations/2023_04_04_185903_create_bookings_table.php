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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->integer('id_car');
            $table->integer('id_client');
            $table->integer('id_city_pikup');
            $table->time('time_city_pikup');
            $table->date('date_city_pikup');
            $table->integer('id_city_drop_off');
            $table->time('time_city_drop_off');
            $table->date('date_city_drop_off');
            $table->string("methode_paiment");
            $table->string('statut');
            $table->decimal('price_total',10,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};