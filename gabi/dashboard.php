<?php
require_once('cabecalho.php');
require_once('conexao.php');
require_once('banco-servico.php');
require_once('banco-tipo-servico.php');
$date1= $_POST['date1'];
$date2= $_POST['date2'];
$datehoje= date('Y-m-d');
$date30days = (new DateTime($datehoje))->sub(new DateInterval('P30D'))->format('Y-m-d');
$servicos=listarServicosDate($conexao,$date30days,$datehoje);
$title='Serviços dos últimos 30 Dias';
if($date1 || $date2 !=null){
    $title="Serviços entre $date1 e $date2";
    $servicos = listarServicosDate($conexao,$date1,$date2);
}

    



$dados_grafico = array(); // Inicialize um array para armazenar os dados do gráfico

// Contador para contar a quantidade de cada tipo de serviço
$contador_servicos = array();

foreach ($servicos as $servico) {
    $tiposervicos = buscarTipoServico($conexao, $servico['Id_TipoServico']);
    $tipo_servico = $tiposervicos['TipoServico'];

    // Incrementar o contador do tipo de serviço
    if (isset($contador_servicos[$tipo_servico])) {
        $contador_servicos[$tipo_servico]++;
    } else {
        $contador_servicos[$tipo_servico] = 1;
    }
}

// Construir os dados do gráfico
foreach ($contador_servicos as $tipo_servico => $quantidade) {
    $dados_grafico[] = array($tipo_servico, $quantidade);
}

?>
<!doctype html>
<html>
<head>
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {packages: ["corechart"]});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Serviço', 'Quantidade'], // Defina os cabeçalhos das colunas
                <?php
                foreach ($dados_grafico as $dados):
                    ?>
                    ['<?= $dados[0] ?>', <?= $dados[1] ?>], // Exiba os dados do gráfico
                <?php
                endforeach;
                ?>
            ]);

            var options = {
                title: '<?=$title?>',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
        }
    </script>
</head>
<body>
<div id="piechart_3d" style="width: 100%; height: 500px;padding-left: 1px"></div>
</body>
</html>
