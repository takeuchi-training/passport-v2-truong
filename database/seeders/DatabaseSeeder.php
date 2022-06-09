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
        // $myAccount = User::where('email', 'iliki', 'giangnhattruong@gmail.com')->first();
        
        // if ($myAccount == null) {
            User::create([
                'name' => 'Truong',
                'email' => 'giangnhattruong@gmail.com',
                'password' => bcrypt('Nhattruong@1')
            ]);
        // }
        
        User::factory(50)->create();

        Product::factory(300)->create();
    }
}
