<!doctype html>
<head>
    <meta charset="utf-8">
    <meta name="application-name" content="Club House">
    <meta name="author" content="Stids S.A.S">
    <meta name="keywords" content="Comidas gourmet">
    <meta name="description"
          content="Club House es un espectacular sitio de comidas que busca darle a sus visitantes la oportunidad de probar sabores exquicitos y brindarles la satisfacción de darles un lugar donde puedan encontrar tranquilidad y confort.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Club House</title>
    <!-- ARCHIVO IMPORTANTE -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!-- FIN ARCHIVO IMPORTANTE -->

    <link rel="icon" type="image/png" href="{{ asset('images/logotipo-min.png') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <style>
        @font-face {
            font-family: "Capture It";
            src: url(fonts/capture-it.ttf) format("truetype");
        }

        html, body, a, p {
            margin: 0;
            height: 100%;
            color: white!important;
            font-family: "Capture It";
        }
    </style>
</head>
<body>
<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="banner-text text-center">
            <img style="margin: 0 auto;" src="{{ asset('images/logotipo-min.png') }}" width="290">
            <h1><a href="{!! route('home.detail') !!}">Ingresar</a></h1>
            <p>Una experiencia inolvidable</p>
        </div>
    </div>
</div>

<audio src="{{ asset('audio.mp4') }}" autoplay></audio>

<!-- ARCHIVOS JS -->
<script src="{{ asset('js/jquery-1.11.3.js') }} "></script>
<script src="{{ asset('js/jquery.ripples.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('body').ripples({resolution: 712, dropRadius: 20, perturbance: 0.04});
    });
</script>
</body>
