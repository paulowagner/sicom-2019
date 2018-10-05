<?php 
    require('../model/mysql.php');
    require('../php_func.php');
    date_default_timezone_set('UTC');
    $meses = [1,2,3,4,5,6,7,8,9,10,11,12];
    $meses_nomes = ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'];
    $ano = date("Y",mktime (0, 0, 0, date("m"), date("d"),  date("Y")-1));
    $BDO = new MySqlModel();
    $matriz[0] = ['Mês','Total','Declinada','Aceita','Enviada','Rejeitada','Cancelada'];
    $matriz_v[0] = ['Mês','Total','Declinada','Aceita','Enviada','Rejeitada','Cancelada'];
    $matriz_v_p[0] = ['Mês','Declinada','Aceita','Enviada','Rejeitada','Cancelada'];
    for ($i=0,$j=11; $j >= 0 ; $j--,$i++) { 
        $mes = date("m",mktime (0, 0, 0, date("m")-$j, date("d"),  date("Y")));
        $mes_n = date("M",mktime (0, 0, 0, date("m")-$j, date("d"),  date("Y")));
        if($mes_n=="Jan")
            $ano = date("Y");
        $meses[$i] = $mes_n;
        $Nominal[$i] = $meses_nomes[$mes-1];
        $data = $ano."-".$mes."-01";
        $mes_total[$i] = $BDO->op("COUNT","id","registro",$data,NULL);
        $mes_declinada[$i] = $BDO->op("COUNT","id","registro",$data,"status = 5");
        $mes_aceita[$i] = $BDO->op("COUNT","id","registro",$data,"status = 1");
        $mes_enviado[$i] = $BDO->op("COUNT","id","registro",$data,"status = 3");
        $mes_rejeitou[$i] = $BDO->op("COUNT","id","registro",$data,"status = 4");
        $mes_cancelada[$i] = $BDO->op("COUNT","id","registro",$data,"status = 2");
        $sql = "SELECT * FROM registro WHERE MONTH(data) =  MONTH('".$data."') and YEAR(data) =  YEAR('".$data."') ORDER BY data ASC";
        $registros = $BDO->buscar1($sql);
        $registros_meses[$i] = $registros;
    }
?>
<style type="text/css">
    .chart {
        width: 100%; 
        min-height: 450px;
    }
    .row {
      margin:0 !important;
    }
    .tabs2 .tab a {
        color: rgba(238,110,115,0.7);
        width: 100%;
        height: 100%;
        padding: 0 24px;
        text-overflow: ellipsis;
        overflow: hidden;
        -webkit-transition: color .28s ease, background-color .28s ease;
        transition: color .28s ease, background-color .28s ease;
    }
</style> 
<div class="row">
    <div class="col s12 teste">
        <ul class="tabs" id="tabMes">
            <?php
            for ($i=11; $i >= 0 ; $i--) { 
                 echo '<li class="tab col s1"><a href="#'.$meses[$i].'">'.$Nominal[$i].'</a></li>';
             } 
            ?>
        </ul>
    </div>
    <?php
        for ($i=11; $i >= 0 ; $i--) { 
            echo '<div id="'.$meses[$i].'" class="col s12">';
            echo '<div class="col-md-12">
            		<table class="highlight responsive-table" id="table_pro'.$meses[$i].'">
                		<thead>
                    		<tr>
	                            <th onclick="'."sortTable(0,1,'table_pro".$meses[$i]."')".'">ID</th>
	                            <th onclick="'."sortTable(1,0,'table_pro".$meses[$i]."')".'">Cliente</th>
	                            <th onclick="'."sortTable(2,0,'table_pro".$meses[$i]."')".'">Data de envio</th>
	                            <th onclick="'."sortTable(3,0,'table_pro".$meses[$i]."')".'">Objeto</th>
	                            <th onclick="'."sortTable(4,0,'table_pro".$meses[$i]."')".'">Análise Crítica</th>
	                            <th onclick="'."sortTable(5,0,'table_pro".$meses[$i]."')".'">OS</th>
	                            <th onclick="'."sortTable(6,0,'table_pro".$meses[$i]."')".'">Proposta</th>
	                            <th onclick="'."sortTable(7,2,'table_pro".$meses[$i]."')".'">Valor Gamatel</th>
	                            <th onclick="'."sortTable(8,0,'table_pro".$meses[$i]."')".'">Status</th>
	                            <th onclick="'."sortTable(9,0,'table_pro".$meses[$i]."')".'">Observações</th>
	                            <th>Ação</th>
	                        </tr>
	                    </thead>

                		<tbody>';
                $registros = $registros_meses[$i];
                foreach ($registros as $registro) {
                    if($registro['Status']=='1')
                        $status = 'Aceita';
                    elseif($registro['Status']=='2')
                        $status = 'Cancelada';
                    elseif($registro['Status']=='3')
                        $status = 'Enviada';
                    elseif($registro['Status']=='4')
                        $status = 'Rejeitada';
                    else
                        $status = 'Declinada';
                    if ($registro['analise']==1) 
                        $analise = "OK";
                    else
                        $analise = "Não OK";
                    echo 	'<tr>
		                        <td>'.$registro['id'].'</td>
		                        <td>'.$registro['Cliente'].'</td>
		                        <td>'.$registro['data'].'</td>
		                        <td>'.$registro['objeto'].'</td>
		                        <td>'.$analise.'</td>
		                        <td>'.$registro['SFO'].'</td>
		                        <td>'.$registro['proposta'].'</td>
		                        <td> R$ '.Form(Lim($registro['Valor'])).'</td>
		                        <td>'.$status.'</td>
		                        <td>'.$registro['obs'].'</td>
		                        <td><a class="edita_mapa" id="'.$registro["id"].'"><i class="material-icons">edit</i></a></td>
                			</tr>';
                }
                echo '</tbody>

                	</table>
            	</div> 
                <div class="row" id="dashboard_div'.$i.'">
                    <div class="col s6" >
                        <div id="myChartDonut'.$i.'" class="chart"></div>
                    </div>
                </div>
            </div>';
         } 
    ?>
</div>
<script type="text/javascript">
    M.updateTextFields();
    var i;
    var mes_enviado = <?php echo json_encode($mes_enviado);?>;
    var mes_aceita = <?php echo json_encode($mes_aceita);?>;
    var mes_rejeitou = <?php echo json_encode($mes_rejeitou);?>;
    var mes_cancelada = <?php echo json_encode($mes_cancelada);?>;
    var mes_declinada = <?php echo json_encode($mes_declinada);?>;
    google.charts.load("current", {packages:["corechart",'controls']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        var i;
        for(i=0;i<12;i++){
            var ElementId = 'myChartDonut'+i;
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Status');
            data.addColumn('number', 'Numero');
            data.addRows([
              ['Aceita',     parseInt(mes_aceita[i])],
              ['Rejeitada',  parseInt(mes_rejeitou[i])],
              ['Cancelada',  parseInt(mes_cancelada[i])],
              ['Enviada', parseInt(mes_enviado[i])],
              ['Declinada',    parseInt(mes_declinada[i])]
            ]);
            var options = {
                title: 'Propostas Status'
            };
           
            var chart = new google.visualization.PieChart(document.getElementById(ElementId));
            chart.draw(data, options);
        }
    }
    $(window).resize(function(){
      drawChart();
    });
    $(document).ready(function(){
        $('.tabs').tabs();
        $('.tab').click(drawChart);
        $('.edita_mapa').click(function () {
            $("#id").val(this.id);
            $('#tabCab').tabs('select', "UpdateMap");
            $.ajax({
                url: 'form_update.php',
                method: 'post',
                data: $('#form_id').serialize(),
                success: function(data){

                    $('#form_update').html(data);
                }
            });
        })
        $('select').formSelect();
    });
</script>