<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\InspectorController;
use App\Http\Controllers\AttendanceController;

Route::get('register', [AuthController::class, 'registerView'])->name('auth.register_view');
Route::post('register', [AuthController::class, 'register'])->name('auth.register');
Route::get('login', [AuthController::class, 'loginView'])->name('auth.login_view');
Route::post('login', [AuthController::class, 'login'])->name('auth.login');
Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::get('/', [AuthController::class, 'home'])->name('auth.home');
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('auth.dashboard');

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('auth.google_callback');


Route::group(['middleware' => 'login'], function () {
    Route::group(['middleware' => ['role:admin']], function () {
        Route::get('employee', [EmployeeController::class, 'index'])->name('employee.index');

        Route::get('users', [UserController::class, 'index'])->name('users.index');
        Route::get('users/create', [UserController::class, 'create'])->name('users.create');
        Route::post('users', [UserController::class, 'store'])->name('users.store');
        Route::get('users/{id}', [UserController::class, 'show'])->name('users.show');
        Route::get('users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
        Route::put('users/{id}', [UserController::class, 'update'])->name('users.update');
        Route::delete('users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

        Route::get('attendance', [AttendanceController::class, 'index'])->name('attendance.index');
        Route::get('attendance/{id}/edit', [AttendanceController::class, 'edit'])->name('attendance.edit');
        Route::put('attendance/{id}', [AttendanceController::class, 'update'])->name('attendance.update');
        Route::delete('attendance/{id}', [AttendanceController::class, 'destroy'])->name('attendance.destroy');

        Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
        Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create');
        Route::post('categories', [CategoryController::class, 'store'])->name('categories.store');
        Route::get('categories/{id}', [CategoryController::class, 'show'])->name('categories.show');
        Route::get('categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
        Route::put('categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
        Route::delete('categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');

        Route::get('inspectors', [InspectorController::class, 'index'])->name('inspectors.index');
        Route::get('inspectors/create', [InspectorController::class, 'create'])->name('inspectors.create');
        Route::post('inspectors', [InspectorController::class, 'store'])->name('inspectors.store');
        Route::get('inspectors/{id}', [InspectorController::class, 'show'])->name('inspectors.show');
        Route::get('inspectors/{id}/edit', [InspectorController::class, 'edit'])->name('inspectors.edit');
        Route::put('inspectors/{id}', [InspectorController::class, 'update'])->name('inspectors.update');
        Route::delete('inspectors/{id}', [InspectorController::class, 'destroy'])->name('inspectors.destroy');
    });


    Route::group(['middleware' => ['role:employee|admin']], function () {
        Route::get('auth/user', [UserController::class, 'loggedInUser'])->name('users.details');

        Route::post('attendance', [AttendanceController::class, 'store'])->name('attendance.store');
        Route::get('attendance/{id}', [AttendanceController::class, 'show'])->name('attendance.show');

        Route::get('files', [FileController::class, 'index'])->name('files.index');
        Route::get('create', [FileController::class, 'create'])->name('files.create');
        Route::get('details', [FileController::class, 'show'])->name('files.show');

        Route::get('roles', [RoleController::class, 'index'])->name('roles.index');

        Route::get('download/file', [DownloadController::class, 'downloadFile'])->name('file.download');
        Route::get('download/ddreport', [DownloadController::class, 'downloadDdReport'])->name('ddreport.download');
    });
});


Route::post('test', [UserController::class, 'test'])->name('users.test');
