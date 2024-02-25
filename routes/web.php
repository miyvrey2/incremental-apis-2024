<?php

use App\Http\Controllers\LessonsController;
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
Route::group(['prefix' => 'api/v1'], function () {
    Route::resource('lessons', LessonsController::class);
});

Route::get('/', function () {
    return view('welcome');
});
