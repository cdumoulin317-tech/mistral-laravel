<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>La Mistral – Accueil</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            font-family: Arial, sans-serif;
            color: #fff;
        }

        /* IMAGE DE FOND AVEC PARALLAX */
        .background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('/images/background-mistral.jpg');
            background-size: cover;
            background-position: center;
            filter: brightness(0.35) blur(2px);
            z-index: -2;
        }

        /* OVERLAY NÉON */
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

        header img {
            width: 260px;
            filter: drop-shadow(0 0 25px #ff0066);
        }

        h1 {
            font-size: 60px;
            margin-top: 20px;
            text-shadow: 0 0 20px #ff0066;
        }

        h2 {
            font-size: 24px;
            opacity: 0.9;
            margin-top: 10px;
        }

        nav {
            display: flex;
            justify-content: center;
            gap: 40px;
            margin: 50px 0;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            font-size: 22px;
            padding: 12px 25px;
            border: 2px solid #ff0066;
            border-radius: 10px;
            transition: 0.3s;
        }

        nav a:hover {
            background: #ff0066;
            box-shadow: 0 0 20px #ff0066;
        }

        .section {
            text-align: center;
            padding: 40px 20px;
        }

        .section h3 {
            font-size: 36px;
            margin-bottom: 20px;
            text-shadow: 0 0 15px #7a00ff;
        }

        .section p {
            font-size: 20px;
            opacity: 0.85;
            max-width: 800px;
            margin: auto;
        }
    </style>
</head>
<body>

<div class="background"></div>
<div class="overlay"></div>

<header>
    <img src="/images/logo-mistralv2.png" alt="Logo Mistral">
    <h1>Team Mistral</h1>
    <h2>Maîtrise du ciel, contrôle du champ de bataille</h2>
</header>

<nav>
    <a href="/annonces">Annonces</a>
    <a href="/news">News</a>
    <a href="/tss">Meta TSS</a>
    <a href="/sqb">SQB</a>
    <a href="/recrutement">Recrutement</a>
</nav>

<div class="section">
    <h3>Bienvenue dans l’univers de la Team Mistral</h3>
    <p>
        Nous venons de créer la team et notre objectif est clair : progresser et s'imposer en TSS et monter en SQB.  
        Nous sommes accueillants, motivés, et tous les joueurs à partir du BR 4.0 sont les bienvenus.
    </p>
</div>


<script>
    // Effet PARALLAX dynamique
    document.addEventListener("mousemove", (e) => {
        const bg = document.querySelector(".background");
        const x = (e.clientX / window.innerWidth) * 20;
        const y = (e.clientY / window.innerHeight) * 20;
        bg.style.transform = `translate(${x}px, ${y}px) scale(1.05)`;
    });
</script>

</body>
</html>
