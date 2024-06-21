<?php

use App\Http\Controllers\admincontroll;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\dashbocontroller;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('loginAdmin');
})->name('admin');

Route::post('/admin/login', [admincontroll::class, 'login'])->name('admin.login.submit');

// Route::get('/dashbo', function () {
//     return view('dashboard');
// })->name('dash');

Route::get('/dashbo', [dashbocontroller::class, 'index'])->name('dash');