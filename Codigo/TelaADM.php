<?php

    require_once 'model/conta_adm.php';
    $objFunc = new conta_adm();

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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

        <h1 style="color: #754316;">CLIENTES</h1>

        <table id="tabela">
            <thead>
                <tr>
                    <th scope="col" id="prime">ID</th>
                    <th scope="col">NOME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">TELEFONE</th>
                </tr>
            </thead>
            <tbody>


                <?php
                    $query = "select * from conta_user";
                    $stmt = $objFunc->runQuery($query);
                    $stmt->execute();
                    while($objFunc = $stmt->fetch(PDO::FETCH_ASSOC))
                    {
                ?>
                
                <tr>
                    <td><?php echo($objFunc['codigo']) ?></td>
                    <td><?php echo($objFunc['nome']) ?></td>
                    <td><?php echo($objFunc['email']) ?></td>
                    <td><?php echo($objFunc['numero_celular']) ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>


    </body>
</html>