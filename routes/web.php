<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
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

Route::get('/', [LoginController::class, 'loginForm'])->name('login');
Route::post('/', [LoginController::class, 'loginUser'])->name('login');
Route::get('register', [LoginController::class, 'registerForm'])->name('register');
Route::post('register', [LoginController::class, 'registerUser'])->name('register');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Dashboard Routes
Route::prefix('admin/')->group(function(){
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('employee/personal-details', [EmployeeController::class, 'personalDetailsView'])->name('create-employee');
    Route::post('employee/personal-details', [EmployeeController::class, 'savePersonalDetails'])->name('create_employee');
    Route::get('employee/contacts', [EmployeeController::class, 'contactView'])->name('employee-contact');
    Route::post('employee/contacts', [EmployeeController::class, 'saveContact'])->name('employee-contact');
});
