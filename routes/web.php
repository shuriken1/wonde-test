<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\EmployeesController;

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
    return redirect()->route('employees.index');
});

Route::get('/classes/{id}', [ClassesController::class, 'show'])->name('classes.show');

Route::prefix('employees')->name('employees.')->group(function () {
    Route::get('', [EmployeesController::class, 'index'])->name('index');
    Route::get('{id}', [EmployeesController::class, 'show'])->name('show');
});
