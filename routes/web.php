<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminEmployeesController;
use App\Http\Controllers\Admin\AdminMessageController;
use App\Http\Controllers\Admin\AdminNoticeController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\AdminSetupController;
use App\Http\Controllers\Admin\AdminStudentController;
use App\Http\Controllers\Admin\AdminTechnologyController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Auth\ChangePasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\TechnologyController;
use App\Http\Controllers\frontend\NoticeController;
use App\Http\Controllers\Frontend\EmployeesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DropdownController;
use App\Http\Controllers\Frontend\MessageController;
use App\Http\Controllers\Librarian\LibrarianBooksController;
use App\Http\Controllers\Librarian\LibrarianBooksIssueController;
use App\Http\Controllers\Librarian\LibrarianProfileController;
use App\Http\Controllers\Librarian\LibrarianReturnBookController;
use App\Http\Controllers\Student\StudentProfileController;
use App\Http\Controllers\SuperAdmin\SuperAdminDashboardController;
use App\Http\Controllers\SuperAdmin\SuperAdminEmployeesController;
use App\Http\Controllers\SuperAdmin\SuperAdminMessageController;
use App\Http\Controllers\SuperAdmin\SuperAdminNoticeController;
use App\Http\Controllers\SuperAdmin\SuperAdminProfileController;
use App\Http\Controllers\SuperAdmin\SuperAdminSetupController;
use App\Http\Controllers\SuperAdmin\SuperAdminStudentController;
use App\Http\Controllers\SuperAdmin\SuperAdminTechnologyController;
use App\Http\Controllers\SuperAdmin\SuperAdminUserController;
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
Route::get('/contact', [MessageController::class, 'index'])->name('contact');
Route::post('/contact', [MessageController::class, 'store'])->name('contact.store');

//Auth Part
Route::get('/logout', [LogoutController::class, 'index'])->name('logout');
Route::get('/forgot-password', [ForgotPasswordController::class, 'index'])->name('forgotPassword');
Route::post('/forgot-password', [ForgotPasswordController::class, 'forgot'])->name('forgotPasswordPost');
Route::get('/forgot-password/send-mail/{id}', [ForgotPasswordController::class, 'sendMail'])->name('forgotPasswordSendMail');
Route::get('/forgot-password/verification/{id}/{token}', [ForgotPasswordController::class, 'varification'])->name('forgotPasswordVerification');
Route::post('/forgot-password/verify', [ForgotPasswordController::class, 'verify'])->name('forgotPasswordVerify');
Route::get('/change-password/{id}/{token}', [ChangePasswordController::class, 'index'])->name('changePassword');
Route::post('/change-password/', [ChangePasswordController::class, 'change_password'])->name('changePasswordPost');

Route::post('/fetch/district', [DropdownController::class, 'fatchDistrict'])->name('fatchDistrict');
Route::post('/fetch/upazila', [DropdownController::class, 'fatchUpazila'])->name('fatchUpazila');

Route::middleware(['guest'])->group(function(){
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'postLogin'])->name('postlogin');
});

//Super Admin Route Start
Route::middleware(['auth','super-admin'])->group(function(){
    Route::get('/super-admin/dashboard', [SuperAdminDashboardController::class, 'index'])->name('super-admin.dashboard');
    Route::get('/super-admin/profile', [SuperAdminProfileController::class, 'index'])->name('super-admin.profile');
    Route::post('/super-admin/profile/update', [SuperAdminProfileController::class, 'update'])->name('profile.update');
    Route::get('/super-admin/notice', [SuperAdminNoticeController::class, 'index'])->name('notice.index');
    Route::post('/super-admin/notice/store', [SuperAdminNoticeController::class, 'store'])->name('notice.store');
    Route::get('/super-admin/notice/delete/{id}', [SuperAdminNoticeController::class, 'delete'])->name('notice.delete');
    Route::get('/super-admin/notice/download/{file}', [SuperAdminNoticeController::class, 'download'])->name('super-admin.notice.download');
    Route::get('super-admin/message', [SuperAdminMessageController::class, 'index'])->name('message.index');
    Route::get('/super-admin/setup/', [SuperAdminSetupController::class, 'index'])->name('setup.index');
    Route::post('/super-admin/setup/semister/add', [SuperAdminSetupController::class, 'semister_store'])->name('semister.store');
    Route::post('/super-admin/setup/department/add', [SuperAdminSetupController::class, 'department_store'])->name('department.store');
    Route::post('/super-admin/setup/session/add', [SuperAdminSetupController::class, 'session_store'])->name('session.store');
    Route::post('/super-admin/setup/possion/add', [SuperAdminSetupController::class, 'possion_store'])->name('possion.store');
    Route::post('/super-admin/setup/blood-group/add', [SuperAdminSetupController::class, 'blood_group_store'])->name('blood_group.store');
    Route::post('/super-admin/setup/board/add', [SuperAdminSetupController::class, 'board_store'])->name('board.store');
    Route::post('/super-admin/setup/academic-exam/add', [SuperAdminSetupController::class, 'academic_exam_store'])->name('academic_exam.store');
    Route::resource('super-admin/technology', SuperAdminTechnologyController::class);
    Route::resource('super-admin/students', SuperAdminStudentController::class);
    Route::resource('super-admin/employees', SuperAdminEmployeesController::class);
    Route::resource('super-admin/users', SuperAdminUserController::class);
    Route::get('/super-admin/users/active/{id}', [SuperAdminUserController::class, 'status_active'])->name('user.status.active');
    Route::get('/super-admin/users/deactive/{id}', [SuperAdminUserController::class, 'status_deactive'])->name('user.status.deactive');
});

//Admin Route Start
Route::middleware(['auth','admin'])->group(function(){
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/profile', [AdminProfileController::class, 'index'])->name('admin.profile');
    Route::post('/admin/profile/update', [AdminProfileController::class, 'update'])->name('admin.profile.update');
    Route::get('/admin/notice', [AdminNoticeController::class, 'index'])->name('admin.notice.index');
    Route::get('/admin/notice/panding', [AdminNoticeController::class, 'panding'])->name('admin.notice.panding');
    Route::get('/admin/notice/declined', [AdminNoticeController::class, 'declined'])->name('admin.notice.declined');
    Route::get('/admin/notice/create', [AdminNoticeController::class, 'create'])->name('admin.notice.create');
    Route::post('/admin/notice/store', [AdminNoticeController::class, 'store'])->name('admin.notice.store');
    Route::get('/admin/notice/download/{file}', [AdminNoticeController::class, 'download'])->name('admin.notice.download');
    Route::get('admin/message', [AdminMessageController::class, 'index'])->name('admin.message.index');
    Route::get('/admin/setup/', [AdminSetupController::class, 'index'])->name('admin.setup.index');
    Route::resource('admin/a-technology', AdminTechnologyController::class);
    Route::resource('admin/a-students', AdminStudentController::class);
    Route::resource('admin/a-employees', AdminEmployeesController::class);
    Route::get('/admin/employee/panding', [AdminEmployeesController::class, 'panding'])->name('admin.employees.panding');
    Route::get('/admin/employee/declined', [AdminEmployeesController::class, 'declined'])->name('admin.employees.declined');
    Route::resource('admin/a-users', AdminUserController::class);
});
//Admin Route End

//Teacher Route Start
Route::middleware(['auth','teacher'])->group(function(){
    Route::get('/teacher/profile', [TeacherProfileController::class, 'index'])->name('teacher.profile');
    Route::post('/teacher/profile/update', [TeacherProfileController::class, 'update'])->name('teacher.profile.update');
});
//Teacher Route End

//Student Route Start
Route::middleware(['auth','student'])->group(function(){
    Route::get('/student/profile', [StudentProfileController::class, 'index'])->name('student.profile');
    Route::post('/student/profile/update', [StudentProfileController::class, 'update'])->name('student.profile.update');
    Route::get('/student/books', [StudentProfileController::class, 'books'])->name('student.books');
});
//Student Route End

//Librarian Route Start
Route::middleware(['auth','librarian'])->group(function(){
    Route::get('/librarian/profile', [LibrarianProfileController::class, 'index'])->name('librarian.profile');
    Route::post('/librarian/profile/update', [LibrarianProfileController::class, 'update'])->name('librarian.profile.update');
    Route::resource('librarian/books', LibrarianBooksController::class);
    Route::resource('librarian/issue', LibrarianBooksIssueController::class);
    Route::post('/librarian/issue/book', [LibrarianBooksIssueController::class, 'issue_search'])->name('issue.search');
    Route::get('/librarian/issue/book/{student_id}', [LibrarianBooksIssueController::class, 'issue_book_show'])->name('issue.book.show');
    Route::post('/librarian/issue/books', [LibrarianBooksIssueController::class, 'issue_book'])->name('issue.book');
    Route::get('/librarian/return', [LibrarianReturnBookController::class, 'index'])->name('return.index');
    Route::post('/librarian/return/book', [LibrarianReturnBookController::class, 'return_search'])->name('return.search');
    Route::get('/librarian/return/book/{student_id}', [LibrarianReturnBookController::class, 'return_book_show'])->name('return.book.show');
    Route::post('/librarian/return/books/{id}', [LibrarianReturnBookController::class, 'return_book'])->name('return.book');
});
//Librarian Route End

