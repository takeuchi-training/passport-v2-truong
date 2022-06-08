<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        User::create([
            'name' => 'Truong',
            'email' => 'giangnhattruong@gmail.com',
            'password' => bcrypt('Nhattruong@1')
        ]);

        Product::factory(10)->create();
    }
}
