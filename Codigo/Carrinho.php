<?php

    require_once 'model/carrinho.php';
    $objFunc = new Carrinho();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
    <link rel="stylesheet" href="CSS/Carrinho.css">
</head>
<body>
    <div id="barraSuperior"></div>
    <img src="Imagens/Logo-Doce-Mel.png" id="logo">
    <a href="TelaUsuario.html" id="home">HOME</a>
    <a href="#" id="produtos">PRODUTOS</a>
    <a href="#" id="contato">CONTATOS</a>
    <a href="#" id="sobre">SOBRE</a>
    <div id="separacaoSuperior"></div>
    <a href="TelaUsuario.html"><button id="caixaSair">VOLTAR</button></a>

    <h1 style="color: #754316;">CARRINHO</h1>

    <table id="tabela">
        <thead>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col">DESCRIÇÃO</th>
            <th scope="col">QUANTIDADE</th>
            <th scope="col">VALOR</th>
            <th scope="col">PAGAMENTO</th>
        </thead>
        <tbody>
            <script>
                function create_pedido(){
                    $.post('./control/ctr_pedido.php',{create:true}, function(data){
                        console.log(data);
                    });
                }
            </script>
            <?php
                $query = "select * from vendas";
                $stmt = $objFunc->runQuery($query);
                $stmt->execute();
                while($objFunc = $stmt->fetch(PDO::FETCH_ASSOC))
                {
            ?>
            <tr>
                <td><?php echo($objFunc['codigo']) ?></td>
                <td><?php echo($objFunc['codigo_produtos']) ?></td>
                <td><?php echo($objFunc['codigo_produtos']) ?></td>
                <td><?php echo($objFunc['quantidade']) ?></td>
                <td><?php echo($objFunc['valor']) ?></td>
                <td>
                    <a href="https://www.mercadopago.com.br/checkout/v1/redirect?pref_id=586367083-47f992c0-be67-439b-983f-e43bab191116"><button class="btn btn-primary" onclick="create_pedido();">PAGAR</button></a>
                    <!-- data-toggle="modal" data-target="#myModalPagar"
                    data-codigo="<?php echo($objFunc['codigo'])?>"
                    data-nome="<?php echo($objFunc['nome'])?>"
                    data-descricao="<?php echo($objFunc['descricao'])?>"
                    data-preco="<?php echo($objFunc['preco'])?>"-->
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <script>
        function process(quant){
            var value = parseInt(document.getElementById("quant").value);
            value+=quant;
            if(value < 0){
            document.getElementById("quant").value = 0;
            }else{
            document.getElementById("quant").value = value;
            }
        }
    </script>
</body>
</html>