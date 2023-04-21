<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/Home', [HomeController::class, 'MainMenu']);
Route::get('/Home/Contact', [HomeController::class, 'Contact']);
Route::get('/Home/Tracking', [HomeController::class, 'Tracking']);