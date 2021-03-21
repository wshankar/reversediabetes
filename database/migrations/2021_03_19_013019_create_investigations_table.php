<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestigationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investigations', function (Blueprint $table) {
            $table->id();
            $table->string('testDate');
            $table->string('Cpeptide');
            $table->string('hba1c');
            $table->string('cholesterol');
            $table->string('hdl');
            $table->string('ldl');
            $table->string('tg');
            $table->string('ratio');
            $table->string('cr');
            $table->string('tsh')->nullable();
            $table->string('nextTest');
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
        Schema::dropIfExists('investigations');
    }
}
