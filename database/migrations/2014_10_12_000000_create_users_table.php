<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable
	extends Migration {
	/**
	 * Run the migrations.
	 * @return void
	 */
	public function up() {
		Schema::create('users', function (Blueprint $table) {
			$table->bigIncrements('id');
			//Make this field unique
			$table->string('username')->unique();
			$table->string('phone')->unique()->nullable();
			$table->string('email')->nullable();
			$table->string('first_name')->nullable();
			$table->string('last_name')->nullable();
			$table->string('brand')->nullable();
			$table->longText('avatar_url')->nullable();
			$table->longText('logo_url')->nullable();
			$table->longText('about')->nullable();
			$table->dateTime('phone_verified_at')->nullable()->default(null);
			$table->string('password');
			$table->string('national_code')->nullable()->unique();
			$table->string('instagram')->nullable()->unique();
			$table->string('twitter')->nullable()->unique();
			$table->date('birth_date')->nullable();
			$table->enum('gender', ['man', 'woman', 'other'])->nullable();
			$table->text('sheba')->nullable();
			$table->text('card_number')->nullable();
			$table->bigInteger('wallet')->nullable()->default(0);
			$table->bigInteger('point')->nullable()->default(0);
			$table->string('aff_id')->unique()->nullable();
			$table->json('meta')->nullable();
			$table->rememberToken();
			$table->timestamps();
		});
		Schema::create('roles', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('name')->unique();
			$table->string('label');
			$table->longText('description')->nullable();
			$table->longText('image_url')->nullable();
			$table->timestamps();
		});
		Schema::create('addresses', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->unsignedBigInteger('user_id');
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->string('name');
			$table->string('country')->nullable()->default('IR');
			$table->string('state')->nullable();
			$table->string('city')->nullable();
			$table->longText('address');
			$table->string('phone');
			$table->string('postcode');
			$table->string('number')->nullable();
			$table->string('door')->nullable();
			$table->double('lat')->nullable();
			$table->double('long')->nullable();
			$table->longText('note')->nullable();
			$table->json('meta')->nullable();
			$table->timestamps();

		});
		Schema::create('permissions', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('name')->unique();
			$table->string('label');
			$table->longText('description')->nullable();
			$table->longText('image_url')->nullable();
			$table->timestamps();
		});
		Schema::create('user_role', function (Blueprint $table) {
			$table->unsignedBigInteger('user_id');
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

			$table->unsignedBigInteger('role_id');
			$table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');

			$table->primary(['user_id', 'role_id']);
			$table->timestamps();
		});
		Schema::create('role_permission', function (Blueprint $table) {
			$table->unsignedBigInteger('role_id');
			$table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');

			$table->unsignedBigInteger('permission_id');
			$table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');
		});
		Schema::create('user_permission', function (Blueprint $table) {
			$table->unsignedBigInteger('user_id');
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

			$table->unsignedBigInteger('permission_id');
			$table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');

			$table->primary(['user_id', 'permission_id']);
		});
		Schema::create('prices', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('name')->unique();
			$table->string('label');
			$table->enum('type', ['percent_decrement', 'percent_increment', 'fixed_decrement', 'fixed_increment', 'fixed_price', 'free']);
			$table->unsignedDouble('amount')->nullable();
			$table->unsignedBigInteger('priceable_id');
			$table->string('priceable_type');
			$table->json('meta')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('role_permission');
		Schema::dropIfExists('user_role');
		Schema::dropIfExists('user_permission');
		Schema::dropIfExists('permissions');
		Schema::dropIfExists('addresses');
		Schema::dropIfExists('roles');
		Schema::dropIfExists('users');
		Schema::dropIfExists('price');
	}
}
