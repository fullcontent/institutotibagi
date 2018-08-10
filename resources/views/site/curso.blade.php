@include('site.partials.header')


<section id="quemsomos">
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
        <h1>{{$curso->nome}} <small>Detalhes do curso</small></h1></div>
    <div class="col-lg-8 col-md-7">
        <article>
            @if(count($curso->images))
            <div class="col-md-12 no-padding" style="height: 150px; overflow: hidden;">
                @foreach($curso->images as $i)
                <img src="{{asset($i->filename)}}" class="img-responsive" />
                @endforeach
            </div>
            @endif

            @if($curso->criterios)
            <div class="page-row">
                <h3>Critérios </h3>
                {!! $curso->criterios !!}
            </div>
            @endif

            @if($curso->area)
            <div class="page-row">
                <h3>Área de Atuação </h3>
                {!! $curso->area !!}
            </div>
            @endif


            <div class="page-row">
                <div>
                    <ul class="nav nav-tabs nav-justified">

                        @if($curso->ementa)<li><a href="#tab-1" role="tab" data-toggle="tab">Ementa </a></li>@endif
                        @if($curso->processo)<li><a href="#tab-2" role="tab" data-toggle="tab">Processo seletivo</a></li>@endif
                        <li><a href="#tab-3" role="tab" data-toggle="tab">Documentação </a></li>
                    </ul>
                    <div class="tab-content">
                        
                         @if($curso->ementa)
                        <div role="tabpanel" class="tab-pane tab-curso" id="tab-1">
                            {!! $curso->ementa !!}
                        </div>
                        @endif

                        @if($curso->processo)
                        <div role="tabpanel" class="tab-pane tab-curso" id="tab-2">
                            {!! $curso->processo !!}
                        </div>
                        @endif
    

                        <div role="tabpanel" class="tab-pane active tab-curso" id="tab-3">
                            <p> (Possibilidade de documentos serem encaminhados como arquivo escaneados pelo site)DOCUMENTOS OBRIGATÓRIOS - Trazer originais e fotocópias. </p>
                            <ul>
                                <li>RG e CPF </li>
                                <li>Carteira de Trabalho </li>
                                <li>Comprovante de residência </li>
                                <li>Cartão transporte </li>
                                <li>Comprovante de renda familiar </li>
                                <li>Declaração de matrícula e boletim (para quem está estudando) </li>
                                <li>Se estiver cursando o CEBJA trazer comprovante de matrícula comas matérias que está cursando </li>
                                <li>RG e CPF dos responsáveis </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>
    <div class="col-lg-4 col-md-5">
        <div class="page-row">
            <h3>inscrição </h3>
            <p>Para participar do processo seletivo do programa Adolescente Aprendiz em Eletroeletrônica o candidato deverá cadastrar-se no link abaixo. Após ter preenchido corretamente seu cadastro deverá aguardar a abertura do edital e convocação via e-mail.</p>
            <a
            class="btn btn-success btn-block btn-lg" role="button" href="#">Inscreva-se </a>
        </div>
        <div class="page-row">
            <h3><i class="fa fa-clock-o icone"></i> {{$curso->duracao}}</h3>
            <h3><i class="fa fa-home icone"></i> {{$curso->local}}<small> clique para abrir o mapa</small></h3>
            <h3>R$ {{$curso->investimento}}</h3></div>
        <div class="page-row">
            <h3>Dúvidas sobre esse curso</h3>
            <p>Se tiver alguma dúvida sobre este curso, entre em contato conosco para que possamos ajudá-lo.</p>
            <p><i class="glyphicon glyphicon-earphone"></i> (41) 3024-9848 | 3029-7393</p>
            <p><i class="fa fa-envelope-o"></i> cursos@institutotibagi.com.br</p>
        </div>
        <div class="page-row">
            <h3><a href="{{route('cursos')}}">Cursos relacionados</a></h3>
            <ul class="list-unstyled cursos-relacionados">
                <li><a href=""><i class="fa fa-book icone"></i> Curso relacionado</a></li>
            </ul>
        </div>
    </div>
</div>

@include('site.partials.footer')