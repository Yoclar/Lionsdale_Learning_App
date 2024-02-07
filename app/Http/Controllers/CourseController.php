<?php

namespace App\Http\Controllers;

use Faker\Factory as Faker;
use App\Models\Course;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use Illuminate\Http\Request;
class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();

        foreach($courses as $course){
            $course->description = $this->generateFakeDescription();
            $course->price = round($this->generateFakePrice(), 0); 

        }
        return view('courses.index', ['courses' => $courses]);
    }
    protected function generateFakeDescription(): string
    {
        $faker = Faker::create();
        return $faker->realText(200,2);
        
    }

    

    public function GoToDelete(Request $request)
    {
        $courseId = $request->course_id;
        $selectedCourse = Course::find($courseId);
        $courses = Course::all();
        return view('courses.delete', ['selectedCourse' => $selectedCourse, 'courses' => $courses]);
    }

    protected function generateFakePrice(): float
    {
        return fake()->randomFloat(2,100,200);
    }

    
    public function takeTest(Course $course)
    {
        
        return view('courses.test', compact('course'));
    }

  
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourseRequest $request)
    {
        $course = Course::create($request->all());
        $course->save();
        toastr()->success('Course has been added successfully!', 'Congrats');
        return redirect('courses');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();
        toastr()->success('The course has been deleted successfully!');
        return redirect()->route('welcome');
    }
}
