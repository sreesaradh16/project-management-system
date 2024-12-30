<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TimeEntryController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::get('projects/index', [ProjectController::class, 'index'])->name('projects.index');
    Route::get('tasks/index', [TaskController::class, 'index'])->name('tasks.index');
    Route::resource('time-entries', TimeEntryController::class)->names('time_entries');
    Route::get('reports/index', [ReportController::class, 'index'])->name('reports.index');
    Route::post('reports/filter', [ReportController::class, 'filter'])->name('reports.filter');
});
