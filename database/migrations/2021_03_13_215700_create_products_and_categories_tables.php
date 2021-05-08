<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsAndCategoriesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    		Schema::create('products', function (Blueprint $table) {
    			$table->bigIncrements('id');
    			$table->string('name')->nullable();
    			$table->string('slug', 300)->nullable();
    			$table->enum('type', ['simple', 'variable'])->nullable()->default('simple');
					$table->string('SKU')->nullable();
					$table->enum('status', ['published', 'draft', 'revision'])->nullable();
    			$table->longText('product_url')->nullable();
    			$table->longText('image_url')->nullable();
    			$table->longText('image_gallery')->nullable();
    			$table->longText('short_description')->nullable();
    			$table->longText('description')->nullable();
    			$table->unsignedBigInteger('user_id')->nullable();
    			$table->unsignedBigInteger('vendor_id')->nullable();
    			$table->tinyInteger('multi_supplier')->nullable()->default(0);
    			$table->tinyInteger('manage_stock')->nullable()->default(0);
    			$table->bigInteger('stock_input')->nullable()->default(0);
    			$table->bigInteger('stock')->nullable()->default(0);
    			$table->bigInteger('stock_aisle_number')->nullable();
    			$table->bigInteger('stock_unit')->nullable();
    			$table->bigInteger('stock_shelf')->nullable();
    			$table->bigInteger('stock_shelf_row')->nullable();
    			$table->tinyInteger('stop_selling')->nullable()->default(0);
    			$table->unsignedBigInteger('price')->nullable()->default(0);
    			$table->unsignedBigInteger('discount_price')->nullable();
    			$table->unsignedBigInteger('buy_price')->nullable();
    			$table->string('label')->nullable();
    			$table->integer('tax_id')->nullable();
    			$table->tinyInteger('sell_individual')->nullable()->default(0);
    			$table->tinyInteger('preorder')->nullable()->default(0);
    			$table->tinyInteger('sell_with_credit')->nullable()->default(0);
    			$table->unsignedBigInteger('point')->nullable()->default(0);
    			$table->unsignedBigInteger('weight')->nullable();
    			$table->json('dimensions')->nullable();
    			$table->longText('related_products')->nullable();
    			$table->longText('note')->nullable();
    			$table->json('meta')->nullable();
    			$table->timestamps();
				});
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug')->unique();
            $table->string('label');
            $table->unsignedBigInteger('parent_id')->default(0);
            $table->longText('description')->nullable();
            $table->longText('image_url')->nullable();
            $table->json('meta')->nullable();
            $table->timestamps();
        });
        Schema::create('product_category', function (Blueprint $table) {
        	$table->unsignedBigInteger('product_id');
        	$table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

        	$table->unsignedBigInteger('category_id');
        	$table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

        	$table->primary(['product_id', 'category_id']);
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
			Schema::dropIfExists('product_category');
			Schema::dropIfExists('product_tag');
			Schema::dropIfExists('categories');
			Schema::dropIfExists('products');
    }
}
