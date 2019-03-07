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
            <div class="col-md-4 col-sm-4"><a href="{{route('aprendizQuero')}}"><img src="assets/img/btn-quero.png" class="img-responsive"></a></div>
            <div class="col-md-4 col-sm-4"><img src="assets/img/btn-sou.png" class="img-responsive"></div>
            <div class="col-md-4 col-sm-4"><img src="assets/img/btn-souex.png" class="img-responsive"></div>
        </div>
    </section>
    <section class="formacoes">
        <div class="container">
            <div class="col-md-5 col-sm-6">
                <h1 class="title white">Adolescente Aprendiz</h1>
                <p class="subtitulo white">Para adolescentes de 14 a 16 anos incompletos.</p>
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
                <p class="subtitulo white">Destinado aos jovens de 18 a 22 anos incompletos. </p>
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
            <div role="tablist" aria-multiselectable="true" class="panel-group" id="accordion-3">
    <div class="panel panel-default">
        <div role="tab" class="panel-heading">
            <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion-3" aria-expanded="false" href="#accordion-3 .item-1"><strong>Como me candidatar a uma vaga de aprendiz?</strong> </a></h4></div>
        <div role="tabpanel" class="panel-collapse collapse item-1">
            <div class="panel-body"><span>As vagas de aprendiz são para adolescentes de 14 a 21 anos, residentes em Curitiba ou Região Metropolitana. O cadastro é feito exclusivamente pelo nosso site. Qualquer dúvida, entre em contato conosco. </span></div>
        </div>
    </div>
    
    <div class="panel panel-default">
        <div role="tab" class="panel-heading">
            <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion-3" aria-expanded="false" href="#accordion-3 .item-3"><strong>Qual a idade para participar do projeto?</strong> </a></h4></div>
        <div role="tabpanel" class="panel-collapse collapse item-3">
            <div class="panel-body"><span>Para participar o adolescente deve ter entre 14 e 21 anos. Para pessoas com deficiência, não há limite de idade. </span></div>
        </div>
    </div>
    <div class="panel panel-default">
        <div role="tab" class="panel-heading">
            <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion-3" aria-expanded="false" href="#accordion-3 .item-4"><strong>Quanto Custa?</strong> </a></h4></div>
        <div role="tabpanel" class="panel-collapse collapse item-4">
            <div class="panel-body"><span>O Treinamento do Instituto Tibagi é <strong>GRATUITO</strong> para o aprendiz. O Instituto não cobra dos adolescentes<strong>.</strong> Se receber telefonemas em que afirmam ser do Instituto, peça a identificação do profissional e, se for necessário, entre em contato através do formulário do website informando o fato. </span></div>
        </div>
    </div>
    <div class="panel panel-default">
        <div role="tab" class="panel-heading">
            <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion-3" aria-expanded="false" href="#accordion-3 .item-5"><strong>Qual a escolaridade necessária?</strong> </a></h4></div>
        <div role="tabpanel" class="panel-collapse collapse item-5">
            <div class="panel-body"><span>Estar cursando o Ensino Médio ou concluindo o Ensino Fundamental. </span></div>
        </div>
    </div>
    <div class="panel panel-default">
        <div role="tab" class="panel-heading">
            <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion-3" aria-expanded="false" href="#accordion-3 .item-6"><strong>Terminei o Ensino Médio, posso me cadastrar no Instituto Tibagi como aprendiz?</strong> </a></h4></div>
        <div role="tabpanel" class="panel-collapse collapse item-6">
            <div class="panel-body"><span>Sim. Lembre-se de ter em mãos o certificado. </span></div>
        </div>
    </div>
    <div class="panel panel-default">
        <div role="tab" class="panel-heading">
            <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion-3" aria-expanded="false" href="#accordion-3 .item-7"><strong>E se eu estiver matriculado em uma faculdade, posso me cadastrar?</strong> </a></h4></div>
        <div role="tabpanel" class="panel-collapse collapse item-7">
            <div class="panel-body"><span>Sim. </span></div>
        </div>
    </div>
    <div class="panel panel-default">
        <div role="tab" class="panel-heading">
            <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion-3" aria-expanded="false" href="#accordion-3 .item-8"><strong>Qual a renda familiar mínima?</strong> </a></h4></div>
        <div role="tabpanel" class="panel-collapse collapse item-8">
            <div class="panel-body"><span>Para participar, a renda familiar deverá ser de até 03 (três) salários mínimos regionais (que esteja diretamente ligados ao sustento do adolescente). </span></div>
        </div>
    </div>
    <div class="panel panel-default">
        <div role="tab" class="panel-heading">
            <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion-3" aria-expanded="false" href="#accordion-3 .item-9"><strong>Qual a documentação necessária para me cadastrar no Instituto Tibagi?</strong> </a></h4></div>
        <div role="tabpanel" class="panel-collapse collapse item-9">
            <div class="panel-body">
                <ul>
                    <li>CPF </li>
                    <li>RG </li>
                    <li>Carteira de Trabalho – 1a página </li>
                    <li>Último boletim escolar </li>
                    <li>Comprovante de endereço </li>
                    <li>Comprovante de renda familiar </li>
                    <li>Cartão Transporte da Urbs </li>
                    <li>Título de Eleitor (opcional para maiores de 16, obrigatório para quem tem 18 anos) </li>
                    <li>CPF do Responsável Legal </li>
                    <li>RG do Responsável Legal </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div role="tab" class="panel-heading">
            <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion-3" aria-expanded="false" href="#accordion-3 .item-10"><strong>Posso ir na Instituto Tibagi fazer minha a inscrição?</strong> </a></h4></div>
        <div role="tabpanel" class="panel-collapse collapse item-10">
            <div class="panel-body"><span>Não. Todas as inscrições são feitas pela internet. Qualquer dúvida, entre em contato conosco. </span></div>
        </div>
    </div>
    <div class="panel panel-default">
        <div role="tab" class="panel-heading">
            <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion-3" aria-expanded="false" href="#accordion-3 .item-11"><strong>Em que situação precisarei ir ao Instituto Tibagi?</strong> </a></h4></div>
        <div role="tabpanel" class="panel-collapse collapse item-11">
            <div class="panel-body"><span>Caso algum funcionário do Instituto (identificado) entre em contato e agende uma data e horário para a visita. </span></div>
        </div>
    </div>
    <div class="panel panel-default">
        <div role="tab" class="panel-heading">
            <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion-3" aria-expanded="false" href="#accordion-3 .item-12"><strong>Depois de agendar uma entrevista, posso levar meu pai, mãe ou responsável para participar do cadastro?</strong> </a></h4></div>
        <div role="tabpanel" class="panel-collapse collapse item-12">
            <div class="panel-body"><span>Sim. Tanto pai, mãe ou responsável poderão ir ao local da entrevista para cadastro, entretanto não poderão participar de atividade alguma, tanto a escrita quanto a entrevista com a equipe do Instituto. </span></div>
        </div>
    </div>
    <div class="panel panel-default">
        <div role="tab" class="panel-heading">
            <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion-3" aria-expanded="false" href="#accordion-3 .item-13"><strong>Já tenho um emprego. Posso me cadastrar como adolescente aprendiz no Instituto Tibagi?</strong> </a></h4></div>
        <div role="tabpanel" class="panel-collapse collapse item-13">
            <div class="panel-body"><span>Não. Se você possuir registro em sua Carteira de Trabalho e Previdência Social – CTPS, o cadastro no Instituto Tibagi NÃO poderá ser feito.  Adolescentes que nunca trabalharam com registro em Carteira Profissional são priorizados. </span></div>
        </div>
    </div>
    <div class="panel panel-default">
        <div role="tab" class="panel-heading">
            <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion-3" aria-expanded="false" href="#accordion-3 .item-14"><strong>Já sou aprendiz por outra Instituição. Posso participar do Instituto Tibagi também?</strong> </a></h4></div>
        <div role="tabpanel" class="panel-collapse collapse item-14">
            <div class="panel-body"><span>Não. A Lei não permite ser aprendiz em duas instituições. </span></div>
        </div>
    </div>
    <div class="panel panel-default">
        <div role="tab" class="panel-heading">
            <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion-3" aria-expanded="false" href="#accordion-3 .item-15"><strong>Ainda não completei o ensino fundamental, posso me cadastrar no Instituto Tibagi?</strong> </a></h4></div>
        <div role="tabpanel" class="panel-collapse collapse item-15">
            <div class="panel-body"><span>Sim, desde que ainda esteja estudando (matriculado). </span></div>
        </div>
    </div>
    <div class="panel panel-default">
        <div role="tab" class="panel-heading">
            <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion-3" aria-expanded="false" href="#accordion-3 .item-16"><strong>Parei de estudar, mas pretendo voltar, posso me cadastrar no Instituto Tibagi?</strong> </a></h4></div>
        <div role="tabpanel" class="panel-collapse collapse item-16">
            <div class="panel-body"><span>O cadastro só pode ser feito a partir do momento que você tiver a declaração de matrícula. </span></div>
        </div>
    </div>
    <div class="panel panel-default">
        <div role="tab" class="panel-heading">
            <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion-3" aria-expanded="true" href="#accordion-3 .item-17"><strong>Tenho um cartão transporte de estudante, preciso fazer o cartão de Usuário?</strong> </a></h4></div>
        <div role="tabpanel" class="panel-collapse collapse item-17">
            <div class="panel-body"><span>Sim. Você deverá ter o Cartão de Usuário. </span></div>
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
            <div class="col-md-4 col-sm-6 col-xs-12 saibamais">
                <a class="btn btn-info btn-block btn-lg" role="button" href="{{asset('uploads/documentos')}}/ManualAprendizagem.pdf" target="_blank">Manual da Aprendizagem</a></div>
            
            <div class="col-md-4 col-sm-6 col-xs-12 saibamais">
                <a class="btn btn-info btn-block btn-lg" role="button" href="{{asset('uploads/documentos')}}/LeiDeAprendizagem_L10097.pdf" target="_blank">Lei da Aprendizagem</a></div>


        </div>
    </section>


@include('site.partials.footer')
