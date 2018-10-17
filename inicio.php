<?php 
    if(!isset($_SESSION)){
        session_start();
    }
    ini_set('display_errors', true);
    error_reporting(E_ALL);

    extract($_GET, EXTR_PREFIX_ALL, 'p');
    extract($_POST, EXTR_PREFIX_ALL, 'p');
    if(!isset($_SESSION['usuario']['autenticado']) || $_SESSION['usuario']['autenticado'] != 1){
        echo "não Autenticado";
        echo '<script> location.href="index.php" </script>';
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script language="javascript" src="js/scripts.js"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    </head>

    <body>
        <nav>
            <div class="nav-wrapper blue">
                <a href="#" class="brand-logo center">SICOM</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="collapsible.html">Sair</a></li>
                </ul>
            </div>
        </nav>
        <ul id="slide-out" class="sidenav">
            <li>
                <div class="user-view">
                    <div class="background">
                        <img src="https://loga.us/wp-content/uploads/2017/03/hamdesk1.png">
                    </div>
                    <a><img class="circle" src="img/paulinho.jpeg"></a>
                    <a><span class="white-text name"><?php echo $_SESSION['usuario']['nome'];?></span></a>
                    <a><span class="white-text email"><?php echo $_SESSION['usuario']['email'];?></span></a>
                </div>
            </li>
            <li><a id="1" class="waves-effect sidenavop">DashBoard</a></li>
            <li><a id="2" class="waves-effect sidenavop">Administrativo</a></li>
            <li><a id="3" class="waves-effect sidenavop">Serviço</a></li>
            <li><a id="4" class="waves-effect sidenavop">Relatorios</a></li>
            <li><a id="5" class="waves-effect sidenavop">Mapas</a></li>
            <li><div class="divider"></div></li>
            <li><a id="6" class="waves-effect sidenavop">Gerenciamento</a></li>
            <li><a id="7" class="waves-effect sidenavop">Editar Usuario</a></li>
        </ul>
        <div class="fixed-action-btn">
            <a class="sidenav-trigger show-on-large btn-floating btn-large blue" id="float" data-target="slide-out">
                <i class="large material-icons">menu</i>
            </a>
            
            <ul>
                <li><a class="btn-floating blue" id="topPag"><i class="material-icons">keyboard_arrow_up</i></a></li>
            </ul>
        </div>
        <div class="tap-target-wrapper" style="">
            <div class="tap-target blue" data-target="float">
                <div class="tap-target-content white-text">
                    <h5>Menu de Opções</h5>
                    <p>Use este botão para escolher uma ação.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <ul class="tabs" style="display: none" id="tabCab">
                    <li class="tab"><a href="#test1"></a></li>
                    <li class="tab"><a href="#test2"></a></li>
                    <li class="tab"><a href="#test3"></a></li>
                    <li class="tab"><a href="#test4"></a></li>
                    <li class="tab"><a href="#test5"></a></li>
                    <li class="tab"><a href="#test6"></a></li>
                    <li class="tab"><a href="#test7"></a></li>
                </ul>
            </div>
            <div id="test1" class="col s12"></div>
            <div id="test2" class="col s12"></div>
            <div id="test3" class="col s12"></div>
            <div id="test4" class="col s12"></div>
            <div id="test5" class="col s12"></div>
            <div id="test6" class="col s12"></div>
            <div id="test7" class="col s12"></div>
        </div>
 
        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript">
            function hide() {
                $('.divAba').css({display:"none"});
                $('#divOculta').css({display:"block"});
            }
            function show() {
                $('.divAba').css({display:"block"});
                $('#divOculta').css({display:"none"});
            }
            $('#topPag').click(function () {
                $('html, body').animate({scrollTop:0}, 'slow');
            });
            $.ajax({
                url: 'dashboard.php',
                method: 'post',
                success: function(data){

                    $('#test1').html(data);
                }
            });
            $('.sidenavop').click(function () {
                $('#tabCab').tabs('select', "test"+this.id);
                $('.sidenav').sidenav('close');
                if (this.id == 2 /*&& $('#test2').html()==""*/) {
                    $.ajax({
                        url: 'Administrativo.php',
                        method: 'post',
                        success: function(data){

                            $('#test2').html(data);
                        }
                    });
                }else if (this.id == 1 /*&& $('#test3').html()==""*/) {
                    $.ajax({
                        url: 'dashboard.php',
                        method: 'post',
                        success: function(data){

                            $('#test1').html(data);
                        }
                    });
                }else if (this.id == 3 /*&& $('#test3').html()==""*/) {
                    $.ajax({
                        url: 'Servico.php',
                        method: 'post',
                        success: function(data){

                            $('#test3').html(data);
                        }
                    });
                }else if (this.id == 4 /*&& $('#test4').html()==""*/) {
                    $.ajax({
                        url: 'Relatorios.php',
                        method: 'post',
                        success: function(data){

                            $('#test4').html(data);
                        }
                    });
                }else if (this.id == 5 /*&& $('#test5').html()==""*/) {
                    $.ajax({
                        url: 'Mapas.php',
                        method: 'post',
                        success: function(data){

                            $('#test5').html(data);
                        }
                    });
                }else if (this.id == 6 /*&& $('#test6').html()==""*/) {
                    $.ajax({
                        url: 'Gerenciamento.php',
                        method: 'post',
                        success: function(data){

                            $('#test6').html(data);
                        }
                    });
                }  
            });
            M.AutoInit();
            $('.tap-target').tapTarget('open');
        </script>
    </body>
</html>