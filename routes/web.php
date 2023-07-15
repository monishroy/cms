<?php

use App\Http\Controllers\Admin\AddStudent;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UpdateStudent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\DepartmentController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\frontend\NoticeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Teacher\TeacherDashboardController;

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
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/technology', [DepartmentController::class, 'index'])->name('technology');
Route::get('/department/computer', [DepartmentController::class, 'details'])->name('department.details');
Route::get('/notice', [NoticeController::class, 'index'])->name('notice');
Route::get('/notice/result', [NoticeController::class, 'details'])->name('notice-details');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::middleware(['guest'])->group(function(){
    //Authentication Part
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'postRegister'])->name('postRegister');

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'postLogin'])->name('postlogin');
});

//Admin Part
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/profile', [DashboardController::class, 'profile'])->name('admin.profile');
Route::get('/admin/student/add', [DashboardController::class, 'add_student'])->name('admin.add-student');
Route::get('/admin/students', [DashboardController::class, 'all_student'])->name('admin.all-student');
Route::get('/admin/teachers', [DashboardController::class, 'all_teacher'])->name('admin.all-teacher');
Route::get('/admin/categories', [DashboardController::class, 'categories'])->name('admin.categories');

Route::post('/admin/student/add', [AddStudent::class, 'index'])->name('student.add');

//Categoties Added
Route::post('/admin/categories/semister/add', [CategoriesController::class, 'add_semister'])->name('semister.add');
Route::post('/admin/categories/department/add', [CategoriesController::class, 'add_department'])->name('department.add');
Route::post('/admin/categories/session/add', [CategoriesController::class, 'add_session'])->name('session.add');
Route::post('/admin/categories/possion/add', [CategoriesController::class, 'add_possion'])->name('possion.add');

Route::get('/admin/student/edit/{id}', [UpdateStudent::class, 'index'])->name('student.edit');
Route::post('/admin/student/update/{id}', [UpdateStudent::class, 'update'])->name('student.update');

Route::get('/logout', [LogoutController::class, 'index'])->name('logout');

Route::get('/{lang?}', [HomeController::class, 'index']);

//Teacher Part
Route::get('/teacher/dashboard', [TeacherDashboardController::class, 'index'])->name('teacher.dashboard');
