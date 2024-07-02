<?php

use App\Http\Controllers\Mycontroller;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth.dashboard')->group(function () {
    Route::get('/admin-lockscreen', [Mycontroller::class, 'admin_lockscreen'])->name('admin_lockscreen');
    Route::get('/dashboard', [Mycontroller::class, 'index'])->name('index');

    // Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

});
Route::middleware('auth.check')->group(function () {
    Route::get('/', [Mycontroller::class, 'home'])->name('home');
    Route::get('/emp-lockscreen', [Mycontroller::class, 'emp_lockscreen'])->name('emp_lockscreen');
    // Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
});

Route::get('/index2', function () {
    return view('pages.index2');
})->name('index2');
Route::get('/email-verification', function () {
    return view('users.emp-email-verify');
})->name('email_verification');
Route::get('/password_reset_view', function () {
    return view('users.emp-password-reset');
})->name('password_reset_view');

/* Forms Start*/
Route::get('/Leave-Application', [Mycontroller::class, 'Application_form'])->name('Leave_Application');
Route::get('/Leave-Application-user', [Mycontroller::class, 'Application_form_user'])->name('Leave_Application_user');
Route::get('/registration-employee-form', [Mycontroller::class, 'registration_employee'])->name('registration-employee-form');
Route::get('/ADMISSION-FORM-FOR-SESSION', [Mycontroller::class, 'student_admission'])->name('student_admission');
Route::get('/admin-unlock', [Mycontroller::class, 'admin_unlock'])->name('admin_unlock');
Route::get('/emp-unlock', [Mycontroller::class, 'emp_unlock'])->name('emp_unlock');

// Route::post('/admin-login', [Mycontroller::class, 'admin_login'])->name('admin_login');
Route::post('/admin-login', [Mycontroller::class, 'admin_login'])->name('admin_login');
Route::get('/admin-login',  [Mycontroller::class, 'admin_login_page'])->name('admin_login');
Route::get('/admin-logout',  [Mycontroller::class, 'admin_logout'])->name('admin_logout');
Route::post('/employee-login',  [Mycontroller::class, 'employee_login'])->name('employee_login');
Route::get('/employee-login',  [Mycontroller::class, 'employee_login_page'])->name('employee_login');
Route::get('/employee-logout',  [Mycontroller::class, 'emp_logout'])->name('employee_logout');
Route::get('/employee-account-settings',  [Mycontroller::class, 'emp_account_set'])->name('emp_account_set');
Route::post('/check_exists', [Mycontroller::class, 'check_exists'])->name('check_exists');
/* Forms End*/
/* Forms Insertion Start*/
Route::post('/insert', [Mycontroller::class, 'insert'])->name('insert');
Route::post('/add_design', [Mycontroller::class, 'add_design'])->name('add_design');
Route::get('/add_design', [Mycontroller::class, 'add_design_form'])->name('add_design');
Route::get('/add_depart', [Mycontroller::class, 'add_depart_form'])->name('add_depart');
Route::post('/add_depart', [Mycontroller::class, 'add_depart'])->name('add_depart');
Route::post('/emp_data/{id}', [Mycontroller::class, 'view'])->name('emp_data');

Route::post('/request', [Mycontroller::class, 'request'])->name('request');
// Route::get('/password_reset', [Mycontroller::class, 'password_reset_view'])->name('password_reset_view');
Route::post('/password_reset', [Mycontroller::class, 'password_reset'])->name('password_reset');
Route::post('/reset_password', [Mycontroller::class, 'reset_password'])->name('reset_password');
/* Forms Insertion End*/
    /* Tables and Datatables Start*/
    Route::get('/tables', [Mycontroller::class, 'tables'])->name('tables');
    Route::get('/datatable-employee', [Mycontroller::class, 'datatable_employee'])->name('datatable-employees');
    Route::get('/datatable-department', [Mycontroller::class, 'datatable_department'])->name('datatable-departments');
    Route::get('/datatable-designation', [Mycontroller::class, 'datatable_designation'])->name('datatable-designations');
    Route::get('/datatable-staff', [Mycontroller::class, 'datatable_staff'])->name('datatable-staff');
    Route::get('/datatable-leaves', [Mycontroller::class, 'datatable_leaves'])->name('datatable-leaves');
    Route::get('/datatable-leave-types', [Mycontroller::class, 'datatable_leave_types'])->name('datatable-leave_types');
    Route::get('/datatable-leaves', [Mycontroller::class, 'datatable_leaves'])->name('datatable-leaves');
    Route::get('/datatable-migrations', [Mycontroller::class, 'migrations'])->name('datatable-migrations');
    Route::get('/datatable-admins', [Mycontroller::class, 'migrations'])->name('datatable-admins');
    Route::get('/notification', [Mycontroller::class, 'notification'])->name('datatable-notifications');
    Route::get('/delete_design/{id}', [Mycontroller::class, 'delete_design'])->name('delete_design');
    Route::get('/delete_depart/{id}', [Mycontroller::class, 'delete_depart'])->name('delete_depart');
    /* Tables and Datatables End*/
    /* Forms update Start*/
    Route::get('updating-employee-form', [Mycontroller::class, 'updating_employee'])->name('updating-employee-form-dst-dpt');
    Route::get('updating-employee-form/edit/{id}', [Mycontroller::class, 'edit'])->name('updating-employee-form-edit');
    Route::get('updating-employee-form/view/{id}', [Mycontroller::class, 'edit'])->name('updating-employee-form-view');
    Route::post('updating-employee-form', [Mycontroller::class, 'update'])->name('updating-employee-form-update');
    Route::post('profile_update-form', [Mycontroller::class, 'profile_update'])->name('profile_update');
    Route::get('updating-department-form/edit/{id}', [Mycontroller::class, 'edit_department'])->name('updating-department-form-edit');
    Route::post('updating-department-form', [Mycontroller::class, 'update_department'])->name('updating-department-form-update');
    Route::get('updating-designation-form/edit/{id}', [Mycontroller::class, 'edit_designation'])->name('updating-designation-form-edit');
    Route::post('updating-designation-form', [Mycontroller::class, 'update_designation'])->name('updating-designation-form-update');
    Route::get('updating-employee-form/delete/{id}', [Mycontroller::class, 'delete'])->name('updating-employee-form-delete');
    Route::get('updating-leaves-form/edit/{id}', [Mycontroller::class, 'edit_leaves'])->name('updating-leaves-form-edit');
    Route::post('updating-leaves-form', [Mycontroller::class, 'update_leaves'])->name('updating-leaves-form-update');
    /* Forms update End*/

Route::get('/send_email', [Mycontroller::class, 'sendEmail'])->name('send_email');
