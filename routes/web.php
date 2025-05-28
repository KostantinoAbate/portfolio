<?php

use App\Http\Controllers\DownloadController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;
use Illuminate\Support\Facades\Artisan;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/download/cv', [DownloadController::class, 'cv'])
     ->name('download.cv');
Route::get('/download/attach/{attach}/{attach_name}', [DownloadController::class, 'attach'])
     ->name('download.attach');
Route::get('/bio', function(){
     return view('pages.bio');
})->name('bio');
Route::get('/prospect', function(){
     return view('pages.prospect');
})->name('prospect');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
Route::post('/verify-access', [ProjectController::class, 'verify'])->name('verify.access')->middleware([ProtectAgainstSpam::class, 'throttle:3,1']);
Route::post('/api/lang', [HomeController::class, 'change'])->name('change-language');
Route::get('/run-optimizations', function () {
    $optimizeExitCode = Artisan::call('optimize');
    $storageLinkExitCode = Artisan::call('storage:link');
    if ($optimizeExitCode !== 0 || $storageLinkExitCode !== 0) {
        return response()->json([
            'status'  => 'error',
            'optimize_exit_code'     => $optimizeExitCode,
            'storage_link_exit_code' => $storageLinkExitCode,
        ], 500);
    }
    return response()->json([
        'status'  => 'success',
        'message' => 'Ottimizzazione eseguita e link a storage creato con successo.',
    ]);
});
