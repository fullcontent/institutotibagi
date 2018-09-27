@include('site.partials.header')

<section id="quemsomos">
        <div class="container-fluid quemsomos" style="background-image:url({{asset("assets/img/")}}/BannerContato.png);">
        <h1 class="quemsomos">Vamos conversar!</h1>
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
            <div class="col-md-7">

            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong>{{ $message }}</strong>
                </div>
            @endif

            @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                     <strong>{{ $message }}</strong>
                 </div>
            @endif

                <form class="bootstrap-form-with-validation" action="{{ route('contatoSEND')}}" method="POST">

                    {{ csrf_field() }}
                    <h2 class="text-center">Entre em contato conosco</h2>
                    <div class="form-group">
                        <label class="control-label" for="text-input">Nome </label>
                        <input class="form-control" type="text" name="nome" id="nome">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="telefone">Telefone </label>
                        <input class="form-control" type="text" name="telefone" id="telefone">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="email">Email</label>
                        <input class="form-control" type="email" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="mensagem">Mensagem </label>
                        <textarea class="form-control" name="mensagem" id="mensagem"></textarea>
                    </div>
                    <div class="form-group has-success">
                        <button class="btn btn-info" type="submit">Enviar </button>
                    </div>
                </form>
            </div>
            <div class="col-md-5">
                <iframe allowfullscreen="" frameborder="0" width="100%" height="300" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAaON2hZV-1j3ZHNVcsblsvoVfbkuvshFM&amp;q=Instituto+Tibagi&amp;zoom=10"></iframe>
                <p>Rua Conselheiro Laurindo - &nbsp;nº 600 - piso 3&nbsp;</p>
                <p>CEP: 80060-100 - Centro, Curitiba - PR&nbsp; </p>
                <p>(41) 3024-9848 | 3029-7393&nbsp; </p>
            </div>
        </div>
    </section>
    <section class="setores">
    	<div class="container">
            <div class="col-lg-3 col-md-4 setor">
                <h1 class="setor">Financeiro / RH</h1><strong>Raquel Paes Leme</strong>
                <p>rh@institutotibagi.org.br </p>
            </div>
            <div class="col-lg-3 col-md-4 setor">
                <h1 class="setor">Comunicação </h1><strong>Aline Kovalski Bolwerk</strong>
                <p>comunicacao@institutotibagi.org.br comunicacao2@institutotibagi.org.br</p>
            </div>
            <div class="col-lg-3 col-md-4 setor">
                <h1 class="setor">Administração / Projetos</h1><strong>Regina Vogliotti</strong>
                <p>projetos@institutotibagi.org.br </p>
            </div>
            <div class="col-lg-3 col-md-4 setor">
                <h1 class="setor">Pedagogia </h1><strong>Roberta Souza</strong>
                <p>pedagogia1@institutotibagi.org.br </p>
            </div>
            <div class="col-lg-3 col-md-4 setor">
                <h1 class="setor">Atendimento </h1><strong>Valdenize Saldanha</strong>
                <p>contato@institutotibagi.org.br </p>
            </div>
            <div class="col-lg-3 col-md-4 setor">
                <h1 class="setor">Relacionamento Institucional</h1><strong>Eliane Caviquioli</strong>
                <p>relacionamentos@institutotibagi.org.br </p>
            </div>
            <div class="col-lg-3 col-md-4 setor">
                <h1 class="setor">Assistência Social</h1><strong>Aline Bourscheid</strong>
                <p>servicosocial4@institutotibagi.org.br </p>
            </div>
            <div class="col-lg-3 col-md-4 setor">
                <h1 class="setor">Programa Jovem Aprendiz</h1><strong>Lucimara das Graças</strong>
                <p>servicosocial1@institutotibagi.org.br </p>
            </div>
            <div class="col-lg-3 col-md-4 setor">
                <h1 class="setor">Programa Adolescente Aprendiz</h1><strong>Iraci Stancki da Luz</strong>
                <p>servicosocial2@institutotibagi.org.br </p>
            </div>
        </div>
    </section>


@include('site.partials.footer')