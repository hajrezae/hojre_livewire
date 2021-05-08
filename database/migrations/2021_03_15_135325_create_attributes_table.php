<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttributesTable extends Migration {
	/**
	 * Run the migrations.
	 * @return void
	 */
	public function up() {
		Schema::create('attributes', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('name')->unique();
			$table->string('label');
			$table->longText('description')->nullable();
			$table->longText('image_url')->nullable();
			$table->enum('style', ['list', 'button', 'image', 'color', 'input', 'radio'])->nullable()->default('button');
			$table->json('meta')->nullable();
			$table->timestamps();
		});
		Schema::create('attribute_values', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->unsignedBigInteger('attribute_id');
			$table->foreign('attribute_id')->references('id')->on('attributes')->onDelete('cascade');
			$table->string('name');
			$table->string('label');
			$table->longText('description')->nullable();
			$table->json('style')->nullable();
			$table->longText('image_url')->nullable();
			$table->timestamps();
		});
		Schema::create('product_attributes', function (Blueprint $table) {
			$table->unsignedBigInteger('product_id');
			$table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

			$table->unsignedBigInteger('attribute_id');

			$table->unsignedBigInteger('attribute_value_id');
			$table->foreign('attribute_value_id')->references('id')->on('attribute_values')->onDelete('cascade');

			$table->integer('order')->nullable();

			$table->primary(['product_id', 'attribute_value_id']);
		});
		Schema::create('product_variations', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->unsignedBigInteger('product_id');
			$table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
			$table->tinyInteger('active')->nullable()->default(0);
			$table->string('SKU')->nullable()->unique();
			$table->unsignedBigInteger('price')->nullable();
			$table->unsignedBigInteger('discount_price')->nullable();
			$table->bigInteger('stock')->nullable();
			$table->bigInteger('weight')->nullable();
			$table->json('dimensions')->nullable();
			$table->longText('description')->nullable();

		});

	}

	/**
	 * Reverse the migrations.
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('product_attributes');
		Schema::dropIfExists('product_variations');
		Schema::dropIfExists('attribute_values');
		Schema::dropIfExists('attributes');
	}
}
