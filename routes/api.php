<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\ChartController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ContactController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Services
Route::get('/services',[ServiceController::class,"ServiceView"]);

// Projects
Route::get('/allProjects',[ProjectController::class,"ProjectView"]);
Route::get('/threeProjects',[ProjectController::class,"LastThreeProjects"]);
Route::get('/projectdetails/{id}',[ProjectController::class,"ProjectDetails"]);

// Courses
Route::get('/allCourses',[CourseController::class,"allCourses"]);
Route::get('/fourCourses',[CourseController::class,"LastFourCourses"]);
Route::get('/courseDetails/{id}',[CourseController::class,"courseDetails"]);

// Footer
Route::get('/footer',[FooterController::class,"footerView"]);



// Chart
Route::get('/chart',[ChartController::class,"chartView"]);


// Team
Route::get('/team',[TeamController::class,"teamView"]);



// About
Route::get('/about',[AboutController::class,"aboutView"]);


// Home
Route::get('/home',[HomeController::class,"homeView"]);

// Contact
Route::post('/contact',[ContactController::class,"contact"]);










