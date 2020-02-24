<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <script src="{{ secure_asset('js/app.js') }}" defer></script>

        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        
        <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c&display=swap" rel="stylesheet">
        
        <!--
        <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        -->
        
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">

        <link href="{{ secure_asset('css/handmade.css') }}" rel="stylesheet">
    </head>
    <body>
       <div class="wrapper">
        <div id="app">
        
        <nav class="navbar navbar-expand-sm navbar-light" style="background-color:#B0C4DE;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav4" aria-controls="navbarNav4" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                
                <a class="navbar-brand" href="http://acf7dca3dc8a46218abf47f4242a2009.vfs.cloud9.us-east-2.amazonaws.com/handmade/cucitoditta/top">Cucito ditta</a>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav4">
                    <div class = "lead">
                        <ul class="navbar-nav">

                        <li class="nav-item">
                            <a class="nav-link" href="https://acf7dca3dc8a46218abf47f4242a2009.vfs.cloud9.us-east-2.amazonaws.com/handmade/cucitoditta/gallery">gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://acf7dca3dc8a46218abf47f4242a2009.vfs.cloud9.us-east-2.amazonaws.com/handmade/cucitoditta/shop">shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://minne.com/@cucitoditta">minne</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.instagram.com/cucitoditta/">Instagram</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://acf7dca3dc8a46218abf47f4242a2009.vfs.cloud9.us-east-2.amazonaws.com/contact">info</a>
                        </li>
                        </ul>
                    </div>
                </div>
        </nav>
            {{-- ここまでナビゲーションバー --}}
            <!--
            <img src="{{ asset('image/logo.jpg') }}"  class="img-fluid" alt="logo">
            -->
            <main class="py-4">
                {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}
                @yield('content')
            </main>
        </div>
        <footer>
            <p>&#169; 2020 cucito daitta  </p>
        </footer>
        </div>
    </body>
</html>