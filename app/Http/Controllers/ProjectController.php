<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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
        return view('pages.projects', $projects);
    }
}
