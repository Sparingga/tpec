<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produk>
 */
class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $kategoriProduk = $this->faker->randomElement(['Baju', 'Sepatu']);

        return [
            'kategori_produk' => $kategoriProduk,
            'nama_produk' => $this->faker->sentence(3),
            'stok' => $this->faker->randomNumber(2),
            'harga_produk' => $this->faker->randomNumber(5),
        ];
    }
}
