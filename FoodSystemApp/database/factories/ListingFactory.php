<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=> $this->faker->sentence(),
            'tags'=> 'laravel,api,backend',
            'company'=> $this->faker->company(),
            'location'=> $this->faker->city(),
            'description'=> $this->faker->paragraph(5),
            'website'=> $this->faker->url(),
            'email'=> $this->faker->companyEmail(),
        ];
    }
}
