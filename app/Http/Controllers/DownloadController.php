<?php

namespace App\Http\Controllers;

class DownloadController extends Controller
{
    public function cv(): \Symfony\Component\HttpFoundation\BinaryFileResponse
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

    public function attach($attach, $attachName): \Symfony\Component\HttpFoundation\BinaryFileResponse
    {
        $fullPath = storage_path('app/public/projects/' . $attach . '/attach/attach.pdf');

        if (! file_exists($fullPath)) {
            abort(404, "File non trovato");
        }

        return response()
            ->download($fullPath, $attachName, [
                'Content-Type' => 'application/pdf',
            ]);
    }
}
