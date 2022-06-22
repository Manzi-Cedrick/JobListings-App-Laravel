<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Listing;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        Listing::create([
            'title'=>'Laravel Senior Developer',
            'tags'=>'Backend Dev,Javascript',
            'company'=>'Acme Corp',
            'email'=>'cedrickmanzii0@gmail.com',
            'website'=>'facebook.com',
            'location'=>'kigali,Rwanda',
            'description'=> 'Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsum Lorem IpsumLorem IpsumLorem IpsumLorem Ipsum'
        ]);
    }
}
