@extends('layouts.site')
@section('titulo','Gamatel')

@section('conteudo')
        <section class="capa">
            <div class="container" style="padding-top: 100px;padding-bottom: 20px">
                <div class="row center_div" >
                    <div class="hidden-xs hidden-sm col-md-8">
                        <!--              teste                                 -->
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="{{asset('img/resize/img8.jpg')}}" class="img-responsive">
                                    <div class="carousel-caption">
               
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="{{asset('img/resize/img7.jpg')}}" class="img-responsive">
                                    <div class="carousel-caption">
               
                                    </div>
                                </div>
                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!-- fim teste --> 
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <p style="">
                            SOLUÇÕES EM REDICOMUNICAÇÃO,<br>
                            COMUNICAÇÃO UNIFICADA,<br>
                            VOZ SOBRE IP, CALLCENTER,<br>
                            CENTRAIS TELEFONICAS,<br>
                            GERENCIAMENTO DE CUSTOS<br>
                            DE TELECOMUNICAÇÕES<br>(VOZ E DADOS – TEM)<br>
                            E REDES DE DADOS WIRELESS.
                        </p>
                    </div>
                    <div class="visible-xs-block visible-sm-block col-xs-12 col-sm-12">
                        <!--              teste                                 -->
                        <div id="carousel-example-generic-2" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic-2" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic-2" data-slide-to="1"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="img/resize/img8.jpg" class="img-responsive">
                                    <div class="carousel-caption">
               
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="img/resize/img6.jpg" class="img-responsive">
                                    <div class="carousel-caption">
               
                                    </div>
                                </div>
                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic-2" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic-2" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!-- fim teste --> 
                    </div>
                </div>
            </div>
        </section>

        <!-- Conteudos -->
        <section id="servicos">
            <div class="container">
                <div class="row" style="height: 100px"></div>
                <div class="row">
                    <!-- servicos -->
                    <div class="col-md-6">
                        <h3>O que fazemos?</h3>
                        <p>
                          A GAMATEL é especialista em venda e locação de equipamentos de telecomunicações: Radiocomunicadores, Centrais Telefônicas, Voz sobre IP, Rede de Dados Wireless. A GAMATEL dispõe de equipe de engenharia para desenvolvimento de estudos técnicos, consultoria e implantação de sistemas de telecomunicações.
                        </p>
                        <h3>Locações e vendas</h3>
                        <p>A GAMATEL ofereçe a seus clientes, a oportunidade de locação ou compra de equipamentos, que vão desde um simples transceptor portátil até uma completa estação repetidora.<br>

                        Todos os equipamentos de locação são Semi-novos ou mesmo novos, o que garante ao Locatário uma maior segurança na qualidade dos equipamentos, deixando-o livre de surpresas inconvenientes.</p>

                        <h3>Serviços</h3>
                        <p>Destacamos os serviços prestados pela GAMATEL na área de 'Engenharia de Telecomunicações'. Buscamos sempre colaborar para que nossos clientes encontrem a melhor solução para sistemas de transmissão de voz, dados e imagem, tais como:
                        <ul>
                            <li>implantação de projetos de radiocomunicação</li>
                            <li>implantação de projetos de telefonia/voz(centrais telefonicas)</li>
                            <li>licenciamento de redes de radiocomunicação junto a ANATEL</li>
                            <li>manutenção de equipamentos de telefonia e rádio comunicação</li>
                        </ul> 
                        </p>
                    </div>
                    <!-- albuns -->
                    <div class="col-md-6">            
                        <div class="row albuns">                      
                            <div class="col-md-6 hidden-xs">
                                <img src="imagens/img1.jpg" class="img-responsive">
                            </div>
                            <div class="col-md-6 hidden-xs">
                                <img src="imagens/img2.jpg" class="img-responsive">
                            </div>
                        </div><!-- /row -->
                        <div class="row albuns">                      
                            <div class="col-md-6 hidden-xs">
                                <img src="imagens/img3.jpg" class="img-responsive">
                            </div>
                            <div class="col-md-6 hidden-xs">
                                <img src="imagens/img4.jpg" class="img-responsive">
                            </div>
                        </div><!-- /row -->
                    </div>
                </div>
            </div>
        </section>

        <section id="contato">
            <div class="container">
                <div class="row" style="height: 80px"></div>
                <div class="row center_div">
                    <div class="col-md-8">
                        <h2 style="text-align: center">Contato</h2>
                        <form method="POST" id="form_contato">

                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome" required="required">
                            </div>

                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control" id="email" name="email" required="required">
                            </div>

                            <div class="form-group">
                                <label for="assunto">Assunto</label>
                                <input type="text" class="form-control" id="assunto" name="assunto" required="required">
                            </div>
                            <div class="form-group">
                                <label for="mensagem">Mensagem</label>
                                <textarea rows="5" cols="50" class="form-control" name="msg" id="mensagem" required="required"></textarea>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="check"> Me enviar um cópia
                                </label>
                            </div>
                            <button type="button" class="btn btn-default" id="btn_contato">Enviar</button>
                        </form>
                        <div id="log_mail"></div>
                    </div>
                    <div class="col-md-4">
                        <h3>GAMATEL SISTEMAS LTDA</h3>
                        <p>Espírito Santo - Vitória<br>
                          R. Sta. Rita de Cássia, 390 - B. LOURDES - CEP: 29042-753<br>
                          Fone: 27 4009 4399<br>
                        </p>           
                        <h3>ALFATELE LTDA</h3>
                        <p>Minas Gerais - Governador Valadares<br>
                          Av. Brasil, 2472 - B. CENTRO - CEP: 35020-070<br>
                          Fone: 33 2101 0088
                        </p>                    
                    </div>              
                </div>
            </div>
        </section>
        <section style="background-color: #fff; color: black; width: 100%; padding-top: 20px;padding-bottom: 20px;" class="container">
            <div >
                <div class="row" >
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-10">
                        <h2 style="text-align: center;">Onde estamos</h2>
                        <div id="map" style="height: 400px;"></div>
                    </div>
                </div>
            </div>
        </section>
@endsection
