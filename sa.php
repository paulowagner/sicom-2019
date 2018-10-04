<h4 style="text-align: center">SA</h4>
<form class="col s12" action="action/salvar.php" method="post">
    <div class="row">
        <div class="input-field col s3">
            <input id="Tecnico" name="Tecnico" type="text" class="validate">
            <label for="Tecnico">Tecnico</label>
        </div>
        <div class="input-field col s3">
            <input id="Data" name="Data" type="date" class="validate">
            <label for="Data">Data de envio</label>
        </div>
        <div class="input-field col s3">
            <label>
                <input type="checkbox" />
                <span>Autorização</span>
            </label>
        </div>
        <div class="input-field col s3">
            <label>
                <input type="checkbox" />
                <span>Enviado</span>
            </label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
            Lista de Itens
        </div>
    </div>
</form>
<script type="text/javascript">
    $('select').formSelect();
</script>