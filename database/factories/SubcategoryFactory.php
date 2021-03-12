<?php

namespace Database\Factories;

use App\Models\Subcategory;
use app\models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SubcategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Subcategory::class;

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
            'description' => $this->faker->text(150),
            'category_id' => Category::all()->random()->id
        ];
    }
}
