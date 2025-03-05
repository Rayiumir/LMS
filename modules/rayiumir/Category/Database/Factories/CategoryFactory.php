<?php

namespace Modules\Rayiumir\Category\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Rayiumir\Category\Models\Category;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'slug' => $this->faker->slug,
            'parent_id' => null,
        ];
    }
}
