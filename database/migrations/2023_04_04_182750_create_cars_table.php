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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->integer('id_agence');
            $table->integer('id_marque');
            $table->string('name');
            $table->string('description');
            $table->integer('num_port');
            $table->year('year');
            $table->integer('kilomitrage');
            $table->string('tumbling');
            $table->integer('puissance');
            $table->enum('carburant', ['diesel', 'essence','eleqtrique']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};