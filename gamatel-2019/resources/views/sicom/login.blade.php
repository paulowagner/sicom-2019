@extends('layout.sicom')
@section('conteudo')
<body>
    <nav>
        <div class="nav-wrapper blue">
            <a href="#" class="brand-logo center">SICOM</a>
        </div>
    </nav>
    <div class="row" style="padding-top: 160px">
        <div class="col s4"></div>
        <div class="col s4" style="border: 1px solid black;">
            <form action="{{route('sicom.entrar')}}" method="POST">
            	@csrf
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
@endsection