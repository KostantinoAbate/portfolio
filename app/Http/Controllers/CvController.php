<?php

namespace App\Http\Controllers;

class CvController extends Controller
{
    public function download(): \Symfony\Component\HttpFoundation\BinaryFileResponse
    {
        $fullPath = storage_path('app/public/Kostantino Abate PHP Developer.pdf');

        if (! file_exists($fullPath)) {
            abort(404, "File non trovato");
        }

        return response()
            ->download($fullPath, 'Kostantino-Abate-PHP-Developer.pdf', [
                'Content-Type' => 'application/pdf',
            ]);
    }
}
