<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EducationLevelController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::resource('departments', DepartmentController::class);
Route::resource('education-levels', EducationLevelController::class);
Route::resource('employees', EmployeeController::class);
Route::get('/report', [ReportController::class, 'index'])->name('report.index');
