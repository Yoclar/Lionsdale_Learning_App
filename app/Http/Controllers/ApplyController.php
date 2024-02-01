<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplyController extends Controller
{
    public function showForm($courseId)
    {
        return view('apply.form', ['courseId' => $courseId]);
    }
}
