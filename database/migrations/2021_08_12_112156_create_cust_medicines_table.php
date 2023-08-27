<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cust_medicines', function (Blueprint $table) {
            $table->id();
            $table->string('cname');
            $table->string('medname');
            $table->string('type');
            $table->integer('period');
            $table->unsignedBigInteger('mid');
            $table->unsignedBigInteger('cid');
            $table->foreign('mid')->references('id')->on('enters')->onDelete('cascade');
            $table->foreign('cid')->references('id')->on('customers')->onDelete('cascade');
  
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
        Schema::dropIfExists('cust_medicines');
    }
}
