<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [HelloController::class, 'index']);

Route::get('/employees', [EmployeeController::class, 'index']);
Route::get('/employees/create', [EmployeeController::class, 'create']);
Route::post('/employees', [EmployeeController::class, 'store']);
