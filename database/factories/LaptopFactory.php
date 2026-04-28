<?php

namespace Database\Factories;

use App\Models\Laptop;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Laptop>
 */
class LaptopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'merek' => fake()->randomElement(['Lenovo', 'Asus', 'Acer', 'HP',]),
            'tipe' => fake()->randomElement(['Loq', 'Legion', 'Tuf', 'Rog', 'Victus']),
            'processor' => fake()->randomElement(['i3', 'i5', 'i7', 'i9', 'Ryzen5', 'Ryzen7']),
            'ram' => fake()->randomElement([4,8,16]),
            'harga' => fake()->numberBetween(4000000, 25000000),
        ];
    }
}
