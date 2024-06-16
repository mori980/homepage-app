<?php

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

Route::post('/homepage/createComment',\App\Http\Controllers\homepage\createCommentController::class) -> name('homepage.createComment');

Route::view('/', 'welcome');

Route::get('/', function () {
    return view('welcome');
});
 
Route::get('/homepage',\App\Http\Controllers\homepage\IndexController::class) -> name('homepage');

Route::get('/homepage/create',\App\Http\Controllers\homepage\ToCreateController::class) -> name('homepage.create');
Route::post('/homepage/createTweet',\App\Http\Controllers\homepage\CreateController::class) -> name('homepage.create.post');

Route::post('/homepage/GoodCount',\App\Http\Controllers\homepage\GoodCountController::class) -> name('homepage.goodCount');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');
 
Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
