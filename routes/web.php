<?php

use App\Http\Controllers\Admin\AdminTechnologyController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\NoticeBoardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\TechnologyController;
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
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/technology', [TechnologyController::class, 'index'])->name('technology');
Route::get('/technology/details/{id}', [TechnologyController::class, 'details'])->name('technology.details');
Route::get('/notice', [NoticeController::class, 'index'])->name('notice');
Route::get('/notice/download/{file}', [NoticeController::class, 'download'])->name('notice.download');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::middleware(['guest'])->group(function(){
    //Authentication Part
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'postRegister'])->name('postRegister');

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'postLogin'])->name('postlogin');
});

//Admin Controller
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/profile', [DashboardController::class, 'profile'])->name('admin.profile');
Route::get('/admin/frontend/notice-board', [DashboardController::class, 'notice'])->name('admin.frontend.notice');
Route::get('/admin/frontend/technology', [DashboardController::class, 'technology'])->name('admin.frontend.technology');
Route::get('/admin/student/add', [DashboardController::class, 'add_student'])->name('admin.add-student');
Route::get('/admin/students', [DashboardController::class, 'all_student'])->name('admin.all-student');
Route::get('/admin/users', [DashboardController::class, 'users'])->name('admin.users');
Route::get('/admin/categories', [DashboardController::class, 'categories'])->name('admin.categories');
Route::get('/admin/trash/students', [DashboardController::class, 'trash_students'])->name('admin.trash.stucent');
Route::get('/admin/trash/notice', [DashboardController::class, 'trash_notice'])->name('admin.trash.notice');

//Frontend Customigetion
Route::post('/admin/notice/add', [NoticeBoardController::class, 'add'])->name('notice.add');
Route::get('/admin/notice/download/{file}', [NoticeBoardController::class, 'download'])->name('admin.notice.download');
Route::get('/admin/notice/trash/{id}', [NoticeBoardController::class, 'trash'])->name('notice.trash');
Route::get('/admin/notice/restore/{id}', [NoticeBoardController::class, 'restore'])->name('notice.restore');
Route::get('/admin/notice/delete/{id}', [NoticeBoardController::class, 'delete'])->name('notice.delete');

Route::post('/admin/technology/add', [AdminTechnologyController::class, 'add'])->name('technology.add');



//Student Controller
Route::post('/admin/student/add', [StudentController::class, 'add'])->name('student.add');
Route::get('/admin/student/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
Route::post('/admin/student/update/{id}', [StudentController::class, 'update'])->name('student.update');
Route::get('/admin/student/trash/{id}', [StudentController::class, 'trash'])->name('student.trash');
Route::get('/admin/student/restore/{id}', [StudentController::class, 'restore'])->name('student.restore');
Route::get('/admin/student/delete/{id}', [StudentController::class, 'delete'])->name('student.delete');

//Categoties Added
Route::post('/admin/categories/semister/add', [CategoriesController::class, 'add_semister'])->name('semister.add');
Route::post('/admin/categories/department/add', [CategoriesController::class, 'add_department'])->name('department.add');
Route::post('/admin/categories/session/add', [CategoriesController::class, 'add_session'])->name('session.add');
Route::post('/admin/categories/possion/add', [CategoriesController::class, 'add_possion'])->name('possion.add');

Route::get('/logout', [LogoutController::class, 'index'])->name('logout');

//Teacher Part
Route::get('/teacher/dashboard', [TeacherDashboardController::class, 'index'])->name('teacher.dashboard');
