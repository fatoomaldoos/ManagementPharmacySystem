<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDChatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('d_chats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('uid');
            $table->unsignedBigInteger('did');
            $table->string('uname');
            $table->string('dname');
            $table->longText('message');
            $table->timestamps();
            $table->foreign('uid')->references('id')->on('employees')->onDelete('cascade');
            $table->foreign('did')->references('id')->on('distributors')->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('d_chats');
    }
}
