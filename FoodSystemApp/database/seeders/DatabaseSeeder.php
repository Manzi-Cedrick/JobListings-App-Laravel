<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Listing;
use App\Models\User;
// use Illuminate\Foundation\Auth\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create([
            'name' => 'Mico Sydney',
            'email' => 'john@gmail.com',
            'password' => 'manzi1000'
        ]);
        Listing::factory(5)->create([
            'user_id' => $user->id
        ]);
    }
}
