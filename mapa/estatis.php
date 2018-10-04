<?php 
    
    function percente($a,$b)
    {
        return (float)number_format(($a/$b)*100,2,'.','');
    }
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
        $matriz[$i+1][0] = $Nominal[$i];
        $matriz[$i+1][1] = (int)$BDO->op("COUNT","id","registro",$data,NULL);
        $matriz[$i+1][2] = (int)$BDO->op("COUNT","id","registro",$data,"status = 5");
        $matriz[$i+1][3] = (int)$BDO->op("COUNT","id","registro",$data,"status = 1");
        $matriz[$i+1][4] = (int)$BDO->op("COUNT","id","registro",$data,"status = 3");
        $matriz[$i+1][5] = (int)$BDO->op("COUNT","id","registro",$data,"status = 4");
        $matriz[$i+1][6] = (int)$BDO->op("COUNT","id","registro",$data,"status = 2");

        $mes_total_valor[$i] = $BDO->op("SUM","valor","registro",$data,null);
        if($mes_total_valor[$i]==0){
            $mes_total_valor_perc[$i] = 0;
            $mes_aceita_valor[$i] = $mes_aceita_valor_perc[$i] = 0;
            $mes_rejeitou_valor[$i] = $mes_rejeitou_valor_perc[$i] = 0;
            $mes_declinada_valor[$i] = $mes_declinada_valor_perc[$i] = 0;
            $mes_cancelada_valor[$i] = $mes_cancelada_valor_perc[$i] = 0;
            $mes_enviado_valor[$i] = $mes_enviado_valor_perc[$i] = 0;
            $matriz_v[$i+1] = ["$Nominal[$i]",0,0,0,0,0,0];
            $matriz_v_p[$i+1] = ["$Nominal[$i]",0,0,0,0,0];
        }else{
            $mes_total_valor_perc[$i] = 100;
            $mes_aceita_valor[$i] = $BDO->op("SUM","valor","registro",$data,"status = 1");
            $mes_aceita_valor_perc[$i] = percente($mes_aceita_valor[$i],$mes_total_valor[$i]);
            $mes_rejeitou_valor[$i] = $BDO->op("SUM","valor","registro",$data,"status = 4");
            $mes_rejeitou_valor_perc[$i] = percente($mes_rejeitou_valor[$i],$mes_total_valor[$i]);
            $mes_declinada_valor[$i] = $BDO->op("SUM","valor","registro",$data,"status = 5");
            $mes_declinada_valor_perc[$i] = percente($mes_declinada_valor[$i],$mes_total_valor[$i]);
            $mes_cancelada_valor[$i] = $BDO->op("SUM","valor","registro",$data,"status = 2");
            $mes_cancelada_valor_perc[$i] = percente($mes_cancelada_valor[$i],$mes_total_valor[$i]);
            $mes_enviado_valor[$i] = $BDO->op("SUM","valor","registro",$data,"status = 3");
            $mes_enviado_valor_perc[$i] = percente($mes_enviado_valor[$i],$mes_total_valor[$i]);
            $matriz_v[$i+1] = ["$Nominal[$i]",$mes_total_valor[$i],$mes_declinada_valor[$i],$mes_aceita_valor[$i],$mes_enviado_valor[$i],$mes_rejeitou_valor[$i],$mes_cancelada_valor[$i]];
            $matriz_v_p[$i+1] = ["$Nominal[$i]",$mes_declinada_valor_perc[$i],$mes_aceita_valor_perc[$i],$mes_enviado_valor_perc[$i],$mes_rejeitou_valor_perc[$i],$mes_cancelada_valor_perc[$i]];
        }

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
    <div class="col s12">
        <div id="myChart2" class="chart">
            
        </div>
    </div>
</div>
<div class="row">
    <div class="col s12">
        <div id="myChart3" class="chart">
            
        </div>
    </div>
</div>
<div class="row">
    <div class="col s12">
        <div id="myChart4" class="chart">
            
        </div>
    </div>
</div>
<script type="text/javascript">
    google.charts.load("current", {packages:["corechart",'controls']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        var options = {
                title: 'Últimos 12 meses quantidade',
                aggregationTarget: 'category',
                focusTarget:'category',
                height: "100%",
                width: "100%",
                seriesType: 'bars',
                hAxis: {title: 'Mês',  titleTextStyle: {color: '#333'}},
                vAxis: {minValue: 0,title: 'Quantidade'}
        };
        var data = new google.visualization.arrayToDataTable(<?php echo json_encode($matriz);?>);
        var chart = new google.visualization.ComboChart(document.getElementById('myChart2'));
        chart.draw(data, options);
        options.vAxis.title = 'Montante (R$)';
        options.title = 'Últimos 12 meses montante';
        var data = new google.visualization.arrayToDataTable(<?php echo json_encode($matriz_v);?>);
        var chart = new google.visualization.ComboChart(document.getElementById('myChart3'));
        chart.draw(data, options);
        options.vAxis.title = 'Montante (%)';
        var data = new google.visualization.arrayToDataTable(<?php echo json_encode($matriz_v_p);?>);
        var chart = new google.visualization.ComboChart(document.getElementById('myChart4'));
        chart.draw(data, options);
    }
    $(window).resize(function(){
      drawChart();
    });
</script>