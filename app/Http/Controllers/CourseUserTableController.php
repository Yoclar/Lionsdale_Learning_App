<?php

namespace App\Http\Controllers;

use App\Models\course_user_table;
use App\Http\Requests\Storecourse_user_tableRequest;
use App\Http\Requests\Updatecourse_user_tableRequest;

class CourseUserTableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storecourse_user_tableRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(course_user_table $course_user_table)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(course_user_table $course_user_table)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatecourse_user_tableRequest $request, course_user_table $course_user_table)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(course_user_table $course_user_table)
    {
        //
    }
}
