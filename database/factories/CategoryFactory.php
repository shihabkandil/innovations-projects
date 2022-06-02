<?php

namespace Database\Factories;
use App\Models\category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\category>
 */
class CategoryFactory extends Factory
{
    protected $model = category::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->jobTitle;
        $nameArr = explode('' , $name);
        $name = trim($nameArr[0]);

        return [
            'name' => $name,
            'slug' => Str::slug($name),
        ];
    }
}
