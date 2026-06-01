<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index() {
        return view('home', [
            'team' => 'La Mistral',
            'slogan' => 'Dominez le ciel. Maîtrisez la tempête.',
        ]);
    }
}


