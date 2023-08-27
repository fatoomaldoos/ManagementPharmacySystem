<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImportantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('importants', function (Blueprint $table) {
            $table->id();
            $table->integer('min');
            $table->integer('sale');
            $table->integer('buy');
            $table->biginteger('parcode');
            $table->string('medname');
            $table->unsignedBigInteger('bid');
            $table->unsignedBigInteger('sid');
            $table->foreign('sid')->references('id')->on('cost_systems')->onDelete('cascade');
            $table->foreign('bid')->references('id')->on('enters')->onDelete('cascade');
        
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
        Schema::dropIfExists('important');
    }
}
