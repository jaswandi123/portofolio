<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\homecontroller;
use App\Http\controllers\profilecontroller;
use App\Http\controllers\aboutcontroller;
use App\Http\controllers\contactcontroller;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [homecontroller::class, 'home'])->name('home');
Route::get('/profile', [profilecontroller::class, 'profile'])->name('profile');
Route::get('/about', [aboutcontroller::class, 'about'])->name('about');
Route::get('/contact', [contactcontroller::class, 'contact'])->name('contact');
/* Route::get('/home', function () {
    return view('home');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
}); */

