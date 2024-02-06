<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    public function submit(Request $request, $courseId)
    {
        $user = Auth::user();
        $score = 0;

        $correctAnswers = [
            'question1' => 'option3',
            'question2' => 'option3',
            'question3' => 'option3',
            'question4' => 'option1',
            'question5' => 'option2'
        ];

        foreach ($correctAnswers as $question => $correctAnswer) {
            if ($request->input($question) === $correctAnswer) {
                $score++; 
            }
        }

        if ($score >= 4) 
        {
            $user->courses()->updateExistingPivot($courseId, ['completed' => true]);
            toastr()->success('You completed the test', 'Congrats');
            return back();
            
        }
        else {
            toastr()->warning('You failed the test :(');
            return back();
        }
    }
    

}