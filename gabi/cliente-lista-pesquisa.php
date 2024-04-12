<?php
require_once("cabecalho.php"); 
require_once("banco-cliente.php");
require_once("modal.php");
require_once("mostrar-alerta.php");
require_once("banco-servico.php");
//chama função que lista os clientes do banco de dados e retorna uma array
$clientes = listarClientes($conexao);
$nomeCliente = $_GET['nome'];
$telefone = $_GET['telefone'];
// Construa a consulta SQL
$sql = "SELECT * FROM clientes WHERE 1=1";

if (!empty($nomeCliente)) {
    $sql .= " AND Nome LIKE '%$nomeCliente%'";
}

if (!empty($telefone)) {
    $sql .= " AND Telefone LIKE '%$telefone%'";
}

// Execute a consulta
$result = $conexao->query($sql);

?>
<head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="style.css"/>
</head>
<section class="lista-clientes">
    <div class="clientes-wrapper">
        <div class="filtro">
    <?php require_once("filter.php");?>
    </div>
    <div class="tabela-clientes-wrapper">
        <div class="title-clientes-tabela">
            <h3>Resultados da Busca Por: </h3>
            <h3>Nome: <?php echo($nomeCliente);?></h3>
            <h3>Telefone: <?php echo($telefone);?></h3>
            
        </div>
           
        <?php
mostraAlerta("success");
mostraAlerta("danger");
// Exiba os resultados
?>
        <div class="tabela-clientes">
        
            <table class="table">
            <thead>
                <tr>
                <th class=linhas>Nome do Cliente</th>
                <th class=linhas>Endereço</th>
                <th class=linhas>Telefone</th>
                <th class=linhas>Descrição do Serviço</th>
                <th class="linhas">Link Wpp</th>
                <th class="linhas">Alterações</th>
                <th class="linhas">Exclusão</th>
                </tr>
              
            </thead>
            <tbody>
            <?php
          
                if ($result->num_rows > 0) {
                    while ($cliente = $result->fetch_assoc()) {
                        $servico = buscarServico($conexao, $cliente['Id_Cliente']);
                        ?>
                        <tr>
                            <td class="linhas"><?= $cliente["Nome"] ?></td>
                            <td class="linhas"><?= $cliente['Endereco'] ?></td>
                            <td class="linhas"><?= $cliente['Telefone'] ?></td>
                            <td class="linhas"><?= $servico['Descricao_Servico'] ?></td>
                            <td class="linhas"><a href="https://wa.me/55<?=$cliente['Telefone']?>"target="_blank"><img class="wpp"src="wpp/WhatsAppButtonGreenSmall.svg" /></a></td>
                           <!-- <td class=linhas><a href="https://wa.me/55<?=$cliente['Telefone']?>"target="_blank"><i class="fab fa-whatsapp"></i></a></td> -->
                            <td class="linhas"><a href="#" class="btn btn-info" onclick="openModal('cliente-form-alterar.php?id=<?= $cliente['Id_Cliente'] ?>')"><i class="fas fa-pen"> Alterar</a></td>
                            <td class="linhas"><a href="cliente-action-excluir.php?id=<?= $cliente['Id_Cliente'] ?>" class="btn btn-danger" onclick="return confirm('Confirma exclusão de <?= $row['Nome'] ?>?');"><i class="fas fa-trash"> Excluir </a></td>
                            
                        </tr>
                        <?php
                        
                    }
                } else {
                    echo "Nenhum Cliente encontrado.";
                }
                ?>
            </tbody>
        </table>
    </div>
</section>
