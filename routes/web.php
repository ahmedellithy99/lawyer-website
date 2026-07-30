<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/practice-areas', 'pages.practice-areas')->name('practice-areas');
Route::view('/founder', 'pages.founder')->name('founder');
Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/privacy-policy', 'pages.privacy')->name('privacy');
Route::view('/legal-disclaimer', 'pages.disclaimer')->name('disclaimer');
Route::get('/practice-areas/{slug}', function (string $slug) {
    abort_unless(array_key_exists($slug, config('lawoffice.practices')), 404);
    return view('pages.practice-area', ['practice' => config("lawoffice.practices.{$slug}")]);
})->name('practice-area');
