<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function submit(Request $request)
    {
        $user = Auth::user();
        $correctAnswers = 0;

        $correctAnswers = [
            'question1' => 'option3',
            'question2' => 'option3',
            'question3' => 'option3',
            'question4' => 'option1',
            'question5' => 'option2'
        ];

        foreach ($correctAnswers as $question => $correctAnswers) {
            if ($request->has($question) && $request->input($question))
            {
                $correctAnswers++;   
            }
        }

        if ($correctAnswers >= 4) 
        {
            $user->update(['completed' => true]);
        }
        return redirect()->back()->with('success', 'Quiz submitted successfully.');
    }
}
