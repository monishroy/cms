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
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\DropdownController;
use App\Http\Controllers\Frontend\MessageController;
use App\Http\Controllers\Librarian\LibrarianBooksController;
use App\Http\Controllers\Librarian\LibrarianBooksIssueController;
use App\Http\Controllers\Librarian\LibrarianProfileController;
use App\Http\Controllers\Librarian\LibrarianReturnBookController;
use App\Http\Controllers\PracticalController;
use App\Http\Controllers\Student\PracticalController as StudentPracticalController;
use App\Http\Controllers\Student\StudentProfileController;
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
Route::get('/practical/download/{file}', [DownloadController::class, 'practical'])->name('practical.download');


Route::post('/fetch/district', [DropdownController::class, 'fatchDistrict'])->name('fatchDistrict');
Route::post('/fetch/upazila', [DropdownController::class, 'fatchUpazila'])->name('fatchUpazila');

Route::middleware(['guest'])->group(function(){
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'postLogin'])->name('postlogin');
});

//Admin Route Start
Route::middleware(['auth','admin'])->group(function(){
    Route::get('admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('admin/profile', [AdminProfileController::class, 'index'])->name('admin.profile');
    Route::post('admin/profile/update', [AdminProfileController::class, 'update'])->name('profile.update');
    Route::resource('admin/notice', AdminNoticeController::class);
    Route::get('admin/notice-panding', [AdminNoticeController::class, 'panding'])->name('notice.panding');
    Route::get('admin/notice-declined', [AdminNoticeController::class, 'declined'])->name('notice.declined');
    Route::get('admin/notice/download/{file}', [AdminNoticeController::class, 'download'])->name('admin.notice.download');
    Route::get('admin/message', [AdminMessageController::class, 'index'])->name('message.index');
    Route::get('admin/setup/', [AdminSetupController::class, 'index'])->name('setup.index');
    Route::post('admin/setup/semister/add', [AdminSetupController::class, 'semister_store'])->name('semister.store');
    Route::post('admin/setup/department/add', [AdminSetupController::class, 'department_store'])->name('department.store');
    Route::post('admin/setup/session/add', [AdminSetupController::class, 'session_store'])->name('session.store');
    Route::post('admin/setup/possion/add', [AdminSetupController::class, 'possion_store'])->name('possion.store');
    Route::post('admin/setup/blood-group/add', [AdminSetupController::class, 'blood_group_store'])->name('blood_group.store');
    Route::post('admin/setup/board/add', [AdminSetupController::class, 'board_store'])->name('board.store');
    Route::post('admin/setup/academic-exam/add', [AdminSetupController::class, 'academic_exam_store'])->name('academic_exam.store');
    Route::resource('admin/technology', AdminTechnologyController::class);
    Route::resource('admin/students', AdminStudentController::class);
    Route::get('admin/students-panding', [AdminStudentController::class, 'panding'])->name('students.panding');
    Route::get('admin/students-declined', [AdminStudentController::class, 'declined'])->name('students.declined');
    Route::get('admin/student-accept/{id}', [AdminStudentController::class, 'status_accept'])->name('student.accept');
    Route::get('admin/student-decline/{id}', [AdminStudentController::class, 'status_decline'])->name('student.decline');
    Route::get('admin/student-panding/{id}', [AdminStudentController::class, 'status_panding'])->name('student.panding');
    Route::resource('admin/employees', AdminEmployeesController::class);
    Route::get('admin/employees-panding', [AdminEmployeesController::class, 'panding'])->name('employees.panding');
    Route::get('admin/employees-declined', [AdminEmployeesController::class, 'declined'])->name('employees.declined');
    Route::resource('admin/users', AdminUserController::class);
    Route::get('admin/users/active/{id}', [AdminUserController::class, 'status_active'])->name('user.status.active');
    Route::get('admin/users/deactive/{id}', [AdminUserController::class, 'status_deactive'])->name('user.status.deactive');
});
//Admin Route End

//Teacher Route Start
Route::middleware(['auth','teacher'])->group(function(){
    Route::get('teacher/profile', [TeacherProfileController::class, 'index'])->name('teacher.profile');
    Route::post('teacher/profile/update', [TeacherProfileController::class, 'update'])->name('teacher.profile.update');
    Route::resource('teacher/practicals', PracticalController::class);
    Route::get('teacher/practicals/active/{id}', [PracticalController::class, 'active_practical'])->name('active.practical');
    Route::get('teacher/practicals/deactive/{id}', [PracticalController::class, 'deactive_practical'])->name('deactive.practical');
});
//Teacher Route End

//Student Route Start
Route::middleware(['auth','student'])->group(function(){
    Route::get('/student/profile', [StudentProfileController::class, 'index'])->name('student.profile');
    Route::post('/student/profile/update', [StudentProfileController::class, 'update'])->name('student.profile.update');
    Route::get('/student/books', [StudentProfileController::class, 'books'])->name('student.books');
    Route::get('student/practical', [StudentPracticalController::class, 'index'])->name('student.practicals');
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

