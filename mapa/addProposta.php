<form class="col s12" action="action/salvar.php" method="post">
    <div class="row">
        <div class="input-field col s6">
            <input id="Cliente" name="Cliente" type="text" class="validate">
            <label for="Cliente">Cliente</label>
        </div>
        <div class="input-field col s6">
            <input id="Data" name="Data" type="date" class="validate">
            <label for="Data">Data de envio</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
            <input id="Objeto" name="Objeto" type="text" class="validate">
            <label for="Objeto">Objeto</label>
        </div>
        <div class="input-field col s6">
            <select name="analise" id="analise">
                <option value="" disabled selected>Escolha uma análise</option>
                <option value="1">Ok</option>
                <option value="2">Não ok</option>
            </select>
            <label>Análise Crítica</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
            <input id="SFO" name="SFO" type="text" class="validate">
            <label for="SFO">OS</label>
        </div>
        <div class="input-field col s6">
            <input id="Proposta" name="Proposta" type="text" class="validate">
            <label for="Proposta">Proposta</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
            <input id="Valor" name="Valor" type="text" class="validate" onkeyup="Formata(this,20,event,2)">
            <label for="Valor">Valor Gamatel</label>
        </div>
        <div class="input-field col s6">
            <select name="Status">
                <option value="" disabled selected>Escolha um Status</option>
                <option value="1">Aceita</option>
                <option value="2">Cancelada</option>
                <option value="3">Enviada</option>
                <option value="4">Rejeitada</option>
                <option value="5">Declinada</option>
            </select>
            <label>Status Proposta</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <i class="material-icons prefix">mode_edit</i>
            <textarea id="obs" name="obs" class="materialize-textarea"></textarea>
            <label for="obs">Observações</label>
        </div>
    </div>
    <button class="btn waves-effect waves-light" type="submit" name="action">Salvar
        <i class="material-icons right">send</i>
    </button>
</form>
<script type="text/javascript">
    $('select').formSelect();
    M.updateTextFields();
</script>