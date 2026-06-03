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
        'nama_series'     => fake()->randomElement(['Legion', 'ThinkPad', 'IdeaPad', 'ROG', 'ZenBook', 'TUF', 'Pavilion', 'Spectre', 'Envy', 'Aspire', 'Predator', 'Swift', 'XPS', 'Inspiron', 'Vivobook']),
        'tipe_series'     => fake()->randomElement(['Gaming', 'Business', 'Ultrabook', 'Budget', 'Creator']),
        'target_pengguna' => fake()->randomElement(['Pelajar', 'Profesional', 'Gamer', 'Desainer']),
        'tahun_rilis'     => fake()->numberBetween(2000, 2024),
        'generasi'        => fake()->numberBetween(1, 13),
        'brand_id'        => Brand::inRandomOrder()->first()->id,
    ];
    }
}
