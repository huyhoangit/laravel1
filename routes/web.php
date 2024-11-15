<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\QuadrangleController;
use App\Http\Controllers\SumController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'Hello'], function () {
    Route::get('/holle', [UserController::class, 'xinchao']);
});

Route::get('/test', [UserController::class, 'index']);

Route::group(['prefix' => 'Sum'], function () {
    Route::get('/Sum', [SumController::class, 'view']);
    Route::post('/Sum', [SumController::class, 'view']);
});

Route::group(['prefix' => 'area'], function () {
    Route::get('/area', [AreaController::class, 'view']);
    Route::post('/area', [AreaController::class, 'view']);
});

Route::group(['prefix' => 'quadrangle'], function () {
    Route::get('/quadrangle', [QuadrangleController::class, 'view']);
    Route::post('/quadrangle', [QuadrangleController::class, 'view']);
});
