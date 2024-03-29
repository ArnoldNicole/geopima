<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\WebsiteController::class, 'welcome'])->name('welcome');
Route::get('/about', [App\Http\Controllers\WebsiteController::class, 'about'])->name('about');
Route::get('/services', [App\Http\Controllers\WebsiteController::class, 'services'])->name('services');
Route::get('/contact', [App\Http\Controllers\WebsiteController::class, 'contact'])->name('contact');
Route::post('/contact', [App\Http\Controllers\WebsiteController::class, 'submit'])->name('contact.send');

// Auth::routes(['register' => false]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
