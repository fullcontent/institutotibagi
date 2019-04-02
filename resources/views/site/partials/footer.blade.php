 <footer class="footer">
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
        <div class="container footer">
            <div class="row">
                <div class="col-md-2 col-xs-6">
                    <div>
                        <h4>O Instituto</h4>
                        <ul class="list-unstyled footer-list">
                            <li role="presentation" class="btn-block"><a href="{{route('sobre')}}#quemsomos">Quem somos</a></li>
                            <li role="presentation" class="btn-block"><a href="{{route('sobre')}}#equipe">Equipe </a></li>
                            <li role="presentation" class="btn-block"><a href="{{route('sobre')}}#historico">Histórico </a></li>
                            <li role="presentation" class="btn-block"><a href="{{route('sobre')}}#reconhecimento">Reconhecimento</a></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-xs-6">
                    <div>
                        <h4>Transparência</h4>
                        <ul class="list-unstyled footer-list">
                            
                            <li role="presentation" class="btn-block"><a href="{{asset('uploads/documentos/EstatutoInstitutoTibagi.pdf')}}" target="_blank">Estatuto</a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-md-2 col-xs-6">
                    <div>
                        <h4>Aprendiz </h4>
                        <ul class="list-unstyled footer-list">
                            <li><a href="{{asset('uploads/documentos')}}/ManualAprendizagem.pdf" target="_blank">Manual do aprendiz</a></li>
                            
                            <li><a href="https://soundcloud.com/mundodoaprendiz" target="_blank">Podcast</a></li>
                        </ul>
                    </div>
                    
                </div>
                <div class="col-md-3 col-xs-12">
                    <div>

                        <h4>Endereço</h4>
                        <a href="https://goo.gl/maps/EhxEHuADz112" target="_blank">
                        <p>R. Cons. Laurindo, 600 piso 3 - Centro, Curitiba - PR, 800060-100</p>
                        </a>
                    </div>
                    <div>
                        <h4>Telefones </h4>
                        <p>(41)&nbsp;3024-9848 | 3029-7393 </p>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12">
                    <div>
                        <h4>Siga-nos</h4>
                        
                            <span class="footer-icons">
                                <a href="https://www.facebook.com/InstitutoTibagi/" target="_blank" class="primary">
                                    <i class="fa fa-facebook-official"></i>
                                </a>
                            </span>
                        <span class="footer-icons">
                            <a href="https://www.youtube.com/channel/UCqr69Sg4Nt1e_ITylTuoBIw" target="_blank" class="color-red">
                                    <i class="fa fa-youtube"></i>
                                </a>
                        </span>
                        <span class="footer-icons">
                            <a href="https://soundcloud.com/mundodoaprendiz" target="_blank" class="color-yellow">
                                    <i class="fa fa-soundcloud"></i>
                                </a>
                        </span>
                        <span class="footer-icons">
                            <a href="https://www.instagram.com/institutotibagi/" target="_blank"  class="color-red" style="color: #6e462b;">
                                    <i class="fa fa-instagram"></i>
                                </a>
                        </span>
                        
    
                    </div>
                </div>
            </div>
        </div>
        
    </footer>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/slick.js')}}"></script>
    <script src="{{asset('assets/js/smooth.js')}}"></script>
</body>

</html>