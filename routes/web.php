<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SweetsController;
use App\Models\Sweets;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/menu', [SweetsController::class, 'index']);

Route::get('/menu/{id}', [SweetsController::class, 'show']);

Route::get('/supermarket', function(){
    return view('supermarket');
});

Route::get('/details', function(){
    return view('details');
});

Route::get('/create', [SweetsController::class, 'create']);

Route::post('/', [SweetsController::class, 'store']);

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/list', [SweetsController::class, 'index']);

Route::get('delete/{id}', [SweetsController::class, 'destroy']);

Route::get('edit/{id}', [SweetsController::class,'showData']);

Route::post('edit', [SweetsController::class,'update']);