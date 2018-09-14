@include('site.partials.header')


<section id="quemsomos">
     <div class="container-fluid quemsomos" style="background-image:url(assets/img/BannerCursos.png);">
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


<section>
        <div class="container">
            <div class="col-md-6">
                <p>O Instituto Tibagi possuí experiência de 22 anos na formação profissionalizante de jovens e adolescentes. </p>
                <p>Sempre focando na inovação o Instituto criou os Cursos CHAVE: cursos com preços reduzidos, aumentando assim o acesso da comunidade ao ensino profissionalizante. </p>
                <p>A arrecadação com os Cursos CHAVE será mais uma fonte de recursos para patrocinar os Projetos de Aprendizagem do Instituto Tibagi. </p>
            </div>
            <div class="col-md-6"><img src="assets/img/CursosChave.jpg" class="img-responsive"></div>
        </div>
        <section></section>
    </section>


    <section id="historico">
        <h1 class="title text-center">Nossas formações</h1>
        <div class="container-fluid">

            @foreach($cursos as $c)
            <div class="col-md-3 cursoBox"><img src="{{$c->images[0]->filename}}" class="img-responsive">
                <div class="cursoInner">

                    <h1 class="text-center curso">{{$c->nome}}</h1>
                    <p class="text-center cursoLista">{{$c->descritivo}}</p>
                    <div class="left"><i class="glyphicon glyphicon-time"></i><span> {{$c->duracao}}</span></div>
                    <div class="left"><i class="fa fa-money"></i><span> {{$c->investimento}}</span></div>
                    <div class="cursoBtn"><a href="{{route('curso', ['id'=>$c->id, 'slug'=>str_slug($c->nome)])}}" class="btn btn-large btn-success">Saiba mais</a></div>
                </div>
            </div>
            @endforeach

        </div>
    </section>



@include('site.partials.footer')