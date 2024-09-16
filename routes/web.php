<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RentController;
use App\Http\Controllers\ListsController;

Route::resource('rents', RentController::class)->names([
    'index' => 'rents.index',
    'create' => 'rents.create',
    'store' => 'rents.store',
    'show' => 'rents.show',
    'edit' => 'rents.edit',
    'update' => 'rents.update',
    'destroy' => 'rents.destroy',
    

]);

Route::resource('lists', ListsController::class)->names([
    'index' => 'lists.index',
    'create' => 'lists.create',
    'store' => 'lists.store',
    'show' => 'lists.show',
    'edit' => 'lists.edit',
    'update' => 'lists.update',
    'destroy' => 'lists.destroy',



]);


