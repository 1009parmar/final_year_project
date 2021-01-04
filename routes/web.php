<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cources;
use App\Http\Controllers\contactController;
use App\Http\Controllers\principalController;
use App\Http\Controllers\facultyController;
use App\Http\Controllers\feedbackController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\companyController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\AssignmentController;





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

Route::get('/', function () {
    return view('index');
});


// Route::get('/Staff','ShowstaffController@viewstaff')->name('view_staff');


/*********************     Cources start        ********************************/
Route::get('/it', [cources::class, 'viewcource_it'])->name('view_cource_it');

Route::get('/ce', [cources::class, 'viewcource_ce'])->name('view_cource_ce');

/*********************     Cources End        ********************************/



/*********************     Contact start        ********************************/
Route::get('/contact', [contactController::class, 'viewcontact'])->name('view_contact');
/*********************     Contact End        ********************************/



/*********************     home start        ********************************/
Route::get('/principal', [principalController::class, 'viewprincipal'])->name('view_principal');

Route::get('/faculty', [facultyController::class, 'viewfaculty'])->name('view_faculty');

Route::get('/general_staff', function () {
    return view('people/general/general_staff');
});
/*********************     home End        ********************************/




/*********************     FeedBack start        ********************************/
Route::get('/sendfeedback', [feedbackController::class, 'sendfeedback'])->name('send_feedback');
/*********************     FeedBack End        ********************************/




/*********************     Login start        ********************************/
Route::get('/login', [loginController::class, 'login'])->name('login_page');

// Route::get('/exe', [loginController::class, 'e'])->name('exe');


Route::post('/admin_valid', [adminController::class, 'login'])->name('admin_valid');

Route::post('/faculty_valid', [facultyController::class, 'login'])->name('faculty_valid');
/*********************     Login End        ********************************/



/*********************     Admin start        ********************************/
Route::get('/admin_home', function () {
    return view('master/admin_home');
});

Route::get('/all_staff', [adminController::class, 'all_staff'])->name('all_staff');

Route::get('/add_staff', [adminController::class, 'add_staff'])->name('add_staff');

Route::get('/edit_staff_home', [adminController::class, 'edit_staff_home'])->name('edit_staff_home');

Route::post('/add_staff_submit', [adminController::class, 'add_staff_submit'])->name('add_staff_submit');

Route::get('/edit_staff/{id}', [adminController::class, 'edit_staff'])->name('edit_staff');

Route::delete('/delete_staff/{id}', [adminController::class, 'delete_staff'])->name('delete_staff');

Route::post('/update_staff', [adminController::class, 'update_staff'])->name('update_staff');

Route::get('/view_company_admin', [companyController::class, 'view_company_admin'])->name('view_company_admin');

Route::get('/add_branch', [adminController::class, 'add_branch'])->name('add_branch');

Route::post('/add_branch_submit', [adminController::class, 'add_branch_submit'])->name('add_branch_submit');

Route::get('/view_branch', [adminController::class, 'view_branch'])->name('view_branch');

Route::get('/edit_branch_home', [adminController::class, 'edit_branch_home'])->name('edit_branch_home');

Route::get('/edit_branch/{id}', [adminController::class, 'edit_branch'])->name('edit_branch');

Route::delete('delete_branch/{id}', [adminController::class, 'delete_branch'])->name('delete_branch');

Route::post('/update_branch', [adminController::class, 'update_branch'])->name('update_branch');


/*********************     Admin End        ********************************/


/*********************     staff start        ********************************/
Route::get('/faculty_home', function () {
    return view('faculty/faculty_home');
});
Route::get('/view_company_faculty', [companyController::class, 'view_company_faculty'])->name('view_company_faculty');

Route::get('/add_company', [facultyController::class, 'add_company'])->name('add_company');

Route::post('/add_company_submit', [companyController::class, 'add_company_submit'])->name('add_company_submit');

Route::get('/view_company', [companyController::class, 'view_company'])->name('view_company');

Route::get('/add_student', [facultyController::class, 'add_student'])->name('add_student');

Route::post('/add_student_submit', [StudentController::class, 'add_student_submit'])->name('add_student_submit');

Route::get('/edit_student_home', [StudentController::class, 'edit_student_home'])->name('edit_student_home');

Route::get('/edit_student/{id}', [StudentController::class, 'edit_student'])->name('edit_student');

Route::post('/update_student', [StudentController::class, 'update_student'])->name('update_student');

Route::delete('delete_student/{id}', [StudentController::class, 'delete_student'])->name('delete_student');

Route::get('/view_student_faculty', [StudentController::class, 'view_student_faculty'])->name('view_student_faculty');

Route::get('/add_assignment', [AssignmentController::class, 'add_assignment'])->name('add_assignment');

Route::post('/upload_assignment', [AssignmentController::class, 'upload_assignment'])->name('upload_assignment');

Route::get('/view_assignment_faculty', [AssignmentController::class, 'view_assignment_faculty'])->name('view_assignment_faculty');

Route::get('/download_assignment_faculty/{file}', [AssignmentController::class, 'download_assignment_faculty'])->name('download_assignment_faculty');

Route::get('/edit_assignment_home', [AssignmentController::class, 'edit_assignment_home'])->name('edit_assignment_home');

Route::get('/edit_assignment/{id}', [AssignmentController::class, 'edit_assignment'])->name('edit_assignment');

Route::post('/update_assignment', [AssignmentController::class, 'update_assignment'])->name('update_assignment');

Route::delete('delete_assignment/{id}', [AssignmentController::class, 'delete_assignment'])->name('delete_assignment');




/*********************     staff End       ********************************/




/*********************     Event Start       ********************************/

Route::get('/event_home_faculty', function () {
    return view('faculty/event/event_home');
})->name('event_home_faculty');

Route::get('/event_home_admin', function () {
    return view('master/event/event_home');
})->name('event_home_admin');

/*********************     Event End       ********************************/