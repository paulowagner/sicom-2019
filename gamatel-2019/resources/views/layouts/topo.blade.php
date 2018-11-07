<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('titulo')</title>
        <link rel="icon" href="imagens/favicon.ico">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap -->
        <!-- Tema opcional -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="{{ asset('css/estilo.css')}}" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-fixed-top navbar-inverse navbar-transparente">
            <div class="container">        
                <!-- header -->
                <div class="navbar-header">
          
                <!-- botao toggle -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barra-navegacao">
                        <span class="sr-only">alternar navegação</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php" class="navbar-brand">
                        <span class="img-logo"></span>
                    </a>
                </div>
                <!-- navbar -->
                <div class="collapse navbar-collapse" id="barra-navegacao">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('/')}}#contato">Contato</a></li>
                        <li class="dropdown">
                            <a href="{{url('/radios')}}" class="dropdown-toggle" data-toggle="dropdown">Radiocomunicação <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{url('/radios')}}#portateis">Portateis</a></li>
                                <li><a href="{{url('/radios')}}#moveis">Móveis/Fixos</a></li>
                                <li><a href="{{url('/radios')}}#repetidoras">Repetidoras</a></li>
                                <li><a href="{{url('/radios')}}#servicos">Serviços</a></li>
                            </ul>
                        </li>
                        <!--li class="dropdown">
                            <a href="telefonia.html" class="dropdown-toggle" data-toggle="dropdown">Telefonia<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="telefonia.html#centrais">Centrais telefonicas</a></li>
                                <li><a href="telefonia.html#call">Call center</a></li>
                                <li><a href="telefonia.html#voice">Voice mail</a></li>
                                <li><a href="telefonia.html#servicos">Serviços</a></li>
                            </ul>
                        </li-->
                        <li class="divisor hidden-xs" role="separator"></li>
                        <li><a href="{{url('/sicom')}}">SICOM</a></li>
                      </ul>
                </div>
            </div><!-- /container -->
        </nav><!-- /nav -->