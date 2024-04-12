<?php 
require_once("banco-cliente.php");
require_once("cabecalho.php");
require_once("modal.php");
require_once("mostrar-alerta.php");
require_once("banco-servico.php");
//chama função que lista os registros do banco de servicos e retorna uma array
$servicos = listarServicos($conexao);
?>
        <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css"/>
        </head>
    <section class="lista-clientes">
    <div class="clientes-wrapper">
        <div class="filtro">
    <?php require_once("filter.php");?>
    </div>
    <div class="tabela-clientes-wrapper">
        <div class="title-clientes-tabela">
</body>
            <h3>Clientes em débito</h3>
        </div>
               
           
        <?php
mostraAlerta("success");
mostraAlerta("danger");
?>
        <div class="tabela-clientes">
        
            <table class="table">
            <thead>
<tr>
<th class=linhas>Nome do Cliente</th>
<th class=linhas>Débito</th>
<th class=linhas>Telefone</th>
<th class=linhas>Descrição do Serviço</th>
<th class="linhas">Link Wpp</th>
<th class="linhas">Alterações</th>
<th class="linhas">Exclusão</th>
</tr>
</thead>
<tbody>

<?php
//ler todos os registros do array servicos e colocar na tabela
foreach ($servicos as $servico) {
    if($servico['Debitos']!=null){
        $cliente = buscarCliente($conexao, $servico['Id_Cliente']);

        ?>
<tr>
<td class=linhas><?=$cliente["Nome"]?></td>
<td class=linhas><?= $servico['Debitos'] ?></td>
<td class=linhas><?=$cliente["Telefone"]?></td>
<td class=linhas><?= $servico['Descricao_Servico'] ?></td>
<td class="linhas"><a href="https://wa.me/55<?=$cliente['Telefone']?>?text=Olá tudo bem? Estamos enviando essa mensagem pra você verificar seus débitos. Caso não tiver, desconsidere essa mensagem. Gabi Braids/ Borges Cabelos e Barbas agradece!!"target="_blank"><img class="wpp"src="wpp/WhatsAppButtonGreenSmall.svg" /></a></td>
<!-- <td class=linhas><a href="https://wa.me/55<?=$cliente['Telefone']?>"target="_blank"><i class="fab fa-whatsapp"></i></a></td> -->
<td class="linhas"><a href="#" class="btn btn-success" onclick="openModal('cliente-form-alterar.php?id=<?= $cliente['Id_Cliente'] ?>')"><i class="fas fa-pen"> Alterar</a></td>
<td class=linhas><a href="cliente-action-excluir.php?id=<?= $cliente['Id_Cliente'] ?>" class="btn btn-danger" onclick="return confirm('Confirma exclusão de <?= $cliente['Nome'] ?>?');"><i class="fas fa-trash"> Excluir</a></td>     
</td>
</tr>
</div>
<?php }};?>
</tbody>
</table>
<?php if(sizeof($servicos) > 0): ?>
<?php else: 

echo('Nenhum Registro cadastrado.');

    ?>

<?php endif ?>


    </div>
    </section>