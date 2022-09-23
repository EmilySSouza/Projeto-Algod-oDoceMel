<?php

    require_once 'Model/Vendas.php';
    $objFunc = new Vendas();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Vendas.css">
    <title>Tela de Venda</title>
</head>
<body>
        <div id="barraSuperior">
        <img src="Imagens/Logo-Doce-Mel.png" id="logo">
      <div id="separacaoSuperior"></div>

      
      <?php 
         session_start();
         if(isset($_SESSION['nome'])){
            echo '<span id="nome">Olá '.$_SESSION['nome'].'</span>';
         }
      ?>
      <a href="TelaLogada.php"><button id="caixaSair">Voltar</button></a>

      

      <form action="control/Ctr_vendas.php" method="POST">
            <input type="hidden" name="insert">
                <div class="esquerda" style="position: absolute; top: 35px">
                    <div id="space"></div>
                        <div id="nome">
                            <label id="tamanho" for="" style="position: absolute; top: -100px; right: 870px">Nome</label>
                        </div>
                        <input id="in" type="text" placeholder="Insira o nome do produto" name="txtNome" required size="40"/> 
                    <div id="space"></div>
                        <div>
                            <label id="tamanho" for="">Tamanho</label>
                        </div>    
                        <input id="il" type="text" placeholder="Insira o tamanho do produto" name="txtTamanho" required size="40"/> 
                    <div id="space"></div>
                        <div>
                            <label id="hora" for="">Hora Entrega</label>
                        </div>
                        <input id="it" type="text" placeholder="Ex de formato: 08:50:02" name="txtHoraEntrega" required size="40"/>
                    <div id="space"></div>
                        <div>
                            <label id="nomeusuario" for="">Nome do Usuário</label>
                        </div>
                        <input id="inu" type="text" placeholder="Insira o seu nome" name="txtNomeUsuario" required size="40"/> 
                </div>

                <div class="direita">
                    <div id="space"></div>
                        <div>
                            <label id="quantidade" for="">Quantidade</label>
                        </div>
                    <input id="is" type="text" placeholder="Insira a quantidade" name="txtQuantidade" required size="40"/> 
                    <div id="space"></div>
                        <div>
                            <label id="data" for="">Data de Entrega</label>
                        </div>    
                    <input id="ise" type="text" placeholder="Ex de formato: 2021-12-12" name="txtDataEntrega" required size="40"/> 
                    <div id="space"></div>
                        <div>
                            <label id="local" for="">Local</label>
                        </div>
                    <input id="iem" type="text" placeholder="Insira o local da entrega" name="txtLocal" required size="40"/> 
                </div>
            
                <br>
                <br>
                <br>
                <br>

                <div id="termo">Ao continuar você concorda com nossa politica de privacidade.</div>
            <a href="#"></a><button type="submit" class="btn btn-sucess" id="confirmarCadastro" style="margin-top: 70px">Confirmar pedido</button>
        </form>   
    
</body>
</html>