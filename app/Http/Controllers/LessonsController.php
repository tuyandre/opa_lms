<?php

namespace App\Http\Controllers;

use App\Helpers\Auth\Auth;
use App\Models\Lesson;
use App\Models\Question;
use App\Models\QuestionsOption;
use App\Models\Test;
use App\Models\TestsResult;
use Illuminate\Http\Request;

class LessonsController extends Controller
{

    public function show($course_id, $lesson_slug)
    {
        $completed_lessons= "";
        $lesson = Lesson::where('slug', $lesson_slug)->where('course_id', $course_id)->where('published','=',1)->first();
        if($lesson == ""){
           $lesson = Test::where('slug', $lesson_slug)->where('course_id', $course_id)->where('published','=',1)->firstOrFail();
           $lesson->full_text = $lesson->description;

            $test_result = NULL;
            if ($lesson) {
                $test_result = TestsResult::where('test_id', $lesson->id)
                    ->where('user_id', \Auth::id())
                    ->first();
            }
        }

        if (\Auth::check())
        {
            if ($lesson->chapterStudents()->where('user_id', \Auth::id())->count() == 0) {
                $lesson->chapterStudents()->create([
                    'model_type'=>get_class($lesson),
                    'model_id'=>$lesson->id,
                    'user_id'=>auth()->user()->id,
                    'course_id' => $lesson->course->id
                ]);
            }
        }




        $previous_lesson = $lesson->course->courseTimeline()->where('sequence', '<', $lesson->courseTimeline->sequence)
            ->orderBy('sequence', 'desc')
            ->first();
        $next_lesson = $lesson->course->courseTimeline()->where('sequence', '>', $lesson->courseTimeline->sequence)
            ->orderBy('sequence', 'asc')
            ->first();
        $lessons = $lesson->course->courseTimeline()->orderby('sequence','asc')->get();

        $purchased_course = $lesson->course->students()->where('user_id', \Auth::id())->count() > 0;
        $test_exists = FALSE;
        if ($lesson->questions && $lesson->questions->count() > 0) {
            $test_exists = TRUE;
        }

        $completed_lessons = \Auth::user()->chapters()->where('course_id', $lesson->course->id)->get()->pluck('model_id')->toArray();


        return view('frontend.courses.lesson', compact('lesson', 'previous_lesson', 'next_lesson', 'test_result',
            'purchased_course', 'test_exists','lessons','completed_lessons'));
    }

    public function test($lesson_slug, Request $request)
    {
        $test = Test::where('slug', $lesson_slug)->firstOrFail();
        $answers = [];
        $test_score = 0;
        foreach ($request->get('questions') as $question_id => $answer_id) {
            $question = Question::find($question_id);
            $correct = QuestionsOption::where('question_id', $question_id)
                ->where('id', $answer_id)
                ->where('correct', 1)->count() > 0;
            $answers[] = [
                'question_id' => $question_id,
                'option_id' => $answer_id,
                'correct' => $correct
            ];
            if ($correct) {
                $test_score += $question->score;
            }
            /*
             * Save the answer
             * Check if it is correct and then add points
             * Save all test result and show the points
             */
        }
        $test_result = TestsResult::create([
            'test_id' => $test->id,
            'user_id' => \Auth::id(),
            'test_result' => $test_score
        ]);
        $test_result->answers()->createMany($answers);

        return back()->with('message', 'Test score: ' . $test_score);
    }

    public function retest(Request $request){
       $test = TestsResult::where('id','=',$request->result_id)
            ->where('user_id','=',auth()->user()->id)
            ->first();
       $test->delete();
       return back();
    }

}
