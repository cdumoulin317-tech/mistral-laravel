<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>News War Thunder – La Mistral</title>
        <style>
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            font-family: Arial, sans-serif;
            color: #ffffff;
        }

        .background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('/images/background-mistralv3.jpg');
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
            text-shadow: 0 0 20px #ff0000;
        }

        .container {
    max-width: 1100px;
    margin: auto;
    padding: 20px;
}

.news-card {
    background: rgba(15, 0, 25, 0.65);
    border: 1px solid rgba(255, 0, 100, 0.4);
    border-radius: 14px;
    padding: 0; /* ← on retire le padding global */
    margin-bottom: 35px;
    box-shadow: 0 0 25px rgba(120, 0, 255, 0.4);
    backdrop-filter: blur(6px);
    transition: 0.3s;
    overflow: hidden; /* ← important pour que l'image respecte le border-radius */
}

/* Padding uniquement sur le contenu sous l'image */
.news-header,
.news-content,
.news-footer {
    padding: 0 25px;
}

.news-header {
    padding-top: 20px;
}

.news-footer {
    padding-bottom: 20px;
}

.news-image {
    width: 100%;
    height: 500px;
    overflow: hidden;
    margin-bottom: 15px;
}

.news-image img {
    width: 100% !important;
    height: 100% !important;
    object-fit: cover !important;
    display: block !important;
    margin: 0 !important;
    border-radius: 0 !important;
}
/* Date */
.date {
    font-size: 14px;
    opacity: 0.7;
}

/* Bouton */
.btn-read {
    padding: 10px 18px;
    background: linear-gradient(90deg, #ff0066, #7a00ff);
    border-radius: 8px;
    color: white;
    text-decoration: none;
    font-weight: bold;
    transition: 0.3s;
    box-shadow: 0 0 15px rgba(255, 0, 100, 0.6);
}

.btn-read:hover {
    box-shadow: 0 0 25px rgb(255, 0, 0);
    transform: scale(1.05);
}

    </style>
</head>
<body>

<div class="background"></div>
<div class="overlay"></div>

<header>
    <h1>News War Thunder</h1>
</header>

<div class="container">

    @foreach($news as $n)
        <div class="news-card">

            @php
                preg_match('/<img[^>]+>/i', $n['contents'], $image);
                $texte = strip_tags($n['contents']);
                $texte = Str::limit($texte, 180);
            @endphp

            {{-- Image pleine largeur AU DESSUS du padding --}}
            @if(!empty($image[0]))
                <div class="news-image">
                    {!! $image[0] !!}
                </div>
            @endif

            {{-- Titre --}}
            <div class="news-header">
                <h2>{{ $n['title'] }}</h2>
            </div>

            {{-- Texte --}}
            <p class="news-content">{{ $texte }}</p>

            {{-- Footer --}}
            <div class="news-footer">
                <span class="date">📅 {{ date('d/m/Y', $n['date']) }}</span>
                <a href="{{ $n['url'] }}" target="_blank" class="btn-read">
                    Lire l'article →
                </a>
            </div>

        </div>
    @endforeach


</div>

<script>
    document.addEventListener("mousemove", (e) => {
        const bg = document.querySelector(".background");
        const x = (e.clientX / window.innerWidth) * 20;
        const y = (e.clientY / window.innerHeight) * 20;
        bg.style.transform = `translate(${x}px, ${y}px) scale(1.05)`;
    });
</script>

</body>
</html>
