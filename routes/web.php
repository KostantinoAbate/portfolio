<?php

use App\Http\Controllers\CvController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/download/cv', [CvController::class, 'download'])
     ->name('download.cv');
Route::get('/bio', function(){
     return view('pages.bio');
})->name('bio');
Route::get('/prospect', function(){
     return view('pages.prospect');
})->name('prospect');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
Route::post('/verify-access', [ProjectController::class, 'verify'])->name('verify.access')->middleware([ProtectAgainstSpam::class, 'throttle:3,1']);
Route::post('/lang', [HomeController::class, 'change'])
    ->name('change-language');
