<form class="col s12" id="form_mes">
    <div class="row">
        <div class="input-field col s6">
            <input id="mes" name="mes" type="text" >
            <label for="id">Ano-Mês</label>
        </div>
    </div>
    <div class="row">
        <button type="button" class="btn waves-effect waves-light" id="pesq_mes">
            Pesquisar
            <i class="material-icons right">send</i>
        </button>
    </div>
</form>
<div id="div_mes">
    
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $( "#pesq_mes").click(function() {
            $.ajax({
                url: 'form_mes.php',
                method: 'post',
                data: $('#form_mes').serialize(),
                success: function(data){

                    $('#div_mes').html(data);
                }
            });
        });
        $('select').formSelect();
    });
</script>