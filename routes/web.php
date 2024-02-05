<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/* 
|--------------------------------------------------------------------------
| Courses routes
|-------------------------------------------------------------------------- 
*/
Route::resource('/courses', CourseController::class);



/* 
|--------------------------------------------------------------------------
| Check user routes
|-------------------------------------------------------------------------- 
*/
Route::post('/checkUserTaken', [App\Http\Controllers\UserController::class, 'checkNameIsTaken'])->name('username.check');


/* 
|--------------------------------------------------------------------------
| Register for course routes
|-------------------------------------------------------------------------- 
*/
Route::post('/register-for-course/{course}', [UserController::class, 'registerForCourse'])->middleware(['auth'])->name('register.for.course');

/* 
|--------------------------------------------------------------------------
| Apply routes
|-------------------------------------------------------------------------- 
*/
Route::get('/apply/{courseId}', [App\Http\Controllers\ApplyController::class, 'showForm'])->name('apply.form');