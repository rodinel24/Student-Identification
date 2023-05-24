<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ReservationConfirmationController;
use App\Http\Controllers\StudentController;



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





Route::get('/', [StudentController::class, 'index'])->name('student.index');

Route::get('/student/create', [StudentController::class, 'create'])->name('student.create');
Route::post( '/student', [StudentController::class, 'store'])->name('student.store');


Route::get( '/student/{id}',  [StudentController::class, 'update'])->name('student.update');



//route to destroy/delete data
Route::delete( '/student/{id}', [StudentController::class, 'destroy'])->name('student.destroy');

//route for exporting the table to excel
Route::get('/student/export', [StudentController::class, 'export'])->name('student.export');


