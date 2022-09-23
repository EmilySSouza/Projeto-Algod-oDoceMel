<?php
//aqui pra o ctr funcionar, exige a referencia ao model
    session_start();
    require_once '../Model/Conta_usuario.php';
    $objFunc = new conta_user();
    //processo de validação
    if(isset($_POST['validar'])){
        $login = $_POST['txtLogin'];
        $senha = $_POST['txtSenha'];

        $obj = $objFunc->validar($login, $senha);
        if($obj!=null){
            $_SESSION['nome'] = $obj['nome'];
            $_SESSION['codigo'] = $obj['codigo'];
            $objFunc->redirect('../TelaLogada.php');
        }
        else{
            $objFunc->redirect('../TelaUsuario.php');
        }
    }
    //processo de inserção
    if(isset($_POST['insert'])){
        $nome = $_POST['txtNome'];
        $login = $_POST['txtLogin'];
        $numero_celular = $_POST['txtNumero_celular']; 
        $endereco = $_POST['txtEndereco'];
        $bairro = $_POST['txtBairro'];
        $sobrenome = $_POST['txtSobrenome'];
        $senha = $_POST['txtSenha'];
        $email = $_POST['txtEmail'];
        $cep = $_POST['txtCep'];
        $complemento = $_POST['txtComplemento'];
        if($objFunc->inserir($nome, $login, $numero_celular, $endereco, $bairro, $sobrenome, $senha, $email, $cep, $complemento)){
            $objFunc->redirect('../TelaLogada.php');
        }
    }

    if(isset($_POST['editar'])){
        
        $codigo = $_POST['codigo'];
        $nome = $_POST['txtNome'];
        $email = $_POST['txtEmail'];
        $numero_celular = $_POST['txtNumero_celular'];
        $cep = $_POST['txtCep'];
        $endereco = $_POST['txtEndereco'];
        $senha = $_POST['txtSenha'];
        
        if($objFunc->editar($codigo,$nome,$email,$numero_celular,$cep,$endereco, $senha)>0){
            $objFunc->redirect('../PerfilUsuario.php');
        }
    }
?>