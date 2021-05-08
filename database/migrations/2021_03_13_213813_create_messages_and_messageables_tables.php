<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesAndMessageablesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->enum('type', ['warning', 'info', 'notify']);
            $table->longText('description');
            $table->json('meta')->nullable();
            $table->timestamps();
        });
        Schema::create('messageables', function (Blueprint $table) {
        	$table->unsignedBigInteger('message_id');
        	$table->foreign('message_id')->references('id')->on('messages')->onDelete('cascade');

        	$table->unsignedBigInteger('messageable_id');
					$table->string('messageable_type');
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
			Schema::dropIfExists('messageables');
			Schema::dropIfExists('messages');
    }
}
