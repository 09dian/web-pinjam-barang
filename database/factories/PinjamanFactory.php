<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pinjaman>
 */
class PinjamanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'name_barang' => fake()->randomElement([
                'Laptop',
                'Proyektor',
                'Speaker',
                'Mouse',
                'Keyboard'
            ]),
            'name_guru' => fake()->name(),
            'date_meminjam' => fake()->date(),
            'date_mengembalikan' => fake()->date(),
        ];

    }
}
