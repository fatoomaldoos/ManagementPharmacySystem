<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cust_sales', function (Blueprint $table) {
            $table->id();
            $table->string('cname');
            $table->string('medname');
            $table->unsignedBigInteger('cid');
            $table->unsignedBigInteger('mid');
            $table->integer('quantity');
            $table->bigInteger('parcode');
            $table->integer('cost');
            $table->integer('all');
            $table->date('date');
            $table->date('next');
            $table->foreign('cid')->references('id')->on('customers')->onDelete('cascade');
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
        Schema::dropIfExists('cust_sales');
    }
}
