<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //idDoiCuuHo
            'idDoiCuuHo' => null,
            'tenDoiCuuHo' => $this->faker->name,
        ];
    }
}
