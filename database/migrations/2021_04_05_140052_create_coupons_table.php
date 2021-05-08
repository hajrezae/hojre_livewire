<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponsTable extends Migration {
	/**
	 * Run the migrations.
	 * @return void
	 */
	public function up() {
		Schema::create('coupons', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('name');
			$table->string('label');
			$table->enum('type', ['fixed_amount', 'percent']);
			$table->unsignedDouble('amount');
			$table->tinyInteger('apply_multiple')->nullable()->default(1);
			$table->bigInteger('order')->nullable()->default(0);
			$table->bigInteger('limit')->nullable();
			$table->bigInteger('min_price')->nullable();
			$table->bigInteger('max_price')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('coupons');
	}
}
