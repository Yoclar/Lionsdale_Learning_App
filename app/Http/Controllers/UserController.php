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
        if ($request->has('confirm')) 
        {
            $user = Auth::user();

            $user->courses()->attach($course, [
                'completed' => false,
                'seen' => true,
            ]);
            return "Successfully registered for the course.";
        }
        else {
            return "Checkbox not checked. Please check the checkbox to register for the course.";
        }
    }

}


