<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enters', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->bigInteger('parcode');
            $table->string('medname');
            $table->integer('cost');
            $table->date('end_date');
            $table->integer('all');
            $table->unsignedBigInteger('mid');
            $table->date('date');
            $table->foreign('mid')->references('id')->on('informations')->onDelete('cascade');
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
        Schema::dropIfExists('enters');
    }
}
