<?php

use Illuminate\Support\Facades\Route;

// controllers
use App\Http\Controllers\ComicController;

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

Route::resource('comics', ComicController::class);

Route::get('/contatti', function () {
    return view('contact');
});
