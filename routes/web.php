<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhraseController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\StatisticController;


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


Route::get('/', [PhraseController::class, 'random']);
Route::get('phrases/create', [PhraseController::class, 'create']);
Route::post('phrases', [PhraseController::class, 'store']);

Route::get('/upload', [UploadController::class, 'index']);
Route::post('/upload', [UploadController::class, 'create']);
Route::get('/test', [UploadController::class, 'test']);


Route::post('/statistic/{id}/wrong', [StatisticController::class, 'wrong']);
Route::post('/statistic/{id}/right', [StatisticController::class, 'right']);
