<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function verify(Request $request)
    {
        if(!$request->session()->exists('is_verified')) {
            $request->session()->put('is_verified', true);
            return redirect()->route('projects');
        } else {
            return redirect()->route('projects');
        }
    }
    public function index() {
        $projects = config('init.projects');
        return view('pages.projects', compact('projects'));
    }
    public function gallery(string $type, string $id) {
        $project = config('init.projects.' . $type . '.' . $id);
        // Percorsi relativi all'interno di storage/app/public
        $videoDir = "projects/{$id}/gallery/video";
        $imgDir   = "projects/{$id}/gallery/img";

        // Verifica la presenza di file nei due sotto‐directory
        $videoFiles = Storage::disk('public')->files($videoDir);
        $imgFiles   = Storage::disk('public')->files($imgDir);

        $hasVideo = !empty($videoFiles);
        $hasImg   = !empty($imgFiles);

        // mappa le estensioni ai path pubblici
        $videoFormats = [];
        foreach ($videoFiles as $path) {
            $ext = pathinfo($path, PATHINFO_EXTENSION);
            // puoi filtrare solo mp4 e webm se vuoi:
            if (in_array($ext, ['mp4', 'webm'])) {
                $videoFormats[$ext] = asset("storage/{$path}");
            }
        }

        // Mappa tutti i file immagine a URL pubblici
        $imgs = [];
        if ($hasImg) {
            foreach ($imgFiles as $path) {
                // Filtra eventuali file non‐immagine se necessario
                $imgs[] = asset('storage/' . $path);
            }
        }
        return view('pages.gallery', compact('project', 'hasVideo', 'hasImg', 'videoFormats', 'imgs'));
    }
}
