@include('site.partials.header')

<section id="quemsomos">
        <div class="container-fluid quemsomos">
            <h1 class="quemsomos">há mais de 20 anos inserindo jovens em situação de vulnerabilidade social no mercado de trabalho.</h1></div>
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

	

    <section class="formacoes">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-6">
                <div>
                    <h1 class="title">Adolescente Aprendiz</h1>
                    <p>Destinado a adolescentes de 14 a 17 anos incompletos.</p>
                    <div class="col-md-10 no-padding">
                        <div role="tablist" aria-multiselectable="true" class="panel-group" id="accordion-1">
                           
                            @foreach($cursosAdolescentes as $c)
                            <div class="panel panel-default">
                                <div role="tab" class="panel-heading">
                                    <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion-1" aria-expanded="false" href="#accordion-1 .item-{{$c->id}}">{{$c->nome}}</a></h4></div>
                                
                                <div role="tabpanel" class="panel-collapse collapse item-{{$c->id}}">
                                    <div class="panel-body">
                                        <p>{{$c->descritivo}}</p>
                                        <a class="btn btn-success" role="button" href="{{route('curso', ['id'=>$c->id, 'slug'=>str_slug($c->nome)])}}">Saiba mais</a></div>
                                        
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div>
                    <h1 class="title">Jovem Aprendiz</h1>
                    <p>Destinado a jovens de 18 a 22 anos.</p>
                    <div class="col-md-10 no-padding">
                        <div role="tablist" aria-multiselectable="true" class="panel-group" id="accordion-2">
                            @foreach($cursosJovens as $c2)
                            <div class="panel panel-default">
                                <div role="tab" class="panel-heading">
                                    <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion-2" aria-expanded="false" href="#accordion-2 .item-{{$c2->id}}">{{$c2->nome}}</a></h4></div>
                                
                                <div role="tabpanel" class="panel-collapse collapse item-{{$c2->id}}">
                                    <div class="panel-body">
                                        <p>{{$c2->descritivo}}</p>
                                        <a class="btn btn-success" role="button" href="{{route('curso', ['id'=>$c2->id, 'slug'=>str_slug($c2->nome)])}}">Saiba mais</a></div>
                                        
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <h1 class="title">Legislação </h1>
                <p>Tivemos, em 01/05/1943, a primeira Lei de aprendizagem (nº 5.452), pela qual somente o Sistema S podia fazer a formação teórica.Em 19 de dezembro de 2000 foi sancionada a nova lei, nº10.097, posteriormente regulamentada pelo decreto nº
                    5.598, de 1º de dezembro de 2005, e com as diretrizes curriculares estabelecidas na Portaria MTE nº 615, de 13 de dezembro de 2007, reformulada pelas portarias 723/04/12 e 1005/07/2013. </p>
                <h1>A LEI FOI CRIADA COM AS SEGUINTES INTENÇÕES: </h1>
                <ul>
                    <li>Erradicação do trabalho infantil </li>
                    <li>Redução da evasão escolar </li>
                    <li>Erradicação da pobreza </li>
                    <li>Melhoria da qualificação profissional </li>
                    <li>Efetivação do primeiro emprego </li>
                </ul>
                <p>Leia o texto completo da <a href="http://institutotibagi.org.br/wp-content/uploads/2015/05/LeiDeAprendizagem_L10097.pdf">Lei de Aprendizagem</a> </p>
            </div>
        </div>
    </div>
</section>


    <section class="saibamais">
        <div class="container">
            <div class="col-md-4 col-xs-12">
                <h1 class="title saibamais">Saiba mais</h1>
                <p class="saibamais">Existem alguns documentos importantes para o bom relacionamento entre a empresa, o(a) aprendiz e o Instituto. </p>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 saibamais"><a class="btn btn-info btn-block btn-lg" role="button" href="#">Manual da Aprendizagem</a></div>
            <div class="col-md-4 col-sm-6 col-xs-12 saibamais"><a class="btn btn-info btn-block btn-lg" role="button" href="#">Lei de Aprendizagem</a></div>
        </div>
    </section>


@include('site.partials.footer')