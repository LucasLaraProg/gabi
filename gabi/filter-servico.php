<?php
require_once("conexao.php")
?>
<head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css"/>
</head>
<div class="filtro-servico">
    <form action="dashboard.php" method="POST">
        <h3 class="titlefiltro">Buscar Serviços Por Data:</h3>
        <br>*Se nenhuma data selecionada, buscará os últimos 30 dias*<br>
        <label>
            <input type='date' name="date1">
        </label>
        <p>
        <label>
            <input type='date' name="date2">
        </label>
        <p>
    <label>
        <button class="btn btn-submit"><i class="fas fa-filter"></i> Filtrar </button>
        
    </label>
    </form>
</div>

  
