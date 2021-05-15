<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttributesTable extends Migration {
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('attributes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('label');
            $table->longText('description')->nullable();
            $table->longText('image_url')->nullable();
            $table->enum('style', ['list', 'button', 'image', 'color', 'input', 'radio'])->nullable()
                  ->default('button');
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
        Schema::create('product_attributes', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

            $table->unsignedBigInteger('attribute_id');
            $table->foreign('attribute_id')->references('id')->on('attributes')->onDelete('cascade');

            $table->integer('order')->nullable();

            $table->primary(['product_id', 'attribute_id']);
            $table->index(['product_id', 'attribute_id']);
        });
        Schema::create('product_attribute_values', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

            $table->unsignedBigInteger('attribute_id');
            $table->foreign('attribute_id')->references('attribute_id')->on('product_attributes')->onDelete('cascade');

            $table->unsignedBigInteger('attribute_value_id');
            $table->foreign('attribute_value_id')->references('id')->on('attribute_values')->onDelete('cascade');

            $table->integer('order')->nullable();
            $table->tinyInteger('default')->nullable()->default(0);

            $table->primary(['attribute_id', 'attribute_value_id']);
            $table->index(['product_id', 'attribute_value_id']);
        });
        Schema::create('product_variants', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products')->cascadeOnDelete();

            $table->unsignedBigInteger('variant_id');

            $table->tinyInteger('is_active')->nullable()->default(1);
            $table->unsignedBigInteger('price')->nullable();
            $table->unsignedBigInteger('discount_price')->nullable();
            $table->bigInteger('stock')->nullable();
            $table->longText('image')->nullable();
            $table->longText('description')->nullable();

            $table->primary(['product_id', 'variant_id']);
            $table->index(['product_id', 'variant_id']);
        });
        Schema::create('variant_values', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('variant_id');
            $table->unsignedBigInteger('attribute_id');
            $table->unsignedBigInteger('attribute_value_id');

            $table->foreign(['product_id', 'variant_id'])->references(['product_id', 'variant_id'])
                  ->on('product_variants')->cascadeOnDelete();
            $table->foreign(['product_id', 'attribute_id'])->references(['product_id', 'attribute_id'])
                  ->on('product_attributes')->cascadeOnDelete();
            $table->foreign(['attribute_id', 'attribute_value_id'])->references(['attribute_id',
                                                                                 'attribute_value_id'])
                  ->on('product_attribute_values')->cascadeOnDelete();

            $table->primary(['variant_id', 'attribute_value_id']);
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_attributes');
        Schema::dropIfExists('attribute_values');
        Schema::dropIfExists('attributes');
    }
}
