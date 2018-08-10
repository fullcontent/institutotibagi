@include('site.partials.header')


<section id="quemsomos">
    <div class="container-fluid quemsomos">
        <h1 class="quemsomos">conheça nossas formações ofertadas</h1></div>
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
    <div class="page-header">
        <h1>Cursos chave</h1></div>
    <div class="col-md-6">
        <p>O Instituto Tibagi possuí experiência de 22 anos na formação profissionalizante de jovens e adolescentes. </p>
        <p>Sempre focando na inovação o Instituto criou os Cursos CHAVE: cursos com preços reduzidos, aumentando assim o acesso da comunidade ao ensino profissionalizante. </p>
        <p>A arrecadação com os Cursos CHAVE será mais uma fonte de recursos para patrocinar os Projetos de Aprendizagem do Instituto Tibagi. </p>
    </div>
    <div class="col-md-3 img-responsive"><img src="{{asset('uploads/CHAVE_2-03-300x300.jpg')}}" class="img-responsive" /></div>
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1>Conheça os cursos chave</h1></div>
            <section>
                
                @foreach($cursos as $curso)
                <div class="col-md-3">
                    <div class="curso"><img src="{{asset($curso->images[0]->filename)}}" class="img-responsive" />
                        <h2>{{$curso->nome}}</h2>
                        <p>{{$curso->descritivo}}</p>
                        <a href="{{route('curso', ['id'=>$curso->id, 'slug'=>str_slug($curso->nome)])}}">
                            <button class="btn btn-default" type="button">Saiba mais</button>
                        </a>
                    </div>
                </div>
                @endforeach

            </section>
        </div>
    </div>
</div>




@include('site.partials.footer')