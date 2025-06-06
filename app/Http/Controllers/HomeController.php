<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index() {
        $files = File::files(resource_path('views/pages/home'));
        $names = collect($files)
            ->map(fn(\SplFileInfo $f) => $f->getBasename('.blade.php'));
        $order = config('init.page_order');
        $names = $names
            ->sortBy(fn($name) => array_search($name, $order))
            ->values();
        $views = $names
            ->map(fn($name) => "pages.home.{$name}")
            ->toArray();

        return view('pages.home', compact('views'));
    }

    public function change(Request $request)
    {
        if (in_array($request->input('locale'), ['en', 'it'])) {
            Session::put('session_locale', $request->input('locale'));
        }
        return redirect()->back();
    }

    public function changeArbitrary($lang)
    {
        if (in_array($lang, ['en', 'it'])) {
            Session::put('session_locale', $lang);
        }
        return redirect()->route('home');
    }
}
