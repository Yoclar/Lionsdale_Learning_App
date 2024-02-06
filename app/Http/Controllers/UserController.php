<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function checkNameIsTaken(Request $request)
    {
       $userFound = User::all()->where('name', $_POST['name'])->count();
        if($userFound !== 0) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Username is taken',
            ]);
        }
    }

    public function registerForCourse(Request $request, Course $course)
    {   
        if (Auth::check()) {
            if ($request->has('confirm')) 
            {
                $user = Auth::user();
                if ($user->courses->contains($course->id)) {
                    toastr()->warning('You already applied for this course.');
                    return back();
                }

                $user->courses()->attach($course, [
                    'completed' => false,
                    'seen' => true,
                ]);
                toastr()->success('Successfully registered for the course.');
                return redirect()->route('welcome');
            }
            else {
                toastr()->error('Checkbox not checked. Please check the checkbox to register for the course.');
                return back();
            }
        }
        else{
            toastr()->warning('Please sign in or register before applying.');
            return back();
        }
       
    }

}


