<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('action-login', [\App\Http\Controllers\LoginController::class, 'actionLogin'])->name('action-login');
Route::get('logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

// Route::resource('portofolio', \App\Http\Controllers\PortoController::class);

Route::middleware(['auth'])->group(function () {
    Route::resource('profile', \App\Http\Controllers\ProfileController::class);
    Route::resource('experience', \App\Http\Controllers\ExperienceController::class);
    Route::resource('education', \App\Http\Controllers\EducationController::class);
    Route::resource('skill', \App\Http\Controllers\SkillController::class);
    Route::resource('project', \App\Http\Controllers\ProjectController::class);
    Route::resource('certificate', \App\Http\Controllers\CertificateController::class);
    Route::resource('contact', \App\Http\Controllers\ContactController::class);
});

//Route MyPortofolio
Route::get('portofolio', [\App\Http\Controllers\PortoController::class, 'index'])->name('portofolio.about');
Route::get('portofolio/resume', [\App\Http\Controllers\PortoController::class, 'resume'])->name('portofolio.resume');
Route::get('portofolio/skill', [\App\Http\Controllers\PortoController::class, 'skill'])->name('portofolio.skill');
Route::get('portofolio/project', [\App\Http\Controllers\PortoController::class, 'project'])->name('portofolio.project');

Route::get('portofolio/contact', [\App\Http\Controllers\PortoController::class, 'contact'])->name('portofolio.contact');
Route::post('portofolio/contact', [\App\Http\Controllers\PortoController::class, 'contactme'])->name('portofolio.contactme');
