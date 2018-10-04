<?php
    if(!isset($_SESSION)){
        session_start();
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
        <script language="javascript" src="../sicom/view/js/scripts.js"></script>
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
            </div>
        </nav>
        <div class="row" style="padding-top: 160px">
            <div class="col s4"></div>
            <div class="col s4" style="border: 1px solid black;">
                <form action="action/efetuarLogin.php" method="POST">
                    <div class="row">
                        <div class="input-field col s12">
                            <input placeholder="Usuario" id="login" name="login" type="text" class="validate">
                            <label for="login">Login</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" name="password" class="validate">
                            <label for="password">Senha</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s4">
                            <button class="btn waves-effect waves-light" type="submit" name="action">Entrar
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </div>
                </form>    
            </div>
        </div>
        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript">
            M.AutoInit();
        </script>
    </body>
</html>