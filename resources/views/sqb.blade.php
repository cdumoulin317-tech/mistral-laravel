<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>SQB – La Mistral</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            font-family: Arial, sans-serif;
            color: #ffffff;
            background: #0a0014;
        }

        .background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('/images/background-mistralv6.jpg');
            background-size: cover;
            background-position: center;
            filter: brightness(0.35) blur(2px);
            z-index: -2;
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at center, rgba(255,0,100,0.25), rgba(0,0,0,0.9));
            z-index: -1;
        }

        header {
            text-align: center;
            padding: 80px 20px;
        }

        header h1 {
            font-size: 65px;
            text-shadow: 0 0 25px #ff0066;
        }

        .container {
            max-width: 900px;
            margin: auto;
            padding: 20px;
        }

        .section {
            background: rgba(15, 0, 25, 0.65);
            border: 1px solid rgba(255, 0, 100, 0.4);
            border-radius: 14px;
            padding: 35px;
            margin-bottom: 40px;
            box-shadow: 0 0 25px rgba(120, 0, 255, 0.4);
            backdrop-filter: blur(6px);
        }

        .section h2 {
            margin-top: 0;
            font-size: 32px;
            color: #ff0066;
            text-shadow: 0 0 12px #ff0066;
        }

        .section img {
            width: 100%;
            border-radius: 12px;
            margin-top: 20px;
        }
    </style>
</head>

<body>

<div class="background"></div>
<div class="overlay"></div>

<header>
    <h1>SQB – La Mistral</h1>
</header>

<div class="container">

    <!-- Titre page -->
    <div class="section" style="text-align:center;">
        <h2>Qu'est-ce que c'est ?</h2>

        <p style="text-align:justify; font-size:18px; line-height:1.6;">
            La SQB, ou Squadron Battles, est le mode compétitif officiel de War Thunder réservé aux escadrons. 
            Deux équipes de 8 joueurs s’affrontent sur des cartes spécifiques dans un format structuré et classé. 
            Chaque match rapporte ou retire des points d’escadron, permettant de monter dans les ligues et d’affronter 
            des équipes de plus en plus fortes.
            <br><br>
            Une partie de SQB se joue en 8 vs 8, avec un BR fixe changeant toutes les semaines (du 12.7 au 4.0). Les joueurs disposent d’une seule vie 
            par véhicule, ce qui rend chaque décision cruciale. Le mode utilise des objectifs de type Domination ou Conquête, 
            où le contrôle des points est essentiel pour gagner. Les véhicules autorisés sont les tanks, les avions et les hélicoptères. 
            Le rôle de l’avion est stratégique : repérage, CAS ou interception.
            <br><br>
            Le déroulement d’un match suit une logique précise : les tanks capturent les points dès le début, l’avion prend 
            l’information ou tente une frappe rapide, puis l’équipe coordonne ses pushes, ses smokes et ses angles pour 
            contrôler la carte. La gestion de l’espace, la communication et la capacité à éliminer les positions clés 
            déterminent l’issue de la partie.
            <br><br>
            Les escadrons sont classés dans plusieurs ligues : Bronze, Silver, Gold, Platinum, Diamond, Champion League 
            et Pro League. Les meilleures équipes mondiales évoluent en Pro League, où la compétition est extrêmement exigeante. 
            Pour progresser, un escadron doit enchaîner les victoires, maintenir une activité régulière et jouer à un BR adapté 
            à son niveau.
            <br><br>
            La META change selon les saisons, mais repose généralement sur des véhicules rapides, résistants et efficaces en duel. 
            Les tanks comme les Leopard 2, Strv 122 ou T‑80 dominent souvent la scène, tandis que les avions CAS ou multirôles 
            comme le Su‑25, l’A‑10, Alpha Jet TH ou certains jets modernes sont utilisés pour prendre l’avantage aérien ou éliminer des cibles au sol.
            <br><br>
            La SQB demande une équipe organisée, des rôles définis (scout, heavy, AA, CAS), une communication propre et des 
            entraînements réguliers. Les meilleures équipes analysent leurs replays, optimisent leurs compositions et maîtrisent 
            parfaitement les cartes. C’est un mode exigeant mais extrêmement gratifiant, où la coordination et la stratégie 
            priment sur le simple skill individuel.
        </p>
    </div>

    

    <!-- Lien vers le tableur -->
    <div class="section" style="text-align:center;">
        <h2>Consulter le tableau des Metas</h2>
        <a href="https://docs.google.com/spreadsheets/d/1_vaOCNVxHw4M-TPlCGAtmBUYqDp5_cZRZDd2xTD9KAQ/edit?usp=sharing" target="_blank"
           style="display:inline-block; padding:12px 28px; margin-top:15px;
                  background:#ff0066; color:#fff; text-decoration:none;
                  border-radius:8px; box-shadow:0 0 15px rgba(255,0,120,0.7);">
            Ouvrir le tableau Google
        </a>
    </div>

    <!-- Bouton télécharger -->
    <div class="section" style="text-align:center;">
        <h2>Télécharger le document</h2>
        <a href="{{ route('sqb.download', 'DOC-SQB-MISTRAL-2026.xlsx') }}"
        style="display:inline-block; padding:12px 28px; margin-top:15px;
                background:#9c04ca; color:#fff; text-decoration:none;
                border-radius:8px; box-shadow:0 0 15px rgba(177, 51, 216, 0.692);">
            Télécharger le document
        </a>



    </div>

</div>

</body>
</html>
