<head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="style.css"/>
</head>
<section class="cliente-form">
        <div class="titulo">
            <h3>Novo Tipo de Serviço</h3>
        </div>
        
        <form action="tipo-servico-ation-inserir.php"  method="post">
            <div class="form-group">
                <label for="txtServico">Tipo de Serviço:</label>
                <input type="string" class="form-control" id="txtServico" name="tiposervico" placeholder="Digite o Tipo de Serviço"  autofocus required>
            </div>
            <div class="btn-cadastrarr">
                <button type="submit"  class="btn btn-success" name="btnCadastrar">Cadastrar</button>
            </div>
            
            
        </form> 
    </section>