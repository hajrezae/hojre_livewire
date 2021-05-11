<?php

namespace Database\Seeders;

use App\Models\User\Address;
use Illuminate\Database\Seeder;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			\App\Models\User::factory()->count(50)->has(Address::factory()->count(5))->create();
		}
}
