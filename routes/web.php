<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\LetterTypeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\UserController;
use App\Models\Staff;
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

Route::get('/', [LetterTypeController::class, 'dashboard']);





Route::get('/staffCreate', [UserController::class, 'staffCreate'])->name('dataTuCreate');
Route::post('/staffCreate/store', [StaffController::class, 'store'])->name('staff');
Route::get('/staff', [StaffController::class, 'staff'])->name('dataTu');
Route::get('/staff/edit/{id}', [StaffController::class, 'edit'])->name('staff.edit');
Route::patch('/staff/update/{id}', [StaffController::class, 'update'])->name('staff.update');
Route::delete('/staff/delete/{id}', [StaffController::class, 'destroy'])->name('staff.delete');



Route::get('/letterTypeCreate', [LetterTypeController::class, 'letterType'])->name('dataletterType');
Route::post('/dataCreate/store', [LetterTypeController::class, 'store'])->name('dataSurat');
Route::get('/data', [LetterTypeController::class, 'dataCreate'])->name('dataSuratCreate');
Route::get('/letterType/edit/{id}', [GuruController::class, 'edit'])->name('letterType.edit');
Route::patch('/letterType/update/{id}', [GuruController::class, 'update'])->name('letterType.update');
Route::delete('/letterType/delete/{id}', [GuruController::class, 'destroy'])->name('letterType.delete');



Route::get('/guru', [GuruController::class, 'guru'])->name('dataGuru');
Route::post('/guruCreate/store', [GuruController::class, 'store'])->name('guru');
Route::get('/guruCreate', [UserController::class, 'guruCreate'])->name('dataGuruCreate');
Route::get('/guru/edit/{id}', [GuruController::class, 'edit'])->name('guru.edit');
Route::patch('/guru/update/{id}', [GuruController::class, 'update'])->name('guru.update');
Route::delete('/guru/delete/{id}', [GuruController::class, 'destroy'])->name('guru.delete');








Route::get('/login', [LoginController::class, 'index'])->name('login');


Route::get('/register', [UserController::class, 'index']);
Route::post('/register', [UserController::class, 'store']);


