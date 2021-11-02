<?php

use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\PersonalProjectController;
use App\Http\Controllers\UserDetailController;
use App\Models\PersonalProject;
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


//UserDetails
Route::get('/userdetails/index', [UserDetailController::class, 'index'])->name('userDetails.index');
Route::get('/userdetails/create', [UserDetailController::class, 'create'])->name('userDetails.create');
Route::post('/userdetails', [UserDetailController::class, 'store'])->name('userDetails.store');
Route::get('/userDetail/{userDetail}/edit', [UserDetailController::class, 'edit'])->name('userDetail.edit');
Route::put('/userDetail/{userDetail}', [UserDetailController::class, 'update'])->name('userDetail.update');
Route::delete('/userDetail/{userDetail}/delete', [UserDetailController::class, 'delete'])->name('userDetail.delete');

//education
Route::get('/education/index', [EducationController::class, 'index'])->name('education.index');
Route::get('/education/create', [EducationController::class, 'create'])->name('education.craete');
Route::post('/education', [EducationController::class, 'store'])->name('education.store');
Route::get('/education/{education}/edit', [EducationController::class, 'edit'])->name('education.edit');
Route::put('/education/{education}', [EducationController::class, 'update'])->name('education.update');
Route::delete('/education/{education}/delete', [EducationController::class, 'delete'])->name('education.delete');

//experience
Route::get('/experience/index', [ExperienceController::class, 'index'])->name('experience.index');
Route::get('/experience/create', [ExperienceController::class, 'create'])->name('experience.craete');
Route::post('/experience', [ExperienceController::class, 'store'])->name('experience.store');
Route::get('/experience/{experience}/edit', [ExperienceController::class, 'edit'])->name('experience.edit');
Route::put('/experience/{experience}', [ExperienceController::class, 'update'])->name('experience.update');
Route::delete('/experience/{experience}/delete', [ExperienceController::class, 'delete'])->name('experience.delete');


//Personal Projects
Route::get('/personalProject/index', [PersonalProjectController::class, 'index'])->name('personalProject.index');
Route::get('/personalProject/create', [PersonalProjectController::class, 'create'])->name('personalProject.create');
Route::post('/personalProject/store', [PersonalProjectController::class, 'store'])->name('personalProject.store');
Route::get('/personalProjcet/{personalProject}/edit', [PersonalProjectController::class, 'edit'])->name('personalProject.edit');
Route::put('/personalProjcet/{personalProject}', [PersonalProjectController::class, 'update'])->name('personalProject.update');
Route::delete('personalProject/{personalProject}/delete', [PersonalProjectController::class, 'delete'])->name('personalProject.delete');
