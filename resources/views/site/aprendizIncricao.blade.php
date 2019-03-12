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




    <div class="container">
            
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

        <div class="col-md-6">
            <form class="bootstrap-form-with-validation" action="{{route('aprendizInscricaoSEND')}}" method="POST">

                    {{ csrf_field() }}
                    <h2 class="text-center">Faça aqui sua incrição</h2>
                    <div class="form-group">
                        <label class="control-label" for="text-input">Nome </label>
                        <input class="form-control" type="text" name="nome" id="nome" placeholder="Qual seu nome?">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="text-input">Data de Nascimento </label>
                        <input class="form-control" type="date" name="dataNasc" id="dataNasc">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="telefone">Telefone </label>
                        <input class="form-control" type="phone" name="telefone" id="telefone" placeholder="Você tem um telefone?">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="email">Email </label>
                        <input class="form-control" type="email" name="email" id="email" placeholder="Você tem um email?">
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="curso" >Curso </label>
                        <select class="form-control" name="curso">
                            
                                <option value="" selected>Selecione o curso desejado</option>

                                @foreach($cursos as $c)
                                    
                                <option value="{{$c->id}}">{{$c->nome}}</option>
                                @endforeach
                               
                            
                        </select>
                    </div>
                    
                    <div class="form-group has-success">
                        <button class="btn btn-success" type="submit">Inscrever </button>
                    </div>
                </form>


        </div>


    
        <div class="col-md-6">

            

            <h2 class="text-center">Informações</h1>
            
            
            <p>
                Para participar do processo seletivo somente para o curso de Eletromecânica, aqueles que tem acima de 18 anos, é necessário comparecer ao Instituto Tibagi, em uma das datas a seguir, munido de originais e fotocópias de TODA a documentação obrigatória pontualmente às 14h30 para participação na palestra informativa sobre o Programa de Aprendizagem.
            </p>
            
<<<<<<< HEAD
            <h2 class="text-center">Data das próximas palestras</h2>




		<div class="col-md-2 thumbnail" style="margin-left: 20px">
		<h1>28/01</h1>
		<p>14h30</p>
</div>

=======
           
>>>>>>> e55aad0cd50b19ad47d549c833da7e59d312ffd6
            
        </div>
        
            
    </div>



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
