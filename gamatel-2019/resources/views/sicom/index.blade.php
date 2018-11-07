@extends('layout.sicom')
@section('conteudo')
<body>
    <nav>
        <div class="nav-wrapper blue">
            <a href="#" class="brand-logo center">SICOM</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="{{route('sicom.logout')}}">Sair</a></li>
            </ul>
        </div>
    </nav>
    <ul id="slide-out" class="sidenav">
        <li>
            <div class="user-view">
                <div class="background">
                    <img src="https://loga.us/wp-content/uploads/2017/03/hamdesk1.png">
                </div>
                <a><img class="circle" src="{{asset('img/paulinho.jpeg')}}"></a>
                <a><span class="white-text name">{{Auth::user()->name}}</span></a>
                <a><span class="white-text email">{{Auth::user()->email}}</span></a>
            </div>
        </li>
        <li><a id="1" class="waves-effect sidenavop">DashBoard</a></li>
        <li><a id="2" class="waves-effect sidenavop">Comercial</a></li>
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
    <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
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
            url: '{{url('/sicom/dashboard')}}',
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
                    url: '{{url('/sicom/comercial')}}',
                    method: 'get',
                    success: function(data){

                        $('#test2').html(data);
                    }
                });
            }else if (this.id == 1 /*&& $('#test3').html()==""*/) {
                $.ajax({
                    url: '{{url('/sicom/dashboard')}}',
                    method: 'get',
                    success: function(data){

                        $('#test1').html(data);
                    }
                });
            }else if (this.id == 3 /*&& $('#test3').html()==""*/) {
                $.ajax({
                    url: '{{url('/sicom/servico')}}',
                    method: 'get',
                    success: function(data){

                        $('#test3').html(data);
                    }
                });
            }else if (this.id == 4 /*&& $('#test4').html()==""*/) {
                $.ajax({
                    url: 'Relatorios.php',
                    method: 'get',
                    success: function(data){

                        $('#test4').html(data);
                    }
                });
            }else if (this.id == 5 /*&& $('#test5').html()==""*/) {
                $.ajax({
                    url: 'Mapas.php',
                    method: 'get',
                    success: function(data){

                        $('#test5').html(data);
                    }
                });
            }else if (this.id == 6 /*&& $('#test6').html()==""*/) {
                $.ajax({
                    url: '{{url('/sicom/gerenciamento/addUser')}}',
                    method: 'get',
                    success: function(data){

                        $('#test6').html(data);
                    }
                });
            }else if (this.id == 7 /*&& $('#test6').html()==""*/) {
                $.ajax({
                    url: '{{url('/sicom/gerenciamento/updateUser')}}',
                    method: 'get',
                    success: function(data){

                        $('#test7').html(data);
                    }
                });
            }  
        });
        M.AutoInit();
        $('.tap-target').tapTarget('open');
    </script>
</body>
@endsection