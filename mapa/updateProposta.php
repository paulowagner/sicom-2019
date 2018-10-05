<form class="col s12" id="form_id">
    <div class="row">
        <div class="input-field col s6">
            <input id="id" name="id" type="text" class="validate">
            <label for="id">Id</label>
        </div>
    </div>
    <div class="row">
        <button type="button" class="btn waves-effect waves-light" id="update">
            Pesquisar
            <i class="material-icons right">send</i>
        </button>
    </div>
</form>
<div id="form_update">
    
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('.tabs').tabs();
        $('.tab').click(drawChart);

        $( "#update" ).click(function() {
            $.ajax({
                url: 'form_update.php',
                method: 'post',
                data: $('#form_id').serialize(),
                success: function(data){

                    $('#form_update').html(data);
                }
            });
        });
        $('select').formSelect();
        M.updateTextFields();
    });
</script>