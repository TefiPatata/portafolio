<?php

use App\Http\Controllers\CertificateController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EjemploController;
use App\Http\Controllers\FrontEndController;
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

Route::get('/', [FrontEndController::class, 'obtener_datos'])->name('obtener_datos');
Route::resource('/education', App\Http\Controllers\EducationController::class);
Route::resource('/certificates', App\Http\Controllers\CertificateController::class);
Route::resource('/messages', App\Http\Controllers\MessageController::class);
Route::resource('/clients', App\Http\Controllers\ClientController::class);
Route::resource('/aboutme', App\Http\Controllers\AboutmeController::class);
Route::resource('/socialnetworks', App\Http\Controllers\SocialnetworkController::class);
Route::resource('/work', App\Http\Controllers\WorkController::class);
Route::resource('/skillssection', App\Http\Controllers\SkillssectionController::class);
Route::resource('/services', App\Http\Controllers\ServiceController::class);
Route::resource('/portfolio', App\Http\Controllers\PortfolioController::class);
Route::resource('/profileinfo', App\Http\Controllers\ProfileinfoController::class);
