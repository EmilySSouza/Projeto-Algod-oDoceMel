<?php
    require_once '../Model/Conta_adm.php';
    $objFunc = new conta_adm();
    if(isset($_POST['validar'])){
        $login = $_POST['txtLogin'];
        $senha = $_POST['txtSenha'];

        if($objFunc->validar($login, $senha)){
            $objFunc->redirect('../TelaADM.php');
        }
        else{
            $objFunc->redirect('../TelaUsuario.php');
        }
        
    }
?>