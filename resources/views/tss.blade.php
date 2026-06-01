<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>META TSS – La Mistral</title>

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
            background-image: url('/images/background-mistralv5.jpg');
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
    <h1>META TSS – La Mistral</h1>
</header>

<div class="container">

    <!-- Légende -->
    <div class="section" style="text-align:center;">
    <h2>Légende</h2>
        <p style="font-size:20px; margin-top:15px;">
            <span style="color:#00ff88; font-weight:bold;">Vert :</span> Meta<br>
            <span style="color:#ff8800; font-weight:bold;">Orange :</span> Acceptable
        </p>
    </div>

    <!-- META AVION -->
    <div class="section">
        <h2>META Avion – Challenger League</h2>
        <img src="/images/meta-chalavion.png" 
             alt="META Avion" 
             style="width:100%; border-radius:12px; margin-top:20px;">
    </div>

    <div class="section">
        <h2>META Avion – Pro League</h2>
        <img src="/images/meta-proavion.png" 
             alt="META Avion" 
             style="width:100%; border-radius:12px; margin-top:20px;">
    </div>

    <!-- META TANK -->
    <div class="section">
        <h2>META Tank – Challenger League</h2>
        <img src="/images/meta-chaltank.png" 
             alt="META Tank" 
             style="width:100%; border-radius:12px; margin-top:20px;">
    </div>
    
    <div class="section">
        <h2>META Tank – Pro League</h2>
        <img src="/images/meta-protank.png" 
             alt="META Tank" 
             style="width:100%; border-radius:12px; margin-top:20px;">
    </div>

    <!-- META MIXED -->
    <div class="section">
        <h2>META Mixed – Challenger League</h2>
        <img src="/images/meta-chalmixed.png" 
             alt="META Mixed" 
             style="width:100%; border-radius:12px; margin-top:20px;">
    </div>

    <div class="section">
        <h2>META Mixed – Pro League</h2>
        <img src="/images/meta-promixed.png" 
             alt="META Mixed" 
             style="width:100%; border-radius:12px; margin-top:20px;">
    </div>

</div>


</body>
</html>
