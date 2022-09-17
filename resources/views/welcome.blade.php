<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
                background-color: rgb(14, 119, 119)
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a class="text-white" href="{{ url('/admin') }}">Admin</a>
                    @else
                        <a class="text-white" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a class="text-white" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content text-white">
                <div class="title m-b-md">

                    {{-- sticker here --}}
                    <div>
                        <span >
                            <i class="fa-solid fa-person-digging person-digger"></i>
                        </span>
                    </div>
                    
                    <div class="container mb-5">
                        <h4 class="text-danger">
                            <span class="text-success">... WOR</span>K IN PROGRESS..
                        </h4>

                        <div class="d-flex justify-content-center">
                            
                            <div class="">
                                <h6 class="border-top border-bottom border-start text-white bg-success" style="width: 74px">10%</h6>
                            </div>
                            <div class="">
                                <h6 class="border-top border-bottom border-end text-white bg-danger" style="width: 200px">90%</h6>
                            </div>
                        </div>
                        
                    </div>
                    
                    
                    
                    
                     Deliveboo
                     <h6 class="text-black">
                        Il miglior servizio di consegna...
                     </h6>

                     <h6 class="text-black">
                        <span class="">
                            <i class="fa-solid fa-bowl-food"></i>
                        </span>
                        dal ristorante a casa tua 
                        <span class="">
                            <i class="fa-solid fa-house"></i>
                        </span>
                     </h6>
                    
                </div>

                {{-- <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div> --}}
            </div>
        </div>
    </body>
</html>
