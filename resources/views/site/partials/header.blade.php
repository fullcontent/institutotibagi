<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instituto Tibagi -  Cursos de aprendizagem para jovens e adolescentes</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
   <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Signika">

    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/user.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/parceiros-slider.css')}}">
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-76881273-1"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-76881273-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-76881273-2');
</script>



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
                    <li role="presentation"><a href="{{route('home')}}">Home</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="{{route('sobre')}}">O Instituto<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="{{route('sobre')}}#quemsomos">Quem somos</a></li>
                            
                            <li role="presentation"><a href="{{route('sobre')}}#equipe">Equipe </a></li>
                            <li role="presentation"><a href="{{route('sobre')}}#historico">Histórico </a></li>
                            <li role="presentation"><a href="{{route('sobre')}}#reconhecimento">Selos e certificações</a></li>
                            
                        </ul>
                    </li>
                    <li role="presentation"><a href="{{route('cursos')}}">Cursos Abertos</a></li>
                    <li class="dropdown"><a href="{{route('aprendiz')}}">Aprendizes</a></li>
                    <li role="presentation"><a href="{{route('empresas')}}">Empresas</a></li>
                    <li role="presentation"><a href="{{route('contato')}}">Contato </a></li>
                   
                </ul>
                

            </div>
        </div>
    </nav>
