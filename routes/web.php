<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [PagesController::class, 'index']) ->name('front.index');
Route::get('/shop', [PagesController::class, 'shop']) ->name('front.shop');
Route::get('/contact', [PagesController::class, 'contact']) ->name('front.contact');
Route::get('/about', [PagesController::class, 'about']) ->name('front.about');
Route::get('/client/login', [ClientController::class, 'login']) ->name('client.login');
//Route pour s'inscrire en tant que client
Route::get('/client/register', [ClientController::class, 'register']) ->name('client.register');
//Route backend Register
Route::post('/client/register/post', [ClientController::class, 'register_post']) ->name('client.register.post');
//route backend login
Route::post('/client/login/post', [ClientController::class, 'login_post']) ->name('client.login.post');

//Route Dashboard client
Route::get('/client/dashboard', [ClientController::class, 'Dashboard'])->name('client.dashboard');

