<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TeamMemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idNguoiDung' => 'ND'.strval($this->faker->numberBetween(000, 999)),
            'idDoiCuuHo' => 'DC'.strval($this->faker->numberBetween(000, 999)),
        ];
    }
}
