<?php

    require_once 'Model/Conta_usuario.php';
    $objFunc = new Conta_user();

?>

<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/Cadastro.css">
    </head>
    <body>

        <a href="TelaUsuario.php"> 
        <img id="voltar" src="Imagens/seta.png">
        </a>

        <div id="cadastro">Cadastro:</div>

        <form action="control/ctr1_user.php" method="POST">
            <input type="hidden" name="insert">
                <div class="esquerda">
                    <div id="space"></div>
                        <div id="nome">
                            <label for="">Nome</label>
                        </div>
                        <input id="in" type="text" name="txtNome" required size="40"/> 
                    <div id="space"></div>
                        <div>
                            <label id="login" for="">Login</label>
                        </div>    
                        <input id="il" type="text" name="txtLogin" required size="40"/> 
                    <div id="space"></div>
                        <div>
                            <label id="telefone" for="">Telefone</label>
                        </div>
                        <input id="it" type="text" name="txtNumero_celular" required size="40"/> 
                    <div id="space"></div>
                        <div>
                            <label id="endereco" for="">Endereço</label>
                        </div>
                        <input id="ie" type="text" name="txtEndereco" required size="40"/> 
                    <div id="space"></div>
                        <div>
                            <label id="bairro" for="">Bairro</label>
                        </div>
                        <input id="ib" type="text" name="txtBairro" required size="40"/> 
                </div>

                <div class="direita">
                    <div id="space"></div>
                        <div>
                            <label id="sobrenome" for="">Sobrenome</label>
                        </div>
                    <input id="is" type="text" name="txtSobrenome" required size="40"/> 
                    <div id="space"></div>
                        <div>
                            <label id="senha" for="">Senha</label>
                        </div>    
                    <input id="ise" type="password" name="txtSenha" required size="40"/> 
                    <div id="space"></div>
                        <div>
                            <label id="email" for="">E-mail</label>
                        </div>
                    <input id="iem" type="text" name="txtEmail" required size="40"/> 
                    <div id="space"></div>
                        <div>
                            <label id="cep" for="">CEP</label>
                        </div>
                    <input id="ic" type="text" name="txtCep" required size="40"/> 
                    <div id="space"></div>
                        <div>
                            <label id="complemento" for="">Complemento</label>
                        </div>
                    <input id="ico" type="text" name="txtComplemento" required size="40"/>
                </div>
            
                <div id="termo">Ao continuar você concorda com nossa politica de privacidade.</div>
            <a href="#"></a><button type="submit" class="btn btn-sucess" id="confirmarCadastro">Confirmar cadastro</button>
        </form>
    </body>
</html>