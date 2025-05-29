<?php

use App\Http\Controllers\DeploymentController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/download/cv', [DownloadController::class, 'cv'])->name('download.cv');
Route::get('/download/attach/{attach}/{attach_name}', [DownloadController::class, 'attach'])->name('download.attach');

Route::post('/api/lang', [HomeController::class, 'change'])->name('change-language');
Route::get('/api/lang/{lang}', [HomeController::class, 'changeArbitrary'])->name('change-language-arbitrary');

Route::get('/bio', function(){return view('pages.bio');})->name('bio');
Route::get('/prospect', function(){return view('pages.prospect');})->name('prospect');

Route::post('/verify-access', [ProjectController::class, 'verify'])->name('verify.access')->middleware([ProtectAgainstSpam::class, 'throttle:3,1']);
Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
Route::get('/projects/{type}/{project}/gallery', [ProjectController::class, 'gallery'])->name('gallery');

Route::get('/run-setup', [DeploymentController::class, 'setup'])->name('setup');

