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
        factory(\App\Models\Category::class, 10)->create()->each(function ($cat){
            $cat->blogs()->saveMany(factory(\App\Models\Blog::class,4)->create());

        });

        //Creating Course
        factory(Course::class, 50)->create()->each(function ($course) {

            $course->teachers()->sync([2]);
            $course->lessons()->saveMany(factory(Lesson::class, 10)->create());
            foreach($course->lessons as $key=>$lesson){
                $key++;
                $timeline = new \App\Models\CourseTimeline();
                $timeline->course_id = $course->id;
                $timeline->model_id = $lesson->id;
                $timeline->model_type = Lesson::class;
                $timeline->sequence = $key;
                $timeline->save();
            };

            $course->tests()->saveMany(factory(Test::class,2)->create());
            foreach($course->tests as $key=>$test){
                $key+=11;
                $timeline = new \App\Models\CourseTimeline();
                $timeline->course_id = $course->id;
                $timeline->model_id = $test->id;
                $timeline->model_type = Test::class;
                $timeline->sequence = $key;
                $timeline->save();
            };
        });
    }


}
