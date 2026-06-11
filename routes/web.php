<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/egypt', 'pages.egypt')->name('egypt');
Route::view('/greece', 'pages.greece')->name('greece');
Route::view('/excursions', 'pages.excursions')->name('excursions');
Route::view('/prices', 'pages.prices')->name('prices');
Route::view('/booking', 'pages.booking')->name('booking');
Route::view('/faq', 'pages.faq')->name('faq');
Route::view('/contact', 'pages.contact')->name('contact');
