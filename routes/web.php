<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminCategoriesController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminEmployeesController;
use App\Http\Controllers\Admin\AdminNoticeController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\AdminStudentController;
use App\Http\Controllers\Admin\AdminTechnologyController;
use App\Http\Controllers\Admin\AdminTrashController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\TechnologyController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\frontend\NoticeController;
use App\Http\Controllers\Frontend\EmployeesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Librarian\LibrarianBooksController;
use App\Http\Controllers\Librarian\LibrarianBooksIssueController;
use App\Http\Controllers\Librarian\LibrarianDashboardController;
use App\Http\Controllers\Student\StudentDashboardController;
use App\Http\Controllers\Student\StudentProfileController;
use App\Http\Controllers\Teacher\TeacherDashboardController;
use App\Http\Controllers\Teacher\TeacherProfileController;

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
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/technology', [TechnologyController::class, 'index'])->name('technology');
Route::get('/technology/details/{id}', [TechnologyController::class, 'details'])->name('technology.details');
Route::get('/notice', [NoticeController::class, 'index'])->name('notice');
Route::get('/notice/download/{file}', [NoticeController::class, 'download'])->name('notice.download');
Route::get('/employees', [EmployeesController::class, 'index'])->name('employees');
Route::get('/employees/department/{id}', [EmployeesController::class, 'department'])->name('employees.department');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact/add', [ContactController::class, 'add'])->name('contact.add');

Route::middleware(['guest'])->group(function(){
    //Authentication Part
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'postRegister'])->name('postRegister');
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'postLogin'])->name('postlogin');
});
Route::get('/logout', [LogoutController::class, 'index'])->name('logout');

//Admin Route Start
Route::middleware(['auth','admin','status'])->group(function(){
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/profile', [AdminProfileController::class, 'index'])->name('admin.profile');
    Route::post('/admin/profile/update', [AdminProfileController::class, 'update'])->name('profile.update');
    Route::get('/admin/notice', [AdminNoticeController::class, 'index'])->name('admin.frontend.notice');
    Route::post('/admin/notice/add', [AdminNoticeController::class, 'add'])->name('notice.add');
    Route::get('/admin/notice/delete/{id}', [AdminNoticeController::class, 'delete'])->name('notice.delete');
    Route::get('/admin/notice/download/{file}', [AdminNoticeController::class, 'download'])->name('admin.notice.download');
    Route::get('/admin/categories', [AdminCategoriesController::class, 'index'])->name('admin.categories');
    Route::post('/admin/categories/semister', [AdminCategoriesController::class, 'semister_store'])->name('semister.store');
    Route::post('/admin/categories/department/add', [AdminCategoriesController::class, 'department_store'])->name('department.store');
    Route::post('/admin/categories/session/add', [AdminCategoriesController::class, 'session_store'])->name('session.store');
    Route::post('/admin/categories/possion/add', [AdminCategoriesController::class, 'possion_store'])->name('possion.store');
    Route::resource('/admin/technology', AdminTechnologyController::class);
    Route::resource('admin/students', AdminStudentController::class);
    Route::resource('/admin/employees', AdminEmployeesController::class);
    Route::resource('/admin/users', AdminUserController::class);
    Route::get('/admin/users/active/{id}', [AdminUserController::class, 'status_active'])->name('user.status.active');
    Route::get('/admin/users/deactive/{id}', [AdminUserController::class, 'status_deactive'])->name('user.status.deactive');
    
});
//Admin Route End

//Teacher Route Start
Route::middleware(['auth','teacher','status'])->group(function(){
    //Teacher Dashboard Controller
    Route::get('/teacher/dashboard', [TeacherDashboardController::class, 'index'])->name('teacher.dashboard');
    Route::get('/teacher/profile', [TeacherProfileController::class, 'index'])->name('teacher.profile');

});
//Teacher Route End

//Student Route Start
Route::middleware(['auth','user','status'])->group(function(){
    Route::get('/student/profile', [StudentProfileController::class, 'index'])->name('student.profile');
    Route::post('/student/profile/update', [StudentProfileController::class, 'update'])->name('student.profile.update');
    Route::get('/student/books', [StudentProfileController::class, 'books'])->name('student.books');

});
//Student Route End

//Teacher Route End

//Librarian Route Start
Route::middleware(['auth','librarian','status'])->group(function(){
    Route::get('/librarian/dashboard', [LibrarianDashboardController::class, 'index'])->name('librarian.dashboard');
    Route::resource('librarian/books', LibrarianBooksController::class);
    Route::resource('librarian/issue', LibrarianBooksIssueController::class);

});
//Librarian Route End

