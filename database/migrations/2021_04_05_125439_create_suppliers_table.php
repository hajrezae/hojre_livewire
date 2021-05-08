<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration {
	/**
	 * Run the migrations.
	 * @return void
	 */
	public function up() {
		Schema::create('suppliers', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('username')->unique();
			$table->string('shop_name');
			$table->string('password');
			$table->string('code')->unique();
			$table->string('manager_first_name');
			$table->string('manager_last_name');
			$table->string('contact_phone');
			$table->string('shop_phone');
			$table->longText('logo_url')->nullable();
			$table->string('contact_email');
			$table->string('postcode');
			$table->tinyInteger('active')->default(0);
			$table->string('manager_national_code');
			$table->string('sheba_number')->nullable();
			$table->json('documents')->nullable();
			$table->enum('cash_out_method', ['before', 'after'])->nullable()->default('before');
			$table->longText('about')->nullable();
			$table->integer('max_delivery_time')->nullable();
			$table->integer('min_delivery_time')->nullable();
			$table->tinyInteger('is_manufacturer')->default(0);
			$table->json('meta')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('suppliers');
	}
}
