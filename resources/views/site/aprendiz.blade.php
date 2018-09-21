@include('site.partials.header')

<section id="quemsomos">
        <div class="container-fluid quemsomos" style="background-image:url({{asset("assets/img/")}}/BannerAprendizes.png);">
        <h1 class="quemsomos">Jovem, dê seu próximo passo!</h1>
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

<section class="porque">
        <div class="container">
            <div class="col-md-4 col-sm-4"><a href="#faq"><img src="assets/img/btn-quero.png" class="img-responsive"></a></div>
            <div class="col-md-4 col-sm-4"><img src="assets/img/btn-sou.png" class="img-responsive"></div>
            <div class="col-md-4 col-sm-4"><img src="assets/img/btn-souex.png" class="img-responsive"></div>
        </div>
    </section>
    <section class="formacoes">
        <div class="container">
            <div class="col-md-5 col-sm-6">
                <h1 class="title white">Adolescente Aprendiz</h1>
                <p class="subtitulo white">Para adolescentes de 14 a 17 anos incompletos.</p>
                <div class="panel-group" role="tablist" aria-multiselectable="true" id="accordion-1">
                    

                    @foreach($cursosAdolescentes as $c)       
            
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab">
                            <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion-1" aria-expanded="false" href="#accordion-1 .item-{{$c->id}}">{{$c->nome}}</a></h4></div>
                        <div class="panel-collapse collapse item-{{$c->id}}" role="tabpanel">
                            <div class="panel-body">
                                <p>{{$c->descritivo}}</p>
                                <a href="{{route('curso', ['id'=>$c->id, 'slug'=>str_slug($c->nome)])}}" class="btn btn-large btn-success">Saiba mais</a>
                            </div>
                        </div>
                    </div>

                    @endforeach


                    
                </div>
            </div>


            <div class="col-md-6 col-md-push-1 col-sm-6">
                <h1 class="title white">Jovem Aprendiz</h1>
                <p class="subtitulo white">Destinado aos jovens de 18 a 24 anos incompletos. </p>
                <div class="panel-group" role="tablist" aria-multiselectable="true" id="accordion-2">
                     @foreach($cursosJovens as $j)       
            
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab">
                            <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion-2" aria-expanded="false" href="#accordion-2 .item-{{$j->id}}">{{$j->nome}}</a></h4></div>
                        <div class="panel-collapse collapse item-{{$j->id}}" role="tabpanel">
                            <div class="panel-body">
                                <p>{{$j->descritivo}}</p>
                                <a href="{{route('curso', ['id'=>$j->id, 'slug'=>str_slug($j->nome)])}}" class="btn btn-large btn-success">Saiba mais</a>
                            </div>
                        </div>
                    </div>

                    @endforeach
            </div>
        </div>
    </section>
    <section class="faq" id="faq">
        <div class="container">
            <h1 class="text-center title">Dúvidas frequentes</h1>
            <div class="panel-group" role="tablist" aria-multiselectable="true" id="accordion-3">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab">
                        <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion-3" aria-expanded="false" href="#accordion-3 .item-1"><strong>Como me candidatar a uma vaga de aprendiz?</strong> </a></h4></div>
                    <div class="panel-collapse collapse item-1" role="tabpanel">
                        <div class="panel-body"><span>As vagas de aprendiz são para adolescentes de 14 a 21&nbsp;anos, residentes em Curitiba ou Região Metropolitana. O cadastro é feito exclusivamente aqui, pelo nosso site. </span></div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab">
                        <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion-3" aria-expanded="false" href="#accordion-3 .item-2"><strong>Qual a escolaridade necessária?</strong> </a></h4></div>
                    <div class="panel-collapse collapse item-2" role="tabpanel">
                        <div class="panel-body"><span>Estar cursando o Ensino Médio ou concluindo o Ensino Fundamental. </span></div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab">
                        <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion-3" aria-expanded="false" href="#accordion-3 .item-3"><strong>Qual a renda familiar mínima?</strong> </a></h4></div>
                    <div class="panel-collapse collapse in item-3" role="tabpanel">
                        <div class="panel-body"><span>Para participar, a renda familiar deverá ser de até 03 (três) salários mínimos regionais. (Que esteja diretamente ligados ao sustento do adolescente). </span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="saibamais">
        <div class="container">
            <div class="col-md-4 col-xs-12">
                <h1 class="title saibamais">Saiba mais</h1>
                <p class="saibamais">Conheça os documentos importantes para o bom relacionamento entre a empresa, o(a) aprendiz e o Instituto Tibagi. </p>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 saibamais"><a class="btn btn-info btn-block btn-lg" role="button" href="#">Manual da Aprendizagem</a></div>
            <div class="col-md-4 col-sm-6 col-xs-12 saibamais"><a class="btn btn-info btn-block btn-lg" role="button" href="#">Lei de Aprendizagem</a></div>
        </div>
    </section>


@include('site.partials.footer')