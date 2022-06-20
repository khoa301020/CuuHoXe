<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idNhiemVu' => null,
            'idSuCo' => 'SC'.strval($this->faker->numberBetween(000, 999)),
            'idDoiCuuHo' => 'DC'.strval($this->faker->numberBetween(000, 999)),
            // 'trangThaiNhiemVu' => null,
            'thoiGianNhan' => $this->faker->dateTime,
            'thoiGianHoanThanh' => null,
        ];
    }
}
