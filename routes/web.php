<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
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
Route::get('/', function () {
    return view('signup');
});
Route::get('/userSignup', function () {
    return view('userSignup');
});
Route::get('/course', function () {
    return view('course');
});

Route::get('/form/{id}', function ($id) {
    return view('form', ['id' => $id]);
});

Route::get('/profile', function () {
    return view('profile');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/notif', function () {
    return view('notification');
});

Route::get('/testlogin', function () {
    return view('testlogin');
});


Route::get('/registered-student/detail/{id}', [AdminController::class, 'studentDetail']);




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
Route::get('/registered-student', [AdminController::class, 'student']);
Route::post('/updatecourse', [AdminController::class, 'update']);
Route::post('/deleteadmin', [AdminController::class, 'delete']);
Route::post('/signup', [SignupController::class, 'store']);

Route::post('/checkStudent', [UserSignupController::class, 'store']);
Route::get('/user', [ProfileController::class, 'getUserLogin']);
Route::post('/change-password',  [ProfileController::class, 'changePass']);


Route::get('/logout', [ProfileController::class, 'logout']);

Route::post('/post', [PostController::class, 'post']);
Route::get('/posts', [PostController::class, 'posts']);

Route::post('/comment', [CommentController::class, 'comment']);

Route::post('/createStudent', [StudentListController::class, 'register']);
Route::get('/notification/{id}', [\App\Http\Controllers\NotificationController::class, 'getNotification']);
Route::get('/post/{id}/{notifId}', function ($id, $notifId) {
    $notification = \App\Models\Notification::find($notifId);
    $notification->view = 1;
    $notification->save();

    \App\Models\Notification::where('post_id', $id)->update(["view" => 1]);

    return view("post", ["id" => $id]);
});
Route::get('/post/{id}', function($id) {
    return view("post", ["id" => $id]);
});

Route::post('/post/{id}', [PostController::class, 'getPost']);
Route::post('/import', [StudentListController::class, 'import']);
