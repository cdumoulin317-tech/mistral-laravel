<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Annonces – La Mistral</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            font-family: Arial, sans-serif;
            color: #fff;
        }

        /* FOND IMAGE + PARALLAX */
        .background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('/images/background-mistralv2.jpg');
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
            padding: 60px 20px;
        }

        header h1 {
            font-size: 60px;
            text-shadow: 0 0 20px #ff0066;
        }

        .container {
            max-width: 900px;
            margin: auto;
            padding: 20px;
        }

        .annonce {
            background: rgba(20, 0, 30, 0.6);
            border: 2px solid #ff0066;
            border-radius: 12px;
            padding: 25px;
            margin-bottom: 25px;
            box-shadow: 0 0 20px #7a00ff;
            backdrop-filter: blur(4px);
            transition: 0.3s;
        }

        .annonce:hover {
            transform: scale(1.02);
            box-shadow: 0 0 30px #ff0066;
        }

        .annonce h2 {
            margin: 0;
            font-size: 28px;
            text-shadow: 0 0 10px #ff0066;
        }

        .annonce p {
            font-size: 18px;
            opacity: 0.9;
            margin-top: 10px;
        }

        .date {
            margin-top: 15px;
            font-size: 14px;
            opacity: 0.7;
        }
    </style>
</head>
<body>

<div class="background"></div>
<div class="overlay"></div>

<header>
    <h1>Annonces – Team Mistral</h1>
</header>

<div class="container">
    @foreach($annonces as $a)
        <div class="annonce">
            <h2>{{ $a['titre'] }}</h2>
            <p>{{ $a['contenu'] }}</p>
            <div class="date">Publié le {{ $a['date'] }}</div>
        </div>
    @endforeach
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
