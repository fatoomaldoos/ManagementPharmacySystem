<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('parcode')->nullable()->unique();
            $table->string('physical_name')->nullable();
            $table->string('commerce_name')->nullable();
            $table->string('type')->nullable();
            $table->string('degree')->nullable();
            $table->string('company_name')->nullable();
            $table->boolean('need_a_prescription');
            $table->string('section_name');
            $table->string('chemical_composition');
            $table->string('diseases');
            $table->string('image');
            $table->unsignedBigInteger('sid');
            $table->foreign('sid')->references('id')->on('sections')->onDelete('cascade');
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
        Schema::dropIfExists('informations');
    }
}
