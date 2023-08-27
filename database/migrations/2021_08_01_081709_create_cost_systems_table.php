<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCostSystemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cost_systems', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mid');
            $table->bigInteger('parcode');
            $table->string('medname');
            $table->integer('add');
            $table->integer('cost');
            $table->date('date');
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
        Schema::dropIfExists('cost_systems');
    }
}
