@include('site.partials.header')

	
	<section id="quemsomos">
        <div class="container-fluid quemsomos">
            <h1 class="quemsomos">há mais de 20 anos inserindo jovens em situação de vulnerabilidade social no mercado de trabalho. </h1></div>
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
            <div class="col-md-4">
                <h1 class="missao">Missão <i class="glyphicon glyphicon-screenshot"></i></h1>
                <p>Proporcionar aos jovens uma educação de qualidade como forma de inserção social. Auxiliá-los a se tornarem autônomos, cientes de seus direitos e deveres, capazes de definir seu projeto de vida e de transformá-lo em verdade. </p>
            </div>
            <div class="col-md-4">
                <h1 class="missao">Visão <i class="glyphicon glyphicon-eye-open"></i></h1>
                <p>Ser reconhecido como centro de referência de qualificação profissional e inclusão social no Estado do Paraná. </p>
            </div>
            <div class="col-md-4">
                <h1 class="missao">Valores <i class="glyphicon glyphicon-star"></i></h1>
                <p>Em todas as nossas relações, sejam de ordem pessoal ou profissional, prezamos pela lealdade e pelo respeito ao próximo, e isso passamos para a nossa equipe e alunos. </p>
            </div>
        </div>
    </section>
    <section id="historico">
        <div class="container">
            <h1 class="text-center title">Um pouco da nossa história</h1>
            <div class="row historico">

                <div class="col-md-6">
                    <iframe width="450" height="250" allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/Ie0VQQglOjY?controls=0&amp;showinfo=0&amp;rel=0"></iframe>
                </div>
                <div class="col-md-6">
                    <p>Fundado em 1995 o Instituto&nbsp;Tibagi é uma organização social que desenvolve e implementa programas educacionais na área industrial para&nbsp;adolescentes e jovens em condições de vulnerabilidade social e econômica. </p>
                    <p>O programa de aprendizagem do Instituto&nbsp;Tibagi desenvolvido na área industrial garante uma formação técnica profissionalizante completa onde o aprendiz&nbsp;<strong>realiza 1.600 horas de formação sendo, 480 &nbsp;horas de conteúdo teórico e 1.120 horas de prática dentro da empresa.</strong>                        </p>
                </div>
                
            </div>
            <hr>
            <div class="row timeline">
                <div class="col-md-6 col-sm-5">
                    <h1 class="ano">2015 </h1>
                    <p>São 20 anos de experiência com ensino profissionalizante, desde a formação da Escola Técnica Tibagi. Com quase 12 anos como Instituto Tibagi, a Instituição conta com o Título de Utilidade Pública Municipal nº 11.948, Estadual nº 15.328
                        e registro no Ministério do Trabalho e Emprego. </p>
                </div>
                <div class="col-md-6 col-sm-5 historico-image"><img src="assets/img/Foto-Ettibagi-5.jpg" class="img-responsive"></div>
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
            <div class="row timeline">
                <div class="col-md-6 col-sm-5 historico-image"><img src="assets/img/DSC01409.jpg" class="img-responsive"></div>
                <div class="col-md-6 col-sm-5">
                    <h1 class="ano">2005 </h1>
                    <p>Neste ano, foi iniciada a primeira turma de Eletroeletrônica. Desde lá, foram concluídas, até dezembro de 2014, 19 turmas de aprendizes nas áreas de eletroeletrônica, auxiliar administrativo, operador de produção industrial, eletromecânica
                        e manutenção automotiva. </p>
                </div>
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
            <div class="row timeline">
                <div class="col-md-6 col-sm-5">
                    <h1 class="ano">2003 </h1>
                    <p>Após diversos estudos, definiu-se a criação de uma Associação de Pessoas com o nome de Instituto. Em 06 de maio de 2003 foi fundado, assim, o Instituto Tibagi, sociedade civil sem fins lucrativos. </p>
                </div>
                <div class="col-md-6 col-sm-5 historico-image"><img src="assets/img/DSC01409.jpg" class="img-responsive"></div>
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
            <div class="row timeline">
                <div class="col-md-6 col-sm-5 historico-image"><img src="assets/img/Foto-Ettibagi-5.jpg" class="img-responsive"></div>
                <div class="col-md-6 col-sm-5">
                    <h1 class="ano">1995 </h1>
                    <p>Em 05 de Junho deste ano, foi fundada a Escola Técnica Tibagi, com a finalidade de formação profissional na área de eletromecânica para jovens em condições de vulnerabilidade social e econômica. Com o apoio da empresa Tibagi Engenharia
                        Construções e Mineração Ltda, manteve-se uma escola para adolescentes nos moldes do Projeto Pescar. </p>
                </div>
            </div>
        </div>
    </section>
    <section id="equipe">
        <div class="container">
            <h1 class="text-center title text-white">Quem faz isso acontecer</h1>
            
            <div class="col-md-2 col-sm-4 equipe"><img src="assets/img/WEBPEDALADA-SOCIAL-GIULIANO-GOMES-07-1024x885.jpg" class="img-responsive">
                <h1 class="text-center equipe-cargo">Fundador </h1>
                <h1 class="text-center equipe-nome">Édio Furlanetto</h1></div>
        </div>
    </section>
    <section id="reconhecimento">
        <div class="container">
            <h1 class="title text-center">Reconhecimento </h1>
            
             @php 

                $files = File::allFiles(public_path('uploads/selos'));
                
            @endphp
            @foreach ($files as $file)
            <div class="col-md-2 col-sm-4 col-xs-6"><img src="{{asset('uploads/selos')}}/{{$file->getFilename()}}" class="img-responsive"></div>
            @endforeach
            
        </div>
    </section>


@include('site.partials.footer')