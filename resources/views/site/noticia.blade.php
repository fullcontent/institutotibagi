@include('site.partials.header')


<section id="quemsomos">
     <div class="container-fluid quemsomos" style="background-image:url({{asset("assets/img/")}}/BannerCursos.png);">
        <h1 class="quemsomos">Aprenda, atualize-se, profissionalize-se!</h1>
    </div>
    <div class="container-fluid lines">
        <div class="row lines">
            <div class="col-md-4 col-xs-4 lines">
                <div class="line red"></div>
            </div>
            <div class="col-md-4 col-xs-4 lines">
                <div class="line yellow"></div>
            </div>
            <div class="col-md-4 col-xs-4 lines">
                <div class="line blue"></div>
            </div>
        </div>
    </div>
</section>


<div class="container">
    
    <div class="col-lg-7 col-md-7">
        
        
 <h1>{{$noticia->title}}</h1>

        <article class="noticia">


    

           
        	
        	
        @if (count($noticia->images) === 1)
            @foreach($noticia->images as $i)
            <div class="col-md-12 no-padding" style="height: 200px; overflow: hidden;">
                <img src="{{asset($i->filename)}}" alt="" class="img-responsive">
            </div>
           
            @endforeach

            {!! $noticia->content !!}
   
        

        
        @elseif (count($noticia->images) > 1)
             @foreach($noticia->images as $i)
            <div class="col-md-4">
                <img src="{{asset($i->filename)}}" alt="" class="img-responsive">
            </div>
            @endforeach
        @else
           {!! $noticia->content !!}
        @endif


        </article>

       
    </div>
   <div class="col-lg-4 col-lg-offset-1 col-md-5 col-sm-12 col-xs-12">
        <h1 class="title-box">Últimas notícias</h1>
        @foreach($noticias as $noticia)
                <div class="noticia">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <a href="{{route('noticia', ['id'=>$noticia->id, 'slug'=>str_slug($noticia->title)])}}" class="link">{{$noticia->title}}</a>
                        
                    </div>
                </div>
        @endforeach
    </div>
</div>


<section id="doe">
        <div class="container-fluid status parallax">
            <div class="row">
                <div class="col-md-4">
                    <div class="text-center">
                        <div class="icon"><i class="fa fa-users"></i></div>
                        <div class="counter"><span class="timer">+ de 400 </span></div>
                        <p class="lead text-center">Alunos formados</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <div class="icon"><i class="fa fa-building-o"></i><i class="fa fa-building-o"></i></div>
                        <div class="counter"><span class="timer">20 </span></div>
                        <p class="lead text-center">Empresas atendidas</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <div class="icon"><i class="fa fa-book"></i></div>
                        <div class="counter"><span class="timer">13 </span></div>
                        <p class="lead text-center">Cursos ofertados</p>
                    </div>
                </div>
            </div>
            <div class="parallax-text text-center">
                <h2 class="parallax-text">Quer ajudar a aumentar esses números?</h2>
                <p class="lead">Sua ajuda é muito importante para nós.</p><a class="btn btn-success btn-lg" role="button" href="#">DOAR AGORA</a></div>
        </div>
    </section>
@include('site.partials.footer')