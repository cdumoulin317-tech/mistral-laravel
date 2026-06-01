<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class NewsController extends Controller
{
    public function index() {

        // Récupération API Steam
        $response = Http::withoutVerifying()->get(
            'https://api.steampowered.com/ISteamNews/GetNewsForApp/v2/',
            [
                'appid' => 236390,
                'count' => 10,
            ]
        );

        $news = $response->json()['appnews']['newsitems'];

foreach ($news as &$item) {
    $content = $item['contents'];

// 1. Remplacer le placeholder Steam
$content = str_replace('{STEAM_CLAN_IMAGE}', 'https://clan.akamai.steamstatic.com/images/', $content);

// 2a. [img src="..."][/img] (avec fermeture)
$content = preg_replace(
    '/\[img\s+src="([^"]+)"\]\[\/img\]/i',
    '<img src="$1">',
    $content
);

// 2b. [img src="..."] (sans fermeture)
$content = preg_replace(
    '/\[img\s+src="([^"]+)"\]/i',
    '<img src="$1">',
    $content
);

// 3. Supprimer les autres balises Steam [xxx]
$content = preg_replace('/\[[^\]]*\]/', '', $content);

// 4. Supprimer les balises HTML sauf <img>
$content = strip_tags($content, '<img>');

// 5. ← ICI : convertir URLs brutes RESTANTES (pas déjà dans un <img>)
$content = preg_replace(
    '/(?<!=["\'"])(https:\/\/clan\.akamai\.steamstatic\.com\/images\/\/[^\s<]+\.(png|jpg|jpeg|gif))/i',
    '<img src="$1">',
    $content
);

// 6. Nettoyer espaces
$content = preg_replace('/\s+/', ' ', $content);
$content = trim($content);



    $item['contents'] = $content;
}


        return view('news', compact('news'));
    }
}
