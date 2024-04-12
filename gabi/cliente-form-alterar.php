<?php
require_once('banco-cliente.php');
$id = $_GET['id'];
$cliente = buscarCliente($conexao, $id);
?>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css"/>
        <script type="text/javascript" src="script.js"></script>
</head>
<section class="cliente-form">
        <div>
            <h3>Alterar Cliente</h3>
        </div>
        
        <form action="cliente-action-alterar.php" method="post">
        <input type="hidden" id="txtId" name="id" value="<?=$cliente['Id_Cliente'] ?>">
        
            <div class="form-group">
                <label for="txtnome">Nome do Cliente:</label>
                <input type="text" class="form-control" id="txtnome" name="nome"placeholder="Digite o Nome do Cliente" autofocus required value="<?=$cliente['Nome'] ?>">
            </div>
            <div clas="form-group">
                <label for="txtendereco">Endereço do Cliente:</label>
                <input type="string" class="form-control" id="txtendereco" name="endereco" placeholder="Digite o Endereço"  autofocus required value="<?=$cliente['Endereco'] ?>">
            </div>
            <div clas="form-group">
                <label for="txttelefone">Telefone:</label>
                <input type="number" class="form-control" id="txttelefone" name="telefone" placeholder="Digite o telefone"  autofocus required value="<?=$cliente['Telefone'] ?>">
            </div>
            <button type="submit" class="btn btn-success" name="btnCadastrar"onclick="return confirm('Confirma a Alteração do Cliente: <?= $cliente['Nome'] ?>?')">Alterar</button>
        </form> 
    </section>
    