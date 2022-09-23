<?php

    require_once 'Model/Produtos.php';
    $objFunc = new produtos();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <title>Algodão Doce Mel</title>
        <link rel="stylesheet" href="CSS/TelaADM.css">
    </head>
    <body>
        <!-- Barra superior-->
        <div id="barramarrom" style="background-color: #754316; position: absolute; width: 1326px; height: 400px; top: -10px; left: -2px"></div>
        <img src="Imagens/Logo-Doce-Mel.png" id="logo">
        <a href="TelaADM.php" id="clientes">CLIENTES</a>
        <a href="Produtos.php" id="produtos">PRODUTOS</a>
        <a href="Vendas.php" id="vendas">VENDAS</a>
        <a href="Agenda.php" id="agenda">AGENDA</a>
        <div id="separacaoSuperior"></div>
        <a href="TelaUsuario.php"><button id="caixaSair">SAIR</button></a>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h1 style="color: #754316;">VENDAS</h1>

        <table id="tabela">
            <thead>
                <tr>
                    <th scope="col" id="prime">ID</th>
                    <th scope="col">NOME</th>
                    <th scope="col" id="prime">TAMANHO</th>
                    <th scope="col" id="prime">QUANTIDADE</th>
                    <th scope="col" id="prime">DATA DA ENTREGA</th>
                    <th scope="col" id="prime">HORA DA ENTREGA</th>
                    <th scope="col">LOCAL</th>
                    <th scope="col">NOME DO CLIENTE</th>
                </tr>
            </thead>
            <tbody>


                <?php
                    $query = "select * from tb_vendas2";
                    $stmt = $objFunc->runQuery($query);
                    $stmt->execute();
                    while($objFunc = $stmt->fetch(PDO::FETCH_ASSOC))
                    {
                ?>
                
                <tr>
                    <td><?php echo($objFunc['codigo_vendas']) ?></td>
                    <td><?php echo($objFunc['nome']) ?></td>
                    <td><?php echo($objFunc['tamanho']) ?></td>
                    <td><?php echo($objFunc['quantidade']) ?></td>
                    <td><?php echo($objFunc['dataentrega']) ?></td>
                    <td><?php echo($objFunc['horaentrega']) ?></td>
                    <td><?php echo($objFunc['local']) ?></td>
                    <td><?php echo($objFunc['nomeusuario']) ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
                </body>
</html>