<?php

use App\Http\Controllers\EducationController;
use App\Http\Controllers\UserDetailController;
use App\Models\UserDetail;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/userdetails/create', [UserDetailController::class, 'create'])->name('userDetails.create');
Route::post('/userdetails', [UserDetailController::class, 'store'])->name('userDetails.store');

//education
Route::get('/education/index', [EducationController::class, 'index'])->name('education.index');
Route::get('/education/create', [EducationController::class, 'create'])->name('education.craete');
Route::post('/education', [EducationController::class, 'store'])->name('education.store');
Route::get('/education/{education}/edit', [EducationController::class, 'edit'])->name('education.edit');
Route::put('/education/{education}', [EducationController::class, 'update'])->name('education.update');
Route::delete('/education/{education}/delete', [EducationController::class, 'delete'])->name('education.delete');
