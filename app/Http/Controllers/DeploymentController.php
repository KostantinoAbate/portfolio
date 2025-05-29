<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class DeploymentController extends Controller
{
    public function setup() {
        $optimizeExitCode = Artisan::call('optimize');
        $storageLinkExitCode = Artisan::call('storage:link');
        $sitemapGenerationExitCode = Artisan::call('sitemap:generate');
        if ($optimizeExitCode !== 0 || $storageLinkExitCode !== 0 || $sitemapGenerationExitCode !== 0) {
            return response()->json([
                'status'  => 'error',
                'optimize_exit_code'     => $optimizeExitCode,
                'storage_link_exit_code' => $storageLinkExitCode,
                'sitemap_generate_exit_code' => $sitemapGenerationExitCode,
            ], 500);
        }
        return response()->json([
            'status'  => 'success',
            'message' => 'Setup eseguito con successo.',
        ]);
    }
}
