<?php

namespace Database\Factories;

use App\Models\Store;
use app\models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class StoreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Store::class;

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
            'abstract' => $this->faker->text(150),
            'about' => $this->faker->text(800),
            'email' => $this->faker->unique()->email,
            'phone' => $this->faker->text(10),
            'address' => $this->faker->text(80),
            'socialfb' => $this->faker->text(150),
            'socialinst' => $this->faker->text(150),
            'user_id' => User::all()->random()->id
        ];
    }
}
