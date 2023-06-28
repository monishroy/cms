<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\CoursesController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\Student\ProfileController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Frontent Part
Route::get('/about', [AboutController::class, 'index']);
Route::get('/courses', [CoursesController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);

Route::middleware(['guest'])->group(function(){
    //Authentication Part
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'postRegister'])->name('postRegister');

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'postLogin'])->name('postlogin');
});

//Student Part
Route::get('/student', [StudentController::class, 'index']);
Route::get('/student/profile', [ProfileController::class, 'index']);

//Admin Part
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/add-student', [DashboardController::class, 'add_student'])->name('admin.add-student');
Route::get('/admin/all-user', [DashboardController::class, 'all_user'])->name('admin.all-user');

Route::get('/logout', [LogoutController::class, 'index'])->name('logout');

Route::get('/{lang?}', [HomeController::class, 'index']);
