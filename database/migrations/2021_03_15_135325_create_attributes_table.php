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

			$table->index(['id', 'name']);
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

			$table->index(['id', 'attribute_id', 'name']);
		});
		Schema::create('product_attribute', function (Blueprint $table) {
			$table->unsignedBigInteger('product_id');
			$table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

			$table->unsignedBigInteger('attribute_value_id');
			$table->foreign('attribute_value_id')->references('id')->on('attribute_values')->onDelete('cascade');

			$table->unsignedBigInteger('attribute_id');
			$table->foreign('attribute_id')->references('id')->on('attributes')->onDelete('cascade');

			$table->integer('order')->nullable();

			$table->primary(['product_id', 'attribute_value_id']);
			$table->index(['product_id', 'attribute_value_id']);
		});
		Schema::create('product_variations', function (Blueprint $table) {
			$table->bigIncrements('id');

			$table->unsignedBigInteger('product_id');
			$table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

			$table->tinyInteger('active')->nullable()->default(1);
			$table->string('SKU')->nullable()->unique();
			$table->text('image')->nullable();
			$table->unsignedBigInteger('price')->nullable();
			$table->unsignedBigInteger('discount_price')->nullable();
			$table->bigInteger('stock')->nullable();
			$table->bigInteger('weight')->nullable();
			$table->json('dimensions')->nullable();
			$table->longText('description')->nullable();

			$table->index(['product_id', 'SKU', 'price']);

		});
		Schema::create('variation_attribute', function (Blueprint $table) {
			$table->unsignedBigInteger('variation_id');
			$table->foreign('variation_id')->references('id')->on('product_variations')->onDelete('cascade');

			$table->unsignedBigInteger('attribute_value_id');
			$table->foreign('attribute_value_id')->references('attribute_value_id')->on('product_attribute')->onDelete('cascade');


			$table->primary(['variation_id', 'attribute_value_id']);

			$table->index(['variation_id', 'attribute_value_id']);
		});

	}

	/**
	 * Reverse the migrations.
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('variation_attribute');
		Schema::dropIfExists('product_attribute');
		Schema::dropIfExists('product_variations');
		Schema::dropIfExists('attribute_values');
		Schema::dropIfExists('attributes');
	}
}
