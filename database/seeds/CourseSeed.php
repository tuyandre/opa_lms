<?php

use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Test;

class CourseSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Adding Categories
        factory(\App\Models\Category::class, 10)->create();

        //Creating Course
        factory(Course::class, 50)->create()->each(function ($course) {
            $course->teachers()->sync([2]);
            $course->lessons()->saveMany(factory(Lesson::class, 10)->create());
            $course->tests()->saveMany(factory(Test::class,2)->create());
        });
    }
}
