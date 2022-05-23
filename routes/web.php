<?php
use App\Http\Controllers\StudentController;
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




Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

/*CRUD STUDENTS*/
Route::delete('/delete/{id}',[StudentController::class,'destroy'])->name('delete');
Route::get('/edit/{id}',[StudentController::class,'edit'])->name('edit');
Route::patch('/update/{id}',[StudentController::class,'update'])->name('update');
Route::post('/students',[StudentController::class,'store'])->name('store');
Route::get('/create',[StudentController::class,'create'])->name('create');

/*STUDENT*/
Route::get('/show/{student}',[StudentController::class,'show'])->name('show');