<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\AttendanceController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.auth.auth-login');
});

Route::middleware(['auth'])->group(function(){
    Route::get('home', function () {
        return view('pages.dashboard', ['type_menu' => 'dashboard']);
    })->name('home');

    Route::resource('users',UserController::class);

    Route::resource('companies',CompanyController::class);

    //edit company view edit
    Route::get('companies/{id}/edit', [CompanyController::class, 'edit'])->name('company.show');

    //company update
    Route::put('companies/update', [CompanyController::class, 'update'])->name('company.update');
    //attendance
    Route::resource('attendances', AttendanceController::class);
});

