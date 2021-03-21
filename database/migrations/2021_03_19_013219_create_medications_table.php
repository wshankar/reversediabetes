<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medications', function (Blueprint $table) {
            $table->id();
            $table->string('noMed')->nullable();
            $table->string('med1')->nullable();
            $table->string('med2')->nullable();
            $table->string('med3')->nullable();
            $table->string('med4')->nullable();
            $table->string('med5')->nullable();
            $table->string('med6')->nullable();
            $table->string('med7')->nullable();
            $table->string('med8')->nullable();
            $table->string('med9')->nullable();
            $table->string('med10')->nullable();
            $table->string('med11')->nullable();
            $table->string('med12')->nullable();
            $table->string('med13')->nullable();
            $table->string('med14')->nullable();
            $table->string('med15')->nullable();
            $table->string('medFree')->nullable();
            $table->unsignedBigInteger('user_id');
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
        Schema::dropIfExists('medications');
    }
}
