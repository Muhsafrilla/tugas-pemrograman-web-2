<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Series;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Series>
 */
class SeriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_series' => fake ()->name(),
            'tipe_series' => fake ()->name(),
            'target_pengguna' => fake ()->name(),
            'tahun_rilis' => fake ()->name(),
            'generasi' => fake ()->name(),
            'brand_id' => Brand::inRandomOrder()->first()->id,
        ];
    }
}
