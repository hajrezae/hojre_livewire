<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('code', 250)->unique();
            $table->unsignedDouble('total');
            $table->unsignedDouble('subtotal');
            $table->integer('discount');
            $table->string('coupon_id')->nullable();
            $table->unsignedBigInteger('shipping_method_id');
            $table->tinyInteger('multiple_payments')->default(0);
            $table->unsignedBigInteger('order_status_id')->default(0);
            $table->json('notes')->nullable();
            $table->timestamps();
        });

        DB::update('alter table orders AUTO_INCREMENT = 100000');

        Schema::create('order_statuses', function(Blueprint $table) {
        	$table->id();
        	$table->string('name')->unique();
        	$table->string('label');
        	$table->string('description')->nullable();
        	$table->timestamps();
				});

        Schema::create('order_product', function (Blueprint $table) {
        	$table->bigIncrements('id');
        	$table->unsignedBigInteger('order_id');
        	$table->unsignedBigInteger('product_id');
        	$table->unsignedBigInteger('supplier_id');
        	$table->bigInteger('quantity')->default(1);
        	$table->bigInteger('item_total');
        	$table->bigInteger('item_subtotal');
        	$table->bigInteger('discount_price')->nullable();
        	$table->bigInteger('tax')->nullable()->default(0);
        	$table->bigInteger('shipping')->nullable()->default(0);
        	$table->enum('status', ['processing', 'packed', 'delivered', 'rejected'])->default('processing');
					$table->dateTime('delivery_schedule')->nullable();
					$table->dateTime('delivery_deadline')->nullable();
        	$table->timestamps();
				});

        Schema::create('order_notes', function (Blueprint $table) {
        	$table->bigIncrements('id');
        	$table->unsignedBigInteger('order_id');
        	$table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');

        	$table->string('user')->nullable();
        	$table->longText('content');
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
			Schema::dropIfExists('order_notes');
			Schema::dropIfExists('order_product');
			Schema::dropIfExists('order_statuses');
			Schema::dropIfExists('orders');
    }
}
