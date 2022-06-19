<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class RoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idVaiTro' => null,
            'tenVaiTro' => $this->faker->name,
            'moTa' => $this->faker->text,
        ];
    }
}
