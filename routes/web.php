<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\StudentListController;
use App\Http\Controllers\CourseListController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\UserSignupController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\c;
use App\Models\landing;


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
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/userSignup', function () {
    return view('usersignup');
});
Route::get('/course', function () {
    return view('course');
});

Route::get('/form', function () {
    return view('form');
    
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});



Route::get('/studentlist', [StudentListController::class, 'studentlist']);
Route::post('/studentlist', [StudentListController::class, 'create']);
Route::post('/editstudent', [StudentlistController::class, 'update']);
Route::post('/course', [CourseListController::class, 'course']);
Route::get('/course', [CourseListController::class, 'courselist']);
Route::post('/editcourse', [CourseListController::class, 'update']);
Route::post('/deletestudent', [StudentlistController::class, 'delete']);
Route::post('/deletecourse', [CourseListController::class, 'delete']);
Route::get('/admin', [AdminController::class, 'adminlist']);
Route::post('/adminlist', [AdminController::class, 'admin']);
Route::post('/updatecourse', [AdminController::class, 'update']);
Route::post('/deleteadmin', [AdminController::class, 'delete']);
Route::post('/signup', [SignupController::class, 'store']);

Route::post('/usersignUp', [UserSignupController::class, 'store']);
Route::get('/user', [ProfileController::class, 'getUserLogin']);
Route::get('/changepass', [ProfileController::class, 'getUserLogin']);
