<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDailyRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_records', function (Blueprint $table) {
            $table->id();
            $table->string('recDate');
            $table->string('fbs');
            $table->string('breakfast');
            $table->string('nuts');
            $table->string('lunch');
            $table->string('rbs');
            $table->string('fruits');
            $table->string('dinner');
            $table->string('bodyWeight');
            $table->string('bloodPressure');
            $table->string('heartRate');
            $table->string('remarks');
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
        Schema::dropIfExists('daily_records');
    }
}
