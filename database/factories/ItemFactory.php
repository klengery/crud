<?php

namespace Database\Factories;
use App\Models\Item;

use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    protected $model = Item::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'codigo' => str_pad($this->faker->numberBetween($min = 1, $max = 10000), 5, '0', STR_PAD_LEFT), 
            'descripcion' => $this->faker->sentence(),
            'cantidad' => $this->faker->numberBetween($min = 1, $max = 10),
            'precio' => $this->faker->numberBetween($min = 30, $max = 500)
        ];
    }
}
