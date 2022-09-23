<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Algodão Doce Mel</title>
        <link rel="stylesheet" href="CSS/TelaPerfil.css">
    </head>
    <body>
        <!-- Barra superior-->
        <div id="barramarrom" style="background-color: #754316; position: absolute; width: 1310px; height: 400px; top: -10px; left: 0px"></div>
        <img src="Imagens/Logo-Doce-Mel.png" id="logo">
        <div id="separacaoSuperior"></div>
        <a href="TelaLogada.php"><button id="caixaSair">Voltar</button></a>
        
        <h1 style="color: #754316;">Meus Dados</h1>
        <?php
            session_start();
            require_once './Model/Conta_usuario.php';
            $objFunc = new conta_user();
        
            if(isset($_SESSION['codigo'])){
                $find = $objFunc->findById($_SESSION['codigo']);
                echo '<form action="Control/Ctr_usuario.php" method="POST">';
                    echo '<input type="hidden" name="editar">';
                    echo '<input type="hidden" name="codigo" value='.$_SESSION['codigo'].'>';
                     
                        foreach($find as $user){
                
                        echo '<div class="esquerdaaa" style="color: #754316;
                        text-align: left;
                        font-size: 28px;
                        position: absolute;
                        top: 425px;">';
                            echo '<div>';
                                echo '<label id="login" for="">Email*</label>';
                            echo '</div>';
                            echo '<input type="text" name="txtEmail" value='.$user['email'].' required size="40"/>';
                            echo '<div id="space"></div>';
                            echo '<div>';
                    
                            echo '<label id="nome" for="">Nome*</label>';
                            echo '</div>';
                            echo '<input type="text" name="txtNome" value='.$user['nome'].' required size="40"/>';
                            echo '<div id="space"></div>';
                            echo '<div>';
                            echo '<label id="nome" for="">CEP*</label>';
                            echo '</div>';
                            echo '<input type="text" name="txtCep" value='.$user['cep'].' required size="40"/>';
                            echo '<div>';
                            echo '<div id="space"></div>';
                            echo '</div>';
                            echo '</div>';

                            echo '<div class="direitaaa" style="color: #754316; posi
                            text-align: left;
                            font-size: 28px;
                            left: 450px;
                            position: absolute;
                            top: 425px;">';
                            echo '<div>';
                                echo '<label id="sobrenome" for="">Senha*</label>';
                            echo '</div>';
                            echo '<input id="is" type="password" name="txtSenha" value='.$user['senha'].' required size="40"/>'; 
                            echo '<div id="space"></div>';
                            echo '<div>';
                            echo '<label id="sobrenome" for="">Celular*</label>';
                            echo '</div>';
                            echo '<input id="is" type="text" name="txtNumero_celular" value='.$user['numero_celular'].' required size="40"/>'; 
                            echo '<div id="space"></div>';
                            echo '<div>';
                            echo '<label id="senha" for="">Endereço*</label>';
                            echo '</div>';  
                            echo '<input type="text" name="txtEndereco" value='.$user['endereco'].' required size="40"/>';
                        echo '</div>';

                    echo '<a href="#"></a><button type="submit" class="btn btn-sucess" id="salvar">Salvar</button>';
                    echo '<br>';
                    echo '<br>';
                
                }
                echo '</form>';
            }
        ?>
              
    </body>
</html>