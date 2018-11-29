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
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-76881273-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-76881273-2');
</script>
<style>
	
	.margin-top{
		margin-top: 50px;
		background-color: #EFEFEF;
		padding: 50px;

	}
	.email{
		margin-top: 50px;
	}
	.no-padding{
		padding: 0;
	}

</style>



</head>


<body>
	
	<div class="container margin-top">
    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3">
    	<img src="{{asset('assets/img/logo_institutotibagi-300x128.png')}}" width="200"/>
        <h1>Contato através do site.</h1>
        <div class="email">
        <p>Nome: {{$nome}}</p>
        <p>Email: {{$email}}</p>
        <p>Telefone: {{$telefone}}</p>
        <p>Mensagem: {{$mensagem}}</p>
        </div>

        
    </div>
</div>

</body>
</html>
