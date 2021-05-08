<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscountsTable extends Migration {
	/**
	 * Run the migrations.
	 * @return void
	 */
	public function up() {
		Schema::create('discounts', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('discountable_id')->nullable();
			$table->string('discountable_type')->nullable();
			$table->string('name');
			$table->string('label');
			$table->longText('description')->nullable();
			$table->unsignedDouble('percent');
			$table->tinyInteger('apply_multiple')->nullable()->default(1);
			$table->bigInteger('order')->default(0);
			$table->dateTime('start_time')->nullable();
			$table->dateTime('end_time')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('discounts');
	}
}
