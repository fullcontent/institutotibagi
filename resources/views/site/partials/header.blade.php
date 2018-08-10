<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Signika">
    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/user.css')}}">
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand navbar-link" href="{{route('home')}}"> <img src="{{asset('assets/img/logo_institutotibagi-300x128.png')}}" width="200"></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="{{route('home')}}">HOME </a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="{{route('sobre')}}">o INSTITUTO<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="{{route('sobre')}}#quemsomos">Quem somos</a></li>
                            <li role="presentation"><a href="{{route('sobre')}}#equipe">Equipe </a></li>
                            <li role="presentation"><a href="{{route('sobre')}}#historico">histórico </a></li>
                            <li role="presentation"><a href="{{route('sobre')}}#reconhecimento">Selos e certificações</a></li>
                            
                        </ul>
                    </li>
                    <li role="presentation"><a href="{{route('cursos')}}">Cursos CHAVE</a></li>
                    <li class="dropdown"><a href="{{route('aprendiz')}}">Aprendizes</a></li>
                    <li role="presentation"><a href="#">EmpresaS </a></li>
                    <li role="presentation"><a href="{{route('contato')}}">Contato </a></li>
                    @if (Route::has('login'))
                
                    @auth

                    <li role="presentation"><a href="{{ url('/admin') }}">Admin</a></li>
                        
                    @else
                        <li role="presentation"><a href="{{ route('login') }}">Login</a></li>
                        <li role="presentation"><a href="{{ route('register') }}">Register</a></li>
                    @endauth
                
            @endif
                </ul>
                

            </div>
        </div>
    </nav>