<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RentController;

Route::group(['prefix' => 'rents'], function () {
    Route::get('/', [RentController::class, 'index']);
    Route::get('create', [RentController::class, 'create']);
    Route::post('store', [RentController::class, 'store']);
    Route::get('show/{rent}', [RentController::class, 'show']);
    Route::get('edit/{rent}', [RentController::class, 'edit']);
    Route::put('update/{rent}', [RentController::class, 'update']);
    Route::delete('delete/{rent}', [RentController::class, 'destroy']);
});
