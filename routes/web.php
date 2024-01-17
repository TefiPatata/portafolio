<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EjemploController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SkillController;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/ejemplo', App\Http\Controllers\EjemploController::class);
Route::resource('/products', ProductController::class);
Route::resource('/skills', SkillController::class);

Route::get('/', [SkillController::class, 'obtener']);
Route::resource('/education', App\Http\Controllers\EducationController::class);
Route::resource('/certificate', App\Http\Controllers\CertificateController::class);
Route::resource('/message', App\Http\Controllers\MessageController::class);
Route::resource('/client', App\Http\Controllers\ClientController::class);
Route::resource('/aboutme', App\Http\Controllers\AboutmeController::class);
Route::resource('/socialnetwork', App\Http\Controllers\SocialnetworkController::class);
