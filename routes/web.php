<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ScheduleController as AdminScheduleController;
use App\Http\Controllers\ScheduleController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/egypt', 'pages.egypt')->name('egypt');
Route::view('/greece', 'pages.greece')->name('greece');
Route::view('/excursions', 'pages.excursions')->name('excursions');
Route::view('/prices', 'pages.prices')->name('prices');
Route::get('/schedule', [ScheduleController::class, 'index'])->name('schedule');
Route::view('/booking', 'pages.booking')->name('booking');
Route::view('/faq', 'pages.faq')->name('faq');
Route::view('/contact', 'pages.contact')->name('contact');

Route::get('/login',  [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.attempt');

Route::prefix('admin')->group(function () {
    Route::get('/login',  fn() => redirect()->route('login'))->name('admin.login');

    Route::middleware('auth')->group(function () {
        Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');
        Route::get('/schedules',               [AdminScheduleController::class, 'index'])->name('admin.schedules.index');
        Route::post('/schedules',              [AdminScheduleController::class, 'store'])->name('admin.schedules.store');
        Route::put('/schedules/{schedule}',    [AdminScheduleController::class, 'update'])->name('admin.schedules.update');
        Route::delete('/schedules/{schedule}', [AdminScheduleController::class, 'destroy'])->name('admin.schedules.destroy');
        Route::get('/', fn() => redirect()->route('admin.schedules.index'));
    });
});
