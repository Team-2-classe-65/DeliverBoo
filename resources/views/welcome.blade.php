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

        <script src="{{ asset("js/frontend.js") }}" defer></script>
        

        {{-- braintree --}}
        <script src="https://js.braintreegateway.com/web/dropin/1.10.0/js/dropin.js"></script>
    </head>
    <body>
        <div id="app"></div> 
    </body>
</html>
