<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Recrutement – La Mistral</title>

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
            background-image: url('/images/background-mistralv4.jpg');
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

        .link-box {
            margin-top: 20px;
            padding: 20px;
            background: rgba(255, 0, 100, 0.1);
            border-left: 4px solid #ff0066;
            border-radius: 8px;
        }

        .link-box a {
            color: #ff4da6;
            font-size: 20px;
            font-weight: bold;
            text-decoration: none;
        }

        .link-box a:hover {
            text-shadow: 0 0 10px #ff4da6;
        }
    </style>
</head>

<body>

<div class="background"></div>
<div class="overlay"></div>

<header>
    <h1>Recrutement – La Mistral</h1>
</header>

<div class="container">

    <!-- Présentation -->
    <div class="section">
        <h2>Rejoindre l’équipe</h2>
        <p>
            La Mistral recrute !  
            Pour nous rejoindre, il suffit de remplir notre formulaire Google,  
            ou de nous contacter directement via Discord ou par mail.
        </p>
    </div>

    <!-- Discord -->
    <div class="section">
        <h2>Serveur Discord</h2>
        <div class="link-box">
            <a href="https://discord.gg/P26GPB3V5G" target="_blank">
                👉 Rejoindre notre Discord
            </a>
        </div>
    </div>

    <!-- Mail -->
    <div class="section">
        <h2>Adresse mail de la team</h2>
        <div class="link-box">
            <a href="mailto:mistralwt.contact@gmail.com" target="_blank">
                ✉️ Nous contacter par mail
            </a>
        </div>
    </div>

    <!-- Google Doc -->
    <div class="section">
        <h2>Formulaire de recrutement</h2>
        <p>Répondez aux questions dans le document ci-dessous :</p>

        <div class="link-box">
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSf4EtDXlkP7icd1FQUlWCXyE5jXKdmKsYzuakCgxcxGFJBbUQ/viewform?usp=dialog" target="_blank">
                📝 Ouvrir le formulaire Google
            </a>
        </div>
    </div>

</div>

</body>
</html>
