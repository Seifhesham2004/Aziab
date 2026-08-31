<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ScheduleController as AdminScheduleController;
use App\Http\Controllers\Admin\SiteController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ScheduleController;
use Illuminate\Support\Facades\Route;

// ---- Public site (blocked with a maintenance page when a super admin closes it) ----
Route::middleware('site_open')->group(function () {
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
    Route::post('/contact', [\App\Http\Controllers\FormController::class, 'contact'])->name('contact.send');
    Route::post('/booking', [\App\Http\Controllers\FormController::class, 'booking'])->name('booking.send');
});

Route::get('/login',  [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.attempt');

Route::prefix('admin')->group(function () {
    Route::get('/login',  fn() => redirect()->route('login'))->name('admin.login');

    Route::middleware('auth')->group(function () {
        Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');

        // Schedules (all admins)
        Route::get('/schedules',               [AdminScheduleController::class, 'index'])->name('admin.schedules.index');
        Route::post('/schedules',              [AdminScheduleController::class, 'store'])->name('admin.schedules.store');
        Route::put('/schedules/{schedule}',    [AdminScheduleController::class, 'update'])->name('admin.schedules.update');
        Route::delete('/schedules/{schedule}', [AdminScheduleController::class, 'destroy'])->name('admin.schedules.destroy');

        // User management — all admins can view/create; role rules enforced in the controller.
        Route::get('/users',  [UserController::class, 'index'])->name('admin.users.index');
        Route::post('/users', [UserController::class, 'store'])->name('admin.users.store');

        // Super-admin-only actions
        Route::middleware('super_admin')->group(function () {
            Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('admin.users.destroy');
            Route::post('/site/toggle',    [SiteController::class, 'toggle'])->name('admin.site.toggle');
        });

        Route::get('/', fn() => redirect()->route('admin.schedules.index'));
    });
});
