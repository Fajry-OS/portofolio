<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('action-login', [\App\Http\Controllers\LoginController::class, 'actionLogin'])->name('action-login');
Route::get('logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

Route::resource('profile', \App\Http\Controllers\ProfileController::class);
Route::resource('experience', \App\Http\Controllers\ExperienceController::class);
Route::resource('education', \App\Http\Controllers\EducationController::class);
Route::resource('skill', \App\Http\Controllers\SkillController::class);
Route::resource('project', \App\Http\Controllers\ProjectController::class);
Route::resource('certificate', \App\Http\Controllers\CertificateController::class);
