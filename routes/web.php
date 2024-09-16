<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListsController;
use App\Http\Controllers\RentController;


Route::get('/', function () {
    return view('index');
});

Route::get('/create', function () {
    return view('create');
});

Route::post('/store', [RentController::class, 'store'])->name('store');

Route::resource('lists', ListsController::class)->names([
    'index' => 'lists.index',
    'create' => 'lists.create',
    'store' => 'lists.store',
    'show' => 'lists.show',
    'edit' => 'lists.edit',
    'update' => 'lists.update',
    'destroy' => 'lists.destroy',



]);


