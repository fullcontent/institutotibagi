@include('site.partials.header')
@include('site.partials.banner')


 <section>
        <div class="container">
            <div class="col-md-7">
                <div class="video">
                    <h2>Bem vindos ao instituto tibagi</h2>
                    <iframe width="640" height="315" allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/Ie0VQQglOjY?controls=0&amp;showinfo=0&amp;rel=0"></iframe>
                </div>
                <div>
                    <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <footer>Someone famous</footer>
                    </blockquote>
                </div>
            </div>
            <div class="col-lg-4 col-lg-offset-1 col-md-5 col-sm-12 col-xs-12">
                <h1 class="title-box">Últimas notícias</h1>

                @foreach($noticias as $noticia)
                <div class="noticia">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <a href="noticia/{{$noticia->id}}">
                            <p>{{$noticia->title}}</p>
                        </a>
                        
                    </div>
                </div>
                @endforeach

            </div>
        </div>
        <div class="container">
            <h1 class="text-center title">Nossos parceiros</h1>
            @for ($i = 0; $i < 10; $i++)
            <div class="col-md-2 col-sm-3 col-xs-6 logo-parceiro">
                <img src="assets/img/logo_institutotibagi-300x128.png" class="img-responsive">
            </div>
            @endfor

        </div>
    </section>
    
    <section>
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