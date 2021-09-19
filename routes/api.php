<?php

use App\Http\Controllers\ChangeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::name('api.')->group(function () {
    Route::get('currencies', [ChangeController::class, 'getCurrencies'])->name('get-currencies');
    Route::post('calculate-change', [ChangeController::class, 'calculate'])->name('calculate-change');
});

