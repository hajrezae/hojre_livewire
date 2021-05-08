<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('label');
            $table->string('description')->nullable();
            $table->json('meta')->nullable();
            $table->timestamps();
        });

        Schema::create('product_tag', function (Blueprint $table) {
						$table->unsignedBigInteger('product_id');
						$table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

					$table->unsignedBigInteger('tag_id');
					$table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');

					$table->primary(['product_id', 'tag_id']);
				});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
    }
}
