<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str; 

class AccidentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idSuCo' => null,
            'idNguoiDung' => 'ND'.strval($this->faker->numberBetween(000, 999)),
            'viTri' => strval($this->faker->longitude).", ".strval($this->faker->latitude),
            'loaiPhuongTien' => $this->faker->text(32),
            'minhChung' => $this->faker->imageUrl($width = 640, $height = 480),
            // 'trangThaiSuCo' => null,
            'thoiGianGui' => $this->faker->dateTime,
        ];
    }
}
