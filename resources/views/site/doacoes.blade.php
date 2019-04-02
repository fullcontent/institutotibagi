@include('site.partials.header')

<section id="quemsomos">
        <div class="container-fluid quemsomos" style="background-image:url({{asset("assets/img/")}}/BannerDoacoes.png);">
        <h1 class="quemsomos">Contribuir como forma de agradecer!</h1>
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
        
        <p class="text-center">Ajudar na formação de um aprendiz é agradecer àqueles que um dia também nos ensinaram a dar os primeiros passos na vida profissional! </p>
        <p class="lead text-uppercase text-center">Veja como você pode fazer a diferença na vida de um jovem! </p>
        <div class="col-md-3  btn btn-warning thumbnail">
        	<a href="#doacoes-diretas" class="btn">
            <h1 class="text-center ganha"><i class="glyphicon glyphicon-heart"></i></h1>
            <h1 class="text-center setor">Doações diretas</h1></a></div>
        <div class="col-md-3 btn btn-warning thumbnail">
        	<a href="#doacoes-imposto" class="btn">
            <h1 class="text-center ganha"><i class="glyphicon glyphicon-list-alt"></i></h1>
            <h1 class="text-center setor">Imposto de renda</h1></a></div>
        <div class="col-md-3 btn btn-warning thumbnail">
        	<a href="#doacoes-materiais" class="btn">
            <h1 class="text-center ganha"><i class="fa fa-television"></i></h1>
            <h1 class="text-center setor">Materiais diversos</h1></a></div>
        <div class="col-md-3 btn btn-warning thumbnail">
        	<a href="#doacoes-eletronicos" class="btn">
            <h1 class="text-center ganha"><i class="fa fa-usb"></i></h1>
            <h1 class="text-center setor">Eletrônicos </h1></a></div>
       
    </div>
</section>



<section id="doacoes-diretas" class="historico">
    <div class="container">
        <h1 class="ganha text-center title"><i class="glyphicon glyphicon-heart"></i> Doações Diretas</h1>
        <div class="col-md-4">
            <h1>Depósito bancário</h1>
            <p>Você pode contribuir fazendo doações de qualquer valor diretamente para o Instituto, via depósito em agências ou casas lotéricas da CAIXA: </p>
            <p>AG: 0373</p>
            <p>Conta Corrente: 1775-6</p>
            <p>Operação: 003</p>
            <p>CNPJ: 05.726.562/0001-30</p>
        </div>
        <div class="col-md-4">
            <h1>Pagseguro </h1>
            <p>Uma forma fácil e segura de fazer doação online! </p>
            <form action="https://pagseguro.uol.com.br/checkout/v2/donation.html" method="post">
                <input type="hidden" name="currency" value="BRL" />
                <input type="hidden" name="receiverEmail" value="financeiro@institutotibagi.org.br" />
                <input type="hidden" name="iot" value="button" />
                <input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/doacoes/120x53-doar.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
            </form>
        </div>
        <div class="col-md-4">
            <h1>Paypal </h1>
            <p>Se você mora no exterior, o Paypal é uma ótima maneira de fazer doações! </p>
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                <input type="hidden" name="cmd" value="_s-xclick" />
                <input type="hidden" name="hosted_button_id" value="WY8C6MH7Q59S6" />
                <input type="image" src="https://www.paypalobjects.com/pt_BR/BR/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - A maneira fácil e segura de enviar pagamentos online!" /><img alt border="0" src="https://www.paypalobjects.com/pt_BR/i/scr/pixel.gif" width="1" height="1" /></form>
        </div>
    </div>
</section>


<section id="doacoes-imposto" class="formacoes">
    <div class="container text-white">
        <h1 class="text-center title text-white ganha"><i class="glyphicon glyphicon-list-alt"></i> Doação de imposto de renda</h1>
        <p class="text-center text-white">Você sabia que parte do seu IR pode ser destinado a entidades que realizam trabalhos sociais? O Instituto Tibagi é uma delas! </p>
        <p class="text-center text-white">Várias turmas de aprendizes já foram realizadas graças a este tipo de doação. </p>
        <p class="lead text-center text-white">Veja como é fácil ajudar: </p>
        <div class="col-md-6">
            <h1 class="text-white"><strong>Quem pode doar com dedução do Imposto de Renda?</strong> </h1>
            <p>Pela legislação atual permite-se descontar como doação ao FIA (Fundo para a Infância e a Adolescência): </p>
            <ul>
                <li>toda Pessoa Física que declara pela opção formulário completo, até 6% do imposto devido; </li>
                <li>toda Pessoa Jurídica tributada pelo lucro real até 1% do Imposto de Renda devido, na apuração mensal (por estimativa), trimestral ou anual das pessoas jurídicas. </li>
            </ul>
            <p>As doações ocorrem automaticamente, ou seja, sem que a pessoa física ou juridíca tenha que desembolsar nada além do valor que já irá pagar à Receita Federal. </p>
        </div>
        <div class="col-md-6">
            <h1 class="text-white"><strong>Participe ativamente da administração pública</strong> </h1>
            <p>FIA é um fundo administrado pelo COMTIBA (Conselho dos Direitos da Infância e Adolescência), órgão deliberativo e fiscalizador da política de defesa dos direitos da criança e do adolescente da FAS (Fundação de Ação Social), em Curitiba. O
                valor doado é repassado aos projetos sociais cadastrados e aprovados pelo COMTIBA. </p>
            <p>Ao receberem e utilizarem os recursos do FIA, as organizações são obrigadas a prestar contas do investimento por meio de relatórios financeiros e de atividades. Fazer o repasse é uma oportunidade de decidir o destino de uma parcela de seu
                tributo, ampliando sua participação e ação social. </p>
        </div>
        <div class="col-md-12">
            <h1 class="text-center title white"><strong>Para onde vai sua doação?</strong> </h1>
            <p>O objetivo da captação por meio da dedução do Imposto de Renda é a continuidade do projeto Adolescente Aprendiz, no qual adolescentes recebem profissionalização na área de Eletroeletrônica e podem ser encaminhados ao mercado de trabalho como
                aprendizes. </p>
            <p>Para que os adolescentes possam participar precisam ter entre 14 e 16 anos e estar matriculados no ensino regular. O Instituto Tibagi acompanha seu desempenho escolar, sua vida familiar e na comunidade e seu desenvolvimento na empresa. </p>
            <p>Com a possibilidade do primeiro emprego o aprendiz do Instituto Tibagi contribui, em média, com quase 35% na renda de toda sua família, garantindo um aumento da qualidade de vida familiar e a diminuição de sua participação nas expressões de
                vulnerabilidade social. </p>
        </div>
    </div>
</section>


<section id="doacoes-materiais">
    <div class="container">
        <h1 class="text-center title ganha"><i class="fa fa-television"></i> Doação de materiais diversos</h1>
        <div>
            <p class="lead text-center">Livros, computadores, móveis, materiais e equipamentos diversos também podem ser uma forma de contribuir com o Instituto Tibagi! </p>
            <p class="text-center"> Entre em contato conosco para verificarmos a viabilidade e o aproveitamento da sua doação. </p>
        </div>
    </div>
</section>


<section id="doacoes-eletronicos" class="equipe">
    <div class="container">
        <h1 class="text-center title text-white ganha"><i class="fa fa-usb"></i> Doação de eletrônicos</h1>
        <div class="col-md-4 col-md-offset-0">
            <h1 class="title text-white">Seu lixo eletrônico tem valor para nós! </h1></div>
        <div class="col-md-4">
            <p class="text-white">Todo material eletrônico coletado aqui é encaminhado à Empresa Sete Ambiental que destina os resíduos de forma segura, responsável e ética. </p>
            <p class="text-white">A parceria entre o Instituto Tibagi e a Sete Ambiental, firmada em 2016,  gera recursos financeiros que contribuem para a continuidade dos Projetos Sociais do Instituto! </p>
        </div>
        <div class="col-md-4"><strong class="text-white">Pequenas doações podem ser entregues na sede do Instituto Tibagi:  </strong>
            <p class="text-nowrap text-white">R. Conselheiro Laurindo, 600 - 3 piso – Curitiba – PR </p>
        </div>
        <div class="col-md-4"><strong class="text-white">Já as doações de maior volume podem ser entregues diretamente na sede da Sete Ambiental:  </strong>
            <p class="text-nowrap text-white">R. Prof. Leônidas Ferreira Costa, 135 – Parolin – Curitiba  PR . </p>
        </div>
    </div>
</section>


<section id="doacoes-bazar" style="display: none;">
    <div class="container">
        <h1 class="text-center title ganha"><i class="fa fa-shopping-bag"></i> Bazar beneficente permanente</h1>
        <div class="col-md-6">
            <p class="lead">Criado em  2017, o Bazar  também auxilia na captação de recursos financeiros para os Projetos Sociais do Instituto Tibagi.</p>
        </div>
        <div class="col-md-6">
            <p>Peças em bom estado (roupas, calçados e acessórios) podem ser entregues na sede do Instituto: </p>
            <p>R. Conselheiro Laurindo, 600 - 3 piso – Curitiba – PR </p>
            <p>Horário: de segunda a sexta, das 8:30h as 16:30h, ou retirados com agendamento prévio pelo telefone (41) 3024-9848. </p>
        </div>
    </div>
</section>





@include('site.partials.footer')