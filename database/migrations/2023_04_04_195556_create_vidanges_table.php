<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVidangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vidanges', function (Blueprint $table) {
            $table->id();
            $table->integer('id_car');
            $table->string('name');
            $table->string('name_agency');
            $table->decimal('price',10,2);
            $table->date('date');
            $table->date('date_expire');
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
        Schema::dropIfExists('vidanges');
    }
}