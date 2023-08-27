<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEndDatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('end_dates', function (Blueprint $table) {
            $table->id();
            $table->biginteger('parcode');
            $table->string('medname');
            $table->unsignedBigInteger('mid');
            $table->timestamp('date');
            $table->foreign('mid')->references('id')->on('enters')->onDelete('cascade');
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
        Schema::dropIfExists('end_dates');
    }
}
