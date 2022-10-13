<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\PayrollController;




Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('auth.login');
});

//staff route
Route::get('/staffHome', function () {
    return view('staff.home');
});
Route::get('/staffCreate', function () {
    return view('staff.create');
});
Route::get('/staffShow', function () {
    return view('staff.show');
});
Route::get('/staffReport', function () {
    return view('staff.report');
});

//student route
Route::get('/studentHome', function () {
    return view('students.home');
});
Route::get('/studentCreate', function () {
    return view('students.create');
});
Route::get('/studentfShow', function () {
    return view('students.show');
});
Route::get('/studentReport', function () {
    return view('students.report');
});

//Events routes
Route::get('/eventHome', function () {
    return view('events.home');
});
Route::get('/eventCreate', function () {
    return view('events.create');
});
Route::get('/eventShow', function () {
    return view('events.show');
});
Route::get('/eventReport', function () {
    return view('events.report');
});

//payroll routes
Route::get('/payrollHome', function () {
    return view('payroll.home');
});
Route::get('/payrollCreate', function () {
    return view('payroll.create');
});
Route::get('/payrollShow', function () {
    return view('payroll.show');
});
Route::get('/payrollReport', function () {
    return view('payroll.report');
});


Route::resource('/staff', StaffController::class);
Route::get('/getDetails',[StaffController::class,'getDetails']);
Route::get('/getStudentDetails',[StudentController::class,'getStudentDetails']);
Route::get('/getPayrollDetails',[PayrollController::class,'getPayrollDetails']);
Route::get('/getEventDetails',[EventsController::class,'getEventDetails']);
Route::resource('/student', StudentController::class);
Route::resource('/event', EventsController::class);
Route::resource('/payroll', PayrollController::class);
Route::get('/generate-pdf', [StaffController::class, 'generatePDF']);
Route::get('/generate-pdf', [StudentController::class, 'generatePDF']);
Route::get('/generate-pdf', [PayrollController::class, 'generatePDF']);
Route::get('/generate-pdf', [EventsController::class, 'generatePDF']);
Route::get('/autocomplete', [PayrollController::class, 'autoIndex'])->name('autocomplete');
Route::post('/autocomplete/fetch', [PayrollController::class, 'fetch'])->name('autocomplete.fetch');

