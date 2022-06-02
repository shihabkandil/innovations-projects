<?php

namespace Database\factories;
use App\Models\Courses;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Courses>
 */
class CourseFactory extends Factory
{
    protected $model = Courses::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {   
        $courseSuffex = ['OOP' , 'Data' , 'INTRO' , 'WEB'];
        $name = $this->faker->company.' '.Arr::random($courseSuffex);

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'courseDesc' => $this->faker->realText(320),
            'CoursePrice' => $this->faker->numberBetween(500,1000),
        ];
    }
}
