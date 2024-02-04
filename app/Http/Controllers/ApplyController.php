<?php

namespace App\Http\Controllers;
use App\Models\Course;

use Illuminate\Http\Request;

class ApplyController extends Controller
{
    public function showForm($courseId)
    {
        $course = Course::find($courseId);
        return view('apply.form', ['course' => $course]);
    }
}
