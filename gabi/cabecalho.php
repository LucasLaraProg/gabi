<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css"/>
    </head>    
    <body class="inicio" >
    <title>Inicio</title>
    <div class="main-atalhos">
    <div class="titulosistema">
        <a class=" titulologo" href="index.php"><button class="btncliente"type="button"><i class="fas fa-home"> </i> Home</button></a>
    </div>
       <div class="atalhos" id="atalhos">
        
       <a class="hrefcliente" href="clientes-lista.php"><button class="btncliente"type="button"><i class="fas fa-users"></i> Clientes</button></a>
        <!--<button class="btncliente" onclick="openModal('cliente-form.php')" type="button"><i class="fas fa-user"></i> Registrar </button>-->
        <a class="hrefregistros" href="servicos-lista.php"><button class="btncliente"type="button"><i class="fas fa-clipboard-list"></i> Registros</button></a>     
        <a class="hrefdebitos" href="cliente-lista-debitos.php"><button class="btncliente"type="button"><i class="fas fa-dollar-sign"></i> Débitos</button></a>
        <a class="hrefconfig" href="configuracoes.php"><button class="btncliente"type="button"><i class="fas fa-cog"></i> Configuração</button></a>
    </div>
    </div>
    </body>
</html>