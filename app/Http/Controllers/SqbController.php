<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class SqbController extends Controller
{
    public function index()
    {
        return view('sqb');
    }

    public function download($fichier)
    {
        $path = public_path('telechargement/' . $fichier);
        
        if (!file_exists($path)) {
            abort(404);
        }

        return response()->download($path);
    }
}