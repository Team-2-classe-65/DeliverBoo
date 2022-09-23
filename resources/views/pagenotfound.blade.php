<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DeliveBoo</title>

    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
</head>

<body>
    <div class="vh-100 bg_secondary">
        <div class="d-flex flex-column justify-content-center align-items-center h-50">
            <div>
                <img src="{{asset('img/unnamed.png')}}" alt="" style="max-width: 200px">
            </div>
            <div class="display-3 f-wbold mb-3">
                Error 404-Page Not Found
            </div>
            <div>
                Prova a inserire un altro url oppure
            </div>
            <div>
                <a href="/" class="btn btn-info mt-3">Torna alla home</a>
            </div>
        </div>

        <div class="d-flex align-items-end h-50">
            <svg class="wave-1hkxOo h-100" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100"
                preserveAspectRatio="none">
                <path class="wavePath-haxJK1 animationPaused-2hZ4IO"
                    d="M826.337463,25.5396311 C670.970254,58.655965 603.696181,68.7870267 447.802481,35.1443383 C293.342778,1.81111414 137.33377,1.81111414 0,1.81111414 L0,150 L1920,150 L1920,1.81111414 C1739.53523,-16.6853983 1679.86404,73.1607868 1389.7826,37.4859505 C1099.70117,1.81111414 981.704672,-7.57670281 826.337463,25.5396311 Z"
                    fill="#2E3333"></path>
            </svg>
        </div>
    </div>
</body>

</html>
