<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration {
	/**
	 * Run the migrations.
	 * @return void
	 */
	public function up() {
		Schema::create('payment_methods', function (Blueprint $table) {
			$table->id();
			$table->string('method_name')->unique();
			$table->string('label');
			$table->tinyInteger('active')->default(0);
			$table->longText('logo_url')->nullable();
			$table->json('options')->nullable();
			$table->timestamps();
		});
		Schema::create('payments', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->unsignedBigInteger('method_id');
			$table->unsignedBigInteger('order_id');
			$table->unsignedBigInteger('amount');
			$table->dateTime('due_date')->nullable();
			$table->tinyInteger('status')->default(0);
			$table->tinyInteger('paid_time')->nullable();
			$table->text('ref_id')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('payment_methods');
		Schema::dropIfExists('payments');
	}
}
