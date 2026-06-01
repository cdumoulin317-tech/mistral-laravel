<?php

namespace App\Http\Controllers;

class AnnoncesController extends Controller
{
    public function index() {
        // Exemple d'annonces (plus tard tu pourras les charger depuis une BDD)
        $annonces = [
            [
                'titre' => 'Recrutement TSS ouvert',
                'contenu' => 'Nous recherchons des joueurs situé minimum en 4.0 (Avion ou Char).',
                'date' => '28 Mai 2026'
            ],
            [
                'titre' => 'Bot Actue',
                'contenu' => 'Le Bot postant les actualités est maintenant opérationnel.',
                'date' => '28 Mai 2026'
            ],
            [
                'titre' => 'TSS',
                'contenu' => 'Pour toute demande de participation au TSS, veuillez le dire pendant le recrutement ou ping @galjui_officiel.',
                'date' => '28 Mai 2026'
            ],
        ];

        return view('annonces', compact('annonces'));
    }
}
