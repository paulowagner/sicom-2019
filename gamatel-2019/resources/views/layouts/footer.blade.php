<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="img/prodfor.png">
            </div>
            
            <div class="col-md-2">
                <h4>Menu</h4>
                <ul class="nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#contato">Contato</a></li>
                    <li><a href="sicom/index.php">Sicom</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <h4>Políticas</h4>
                <ul class="nav">
                    <li><a href="" data-toggle="modal" data-target="#qualidade">Qualidade</a></li>
                    <li><a href="" data-toggle="modal" data-target="#ambiental">Ambiental</a></li>
                    <li><a href="" data-toggle="modal" data-target="#saudeeseguranca">Saúde e segurança</a></li>
                </ul>
                <div class="modal" id="qualidade"> 
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">
                                    <spam>&times;</spam>
                                </button>
                                <h4 style="color: black"> Política de Qualidade</h4>
                            </div>
                            <div class="modal-body">
                                
                                <p style="color: black">
                                    Fornecer soluções em telecomunicações buscando sempre o atendimento dos requisitos dos clientes por meio de equipe capacidade e infraestrutura adequada, visando o crescimento e desenvolvimento da empresa e a melhoria contínua do Sistema de Gestão da Qualidade.
                                </p>
                            </div>                        
                        </div>
                    </div>
                </div>
                <div class="modal" id="saudeeseguranca"> 
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">
                                    <spam>&times;</spam>
                                </button>
                                <h4 style="color: black">Política de Saúde e Segurança do Trabalho</h4>
                            </div>
                            <div class="modal-body">
                                <h4 style="color: black"> A Gamatel estabeleceu e está comprometida com a seguinte política:</h4>
                                <ul style="color: black">
                                    <li>Cumprir a legislação de saúde e segurança do trabalho</li>
                                    <li>Educar, capacitar e conscientizar os colaboradores para as questões de saúde e segurança do trabalho</li>
                                    <li>Atuar com foco na prevenção de acidentes, incidentes e doenças ocupacionais, promovendo, incentivando e cobrando o uso de EPI e EPC.</li>
                                </ul>
                            </div>                        
                        </div>
                    </div>
                </div>
                <div class="modal" id="ambiental"> 
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">
                                    <spam>&times;</spam>
                                </button>
                                <h4 style="color: black"> Política Ambiental</h4>
                            </div>
                            <div class="modal-body">
                                    <h4 style="color: black"> A Gamatel estabeleceu e está comprometida com a seguinte política:</h4>
                                    <ul style="color: black">
                                        <li>Melhorar continuamente o desempenho ambiental de nossos produtos e serviços: controle de resíduos</li>
                                        <li>Respeitar a legislação ambiental aplicável</li>
                                        <li>Conscientizar e treinar nossos colaboradores sobre meio ambiente.</li>
                                    </ul>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">

            </div>
        </div>
    </div>
</footer>
<script>
            function initMap() {
                var uluru = {lat: -20.306851, lng: -40.317486};
                var map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 18,
                    center: uluru
                });
                var marker = new google.maps.Marker({
                    position: uluru,
                    map: map
                });
            }
        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkeWIS7d05EljKIU0OP9nhVcxLkV1vDnE&callback=initMap">
       </script>
        <!--script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkeWIS7d05EljKIU0OP9nhVcxLkV1vDnE&callback=myMap"></script-->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script type="text/javascript">
          $('ul.nav li.dropdown').hover(function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
          }, function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
          });
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>