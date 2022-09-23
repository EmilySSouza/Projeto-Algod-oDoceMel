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
      <title>Algodão Doce Mel</title>
      <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="CSS/TelaUsuario.css">
      <!-- CSS only -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
   </head>
      <!-- Barra superior-->
      <header>
            <div id="barramarrom" style="background-color: #754316; position: absolute; width: 1310px; height: 400px; top: -10px"></div>
            <img src="Imagens/Logo-Doce-Mel.png" id="logo">
            <div id="separacaoSuperior"></div>
            <a href="TelaUsuario.php" id="home">HOME</a>
            <a href="#pro" id="produtos">PRODUTOS</a>
            <a href="#cont" id="contato">CONTATOS</a>
            <a href="#so" id="sobre">SOBRE</a>

         

         <div class="LS">
            <form action="Control/Ctr_usuario.php" method="POST">
            <input type="hidden" name="validar">
            <div class="form-group">
              <label style="font-size: 30px; color: #F9C903; font-family: alegra;">Login: </label>
              <input type="text" class="form-control" placeholder="Entre com o login" name="txtLogin" style="width: 400px;" required>
            </div>
            <div class="form-group">
              <label for="" style="font-size: 30px; color: #F9C903; font-family: alegra;">Senha: </label>
              <input type="password" class="form-control" placeholder="Entre com a senha" name="txtSenha" style="width: 400px;" required>
            </div>
            <a href="#bg03"><span id="adm">ADM</span></a>
            <a href="#"></a><button type="submit" class="w3-button w3-block w3-dark-grey" id="caixaEntrar">Entrar</button>
         </form>
            <a href="Cadastro.php">
               <button id="caixaCadastrar">Cadastre-se</button>
            </a>
         </div>


               <div id="demo" class="carousel slide" data-ride="carousel" style="position: absolute; top: 430px; left: 460px">

               <!-- Indicators -->
               <ul class="carousel-indicators">
                  <li data-target="#demo" data-slide-to="0" class="active"></li>
                  <li data-target="#demo" data-slide-to="1"></li>
                  <li data-target="#demo" data-slide-to="2"></li>
               </ul>
               
               <!-- The slideshow -->
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <img src="Imagens/Algodao1.png" alt="Algodao1" width="350" height="300">
                  </div>
                  <div class="carousel-item">
                     <img src="Imagens/Algodao2.png" alt="Algodao2" width="350" height="300">
                  </div>
                  <div class="carousel-item">
                     <img src="Imagens/Algodao3.png" alt="Algodao3" width="350" height="300">
                  </div>
                  <div class="carousel-item">
                     <img src="Imagens/Algodao4.jpg" alt="Algodao4" width="350" height="300">
                  </div>
                  <div class="carousel-item">
                     <img src="Imagens/Algodao5.jpg" alt="Algodao5" width="350" height="300">
                  </div>
               </div>
               
               <!-- Left and right controls -->
               <a class="carousel-control-prev" href="#demo" data-slide="prev">
                  <span class="carousel-control-next-icon" style="position: absolute; left: 400px;"></span>
               </a>
               <a class="carousel-control-next" href="#demo" data-slide="next">
                  <span class="carousel-control-prev-icon" style="position: absolute; right: 400px;"></span>
               </a>
         </div>


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

      </header>
      <div class=" linha-central container mt-3">
         <div class="row">
            <div class="col-sm-12">
               <hr>
            </div>
         </div>
      </div>
      <section id="listaProdutos" class="mt-2">
         <h3 style="font-family: alegra; color: #754316" id="pro">Produtos:</h3>
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <ul class="lista">

                     <div id="bg03"></div>
                        <div class="box03" >
                           <a href="">
                              <img id="voltar" src="Imagens/seta.png">
                           </a>
                           <form action="Control/Ctr_adm.php" method="POST">
                           <input type="hidden" name="validar">
                           <div class="form-group">
                           <label style="font-size: 30px; color: #754316; font-family: alegra; margin-left: 200px">Login: </label>
                           <input type="text" class="form-control" placeholder="Entre com o login" name="txtLogin" style="width: 400px; margin-left: 39px" required>
                           </div>
                           <div class="form-group">
                           <label for="" style="font-size: 30px; color: #754316; font-family: alegra; margin-left: 200px">Senha: </label>
                           <input type="password" class="form-control" placeholder="Entre com a senha" name="txtSenha" style="width: 400px; margin-left: 39px" required>
                           <a href="#"></a><button type="submit" class="w3-button w3-block w3-dark-grey" id="EntrarADM">Entrar</button>
                           </div>
                           </form>
                           
                     </div>

                  
                        

                     <!--Aq é no msm lugar onde este código está logo abaixo da primeira div do header-->

         <table id="tabela">
            <thead>
                <tr>
                     <th scope="col" id="prime">ID |</th>
                    <th scope="col">DESCRIÇÃO</th>
                    <th scope="col">VALOR</th>
                    <th scope="col"></th>
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
                        <button class="btn btn-primary" style="background-color: #754316; border: none;"
                        data-toggle="modal" data-target="#myModalVer"
                        data-descricao="<?php echo($objFunc['descricao'])?>"
                        data-preco="<?php echo($objFunc['preco'])?>">VER</button>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

        <!-- The Modal Ver-->
        <div class="modal" id="myModalVer">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header" style="background-color: navy; color: white;">
                        <h4 class="modal-title">ERRO</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form>
                            <input type="hidden" name="validar" id="recipient-codigo">
                                <div class="form-group">
                                    <label for="">Você deve estar logado para realizar esta ação!</label>
                                </div>
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
            $('#myModalVer').on('show.bs.modal', function(event){
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
      </section> 
        <div class=" linha-central container mt-3">
          <div class="row">
             <div class="col-sm-12">
                <hr>
             </div>
          </div>
       </div>
        <section id="contacts">
          <div class="container">
            <div class="row"> 
              <h4 style="font-family: alegra; color: #754316" id="cont">Contato:</h4>
              <br>
              <div class="col-sm-12 text-center social-contacts">
                 <a href="http://www.instagram.com/algodao_docemel/" style="color: black; font-size: 20px;">Instagram: @algodão_docemel</a>
                <h5 style="color: black">Email: algodão_docemell@gmail.com</h5>
                  <br>
                <h5 style="color: black">Telefones para contato:</h5>
                  <img src="Imagens/QrCodeZeny.png" alt="" style="margin-right: 20px">
                  <img src="Imagens/QrCodeNeto.png" alt="" style="margin-right: 20px">
                  <h6 style="position: absolute; left: 476px; top: 3000px">Zenildes</h6>
                  <h6 style="position: absolute; left: 780px; top: 3000px">Rosalvo</h6>
              </div>
            </div>
          </div>
        </section>
        <div class=" linha-central container mt-3">
          <div class="row">
             <div class="col-sm-12">
                <hr>
             </div>
          </div>
       </div>
        <section id="more-info">
          <div class="container">
            <div class="row">
           <h3 style="font-family: alegra; color: #754316" id="so">Sobre:</h3>
           <br>
           <br>
           <div class="col-sm-12 text-center">
             <h5 style="font-family: alegra;">A algodão doce mel começou em Setembro de 2020, com intuito de levar o melhor do algodão doce para os amantes de doce.
               Levamos o nome de “Algodão doce mel” em dedicação a minha pequena filha, que se chama Melissa e seu apelido é Mel.
             </h5>
           </div>
            </div>
          </div>
          <br>
          <br>
          <br>
        </section>
      <!-- JavaScript Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
   </body>
</html>