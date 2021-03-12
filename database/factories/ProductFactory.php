<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->sentence();
        return [
            //
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $this->faker->text(350),
            'price' => $this->faker->randomNumber($nbDigits = 3),
            'subcategory_id' => Subcategory::all()->random()->id,
            'user_id' => User::all()->random()->id
        ];
    }
}
