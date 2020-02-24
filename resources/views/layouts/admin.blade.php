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
        
        <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
        <!--
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        -->
        
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">

        <link href="{{ secure_asset('css/admin.css') }}" rel="stylesheet">
    </head>
    <body>
       <div class="wrapper">
        <div id="app">
        
        <nav class="navbar navbar-expand-sm navbar-light" style="background-color:#B0C4DE;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav4" aria-controls="navbarNav4" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                
                <a class="navbar-brand" href="#">Cucito ditta編集</a>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav4">
                    <div class = "lead">
                        <ul class="navbar-nav">

                        <li class="nav-item">
                            <a class="nav-link" href="https://acf7dca3dc8a46218abf47f4242a2009.vfs.cloud9.us-east-2.amazonaws.com/admin/cucitoditta/topedit">top編集</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://acf7dca3dc8a46218abf47f4242a2009.vfs.cloud9.us-east-2.amazonaws.com/admin/cucitoditta/galleryindex">gallery編集</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://acf7dca3dc8a46218abf47f4242a2009.vfs.cloud9.us-east-2.amazonaws.com/admin/cucitoditta/workindex">商品編集</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://acf7dca3dc8a46218abf47f4242a2009.vfs.cloud9.us-east-2.amazonaws.com/admin/cucitoditta/shopindex">shop編集</a>
                        </li>
                        
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        {{-- ログインしていたらユーザー名とログアウトボタンを表示 --}}
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        
                        </ul>
                    </div>
                </div>
        </nav>
            <!-- ここまでナビゲーションバー -->
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