<?php

namespace Database\factories;
namespace Database\Seeders;
use App\Models\Courses;
use App\Models\category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Courses::factory()->count(20)->create();
        category::factory()->count(5)->create();

        $categories = category::all();
        Courses::all()->each(function($course) use ($categories){
            $course->categories()->attach(
                $categories->random(2)->pluck('id')->toArray()
            );
        });
    }
}
