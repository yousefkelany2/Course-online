<?php


use App\Http\Controllers\Website\CourseHomeController;
use App\Http\Controllers\website\CoursesController;
use App\Http\Controllers\website\LoginController;
use App\Http\Controllers\Website\MycourseController;
use App\Http\Controllers\website\RegisterController;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return to_route("CourseHome.index");
});
Route::get('/About', function () {
    return  view("website.about") ;
});
Route::get('/Team', function () {
    return  view("website.team") ;
});
Route::get('/Testimonial', function () {
    return  view("website.testimonial") ;
});
Route::get('/Contact', function () {
    return  view("website.contact") ;
});

Route::resource("CourseHome",CourseHomeController::class);
Route::resource("Courses",CoursesController::class);
Route::get('/course/{courseId}/teacher/{teacherID}', [CoursesController::class, 'teachershow'])->name('course.teachershow');
Route::resource("Login",LoginController::class);
Route::resource("Signup",RegisterController::class);
Route::resource("mycourse",MycourseController::class);



