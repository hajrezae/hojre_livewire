<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('label');
            $table->string('state')->nullable()->default('TH');
            $table->string('city')->nullable()->default('TH');
            $table->longText('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('postcode')->nullable();
            $table->longText('description')->nullable();
            $table->string('long')->nullable();
            $table->string('lat')->nullable();
            $table->integer('open_hours_from');
            $table->integer('open_hours_to');
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
        Schema::dropIfExists('inventories');
    }
}
