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
        <h1 style="color: #754316;">PRODUTOS</h1>

        <!--Aq é no msm lugar onde este código está logo abaixo da primeira div do header-->
      <section id="listaProdutos" class="mt-2">

        <table id="tabela">
            <thead>
                <tr>
                    <th colspan="6">
                        <button type="button" class="btn btn-primary" style="background-color: #754316; border: none" data-toggle="modal" data-target="#myModalAdicionarProdutos">ADICIONAR</button>
                    </th>
                </tr>
                <tr>
                    <th  scope="col" id="prime">ID</th>
                    <th scope="col">DESCRIÇÃO</th>
                    <th scope="col">VALOR</th>
                    <th scope="col">EDITAR</th>
                    <th scope="col">DELETAR</th>
                </tr>
            </thead>
            <tbody>


                <?php
                    $query = "select * from tb_produtos";
                    $stmt = $objFunc->runQuery($query);
                    $stmt->execute();
                    while($objFunc = $stmt->fetch(PDO::FETCH_ASSOC))
                    {
                ?>
                
                <tr>
                    <td><?php echo($objFunc['codigo']) ?></td>
                    <td><?php echo($objFunc['descricao']) ?></td>
                    <td><?php echo($objFunc['preco']) ?></td>
                    
                    
                    <td>
                        <button class="btn btn-primary" 
                        data-toggle="modal" data-target="#myModalEditarProdutos"
                        data-codigo="<?php echo($objFunc['codigo'])?>"
                        data-descricao="<?php echo($objFunc['descricao'])?>"
                        data-preco="<?php echo($objFunc['preco'])?>"
                        data-nome="<?php echo($objFunc['nome'])?>">Editar</button>
                    </td>
                    <td>
                        <button class="btn btn-danger" 
                        data-toggle="modal" data-target="#myModalDeletarProdutos"
                        data-codigo="<?php echo($objFunc['codigo'])?>"
                        data-nome="<?php echo($objFunc['nome'])?>">Deletar</button>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

        <!-- The Modal Adicionar -->
        <div class="modal" id="myModalAdicionarProdutos">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header" style="background-color: #754316; color: #F9C903;">
                        <h4 class="modal-title">Adicionar Produto</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="Control/Ctr_produtos.php" method="POST">
                            <input type="hidden" name="insert">
                                <div class="form-group">
                                    <label for="">Nome</label>
                                    <input type="text" class="form-control" name="txtNome" require>
                                </div>
                                <div class="form-group">
                                    <label for="">Descrição</label>
                                    <input type="text" class="form-control" name="txtDescricao" require>
                                </div>
                                <div class="form-group">
                                    <label for="">Preço</label>
                                    <input type="text" class="form-control" name="txtPreco" require>
                                </div>
                            <button type="submit" class="btn btn-sucess" style="background-color: green; color: white;">ADICIONAR</button>
                        </form>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">VOLTAR</button>
                    </div>
                </div>
            </div>
        </div>                                 

        <!-- The Modal Editar-->
        <div class="modal" id="myModalEditarProdutos">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header" style="background-color: navy; color: white;">
                        <h4 class="modal-title">Editar Produto</h4>
                        <button type="button" class="close" data-dismiss="modal" style="color:white">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="control/ctr_produtos.php" method="POST">
                            <input type="hidden" name="editar" id="recipient-codigo">
                            <div class="form-group">
                                    <label for="">Descrição</label>
                                    <input type="text" class="form-control" name="txtDescricao" id="recipient-descricao" require>
                                </div>
                                <div class="form-group">
                                        <label for="">Valor</label>
                                        <input type="text" class="form-control" name="txtPreco" id="recipient-preco" require>
                                </div>
                            <button type="submit" class="btn btn-sucess" style="background-color: green; color: white;">EDITAR</button>
                        </form>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">VOLTAR</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- The Modal Deletar-->
        <div class="modal" id="myModalDeletarProdutos">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header" style="background-color: navy; color: white;">
                        <h4 class="modal-title">Deletar Produto</h4>
                        <button type="button" class="close" data-dismiss="modal" style="color:white">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="control/ctr_produtos.php" method="POST">
                            <input type="hidden" name="deletar" id="recipient-codigo">
                                <div class="form-group">
                                    <label for="">Nome</label>
                                    <input type="text" class="form-control" name="txtNome" id="recipient-nome" readonly>
                                </div>
                            <button type="submit" class="btn btn-sucess" style="background-color: green; color: white;">DELETAR</button>
                        </form>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">VOLTAR</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $('#myModalAdicionarProdutos').on('show.bs.modal', function(event){
                var button= $(event.relatedTarget)
                var recipientCodigo = button.data('codigo') 
                var recipientDescricao = button.data('descricao')
                var recipientPreco = button.data('preco')
                var recipientNome = button.data('nome')
           
                var modal= $(this)
                modal.find('#recipient-codigo').val(recipientCodigo)
                modal.find('#recipient-descricao').val(recipientDescricao)
                modal.find('#recipient-preco').val(recipientPreco)
                modal.find('#recipient-nome').val(recipientNome)
            })
        </script>

        <script>
            $('#myModalEditarProdutos').on('show.bs.modal', function(event){
                var button= $(event.relatedTarget)
                var recipientCodigo = button.data('codigo') 
                var recipientDescricao = button.data('descricao')
                var recipientPreco = button.data('preco')
                var recipientNome = button.data('nome')
           
                var modal= $(this)
                modal.find('#recipient-codigo').val(recipientCodigo)
                modal.find('#recipient-descricao').val(recipientDescricao)
                modal.find('#recipient-preco').val(recipientPreco)
                modal.find('#recipient-nome').val(recipientNome)
            })
        </script>

        <script>
            $('#myModalDeletarProdutos').on('show.bs.modal', function(event){
                var button= $(event.relatedTarget)
                var recipientCodigo = button.data('codigo')
                var recipientNome = button.data('nome')

                var modal= $(this)
                modal.find('#recipient-codigo').val(recipientCodigo)
                modal.find('#recipient-nome').val(recipientNome)
            })
        </script>
    </body>
</html>