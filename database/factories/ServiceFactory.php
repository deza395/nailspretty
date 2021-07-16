<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Service::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name=$this->faker->unique()->sentence();

        return [
            'name'=>$name,
            'slug'=>Str::slug($name),
            'body'=>$this->faker->text(300),
            'status'=>$this->faker->randomElement([1,2]),
            'category_id'=> Category::all()->random()->id,
            'user_id'=> User::all()->random()->id

        ];
    }
}
