<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('index');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');


Route::group([
    'prefix' => 'account/',
    'middleware' => ['auth']
], function () {
    Route::get('/', [App\Http\Controllers\user\AccounteController::class, 'index'])->name('account.index');
    Route::get('/show/{id}', [App\Http\Controllers\user\WorkoutController::class, 'show'])->name('account.workout.show');
    Route::delete('/destroy/{id}', [App\Http\Controllers\user\WorkoutController::class, 'destroy'])->name('account.workout.destroy');

    Route::post('/', [App\Http\Controllers\user\WorkoutController::class, 'store'])->name('account.workout.store');

});
