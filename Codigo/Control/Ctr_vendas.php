<?php
    //aqui pra o ctr funcionar, exige a referencia ao model
    require_once '../Model/Vendas.php';
    $objFunc = new Vendas();
    //processo de inserção
    if(isset($_POST['insert'])){
        $nome = $_POST['txtNome'];
        $tamanho = $_POST['txtTamanho'];
        $horaentrega = $_POST['txtHoraEntrega'];
        $dataentrega = $_POST['txtDataEntrega'];
        $local = $_POST['txtLocal'];
        $quantidade = $_POST['txtQuantidade'];
        $nomeusuario = $_POST['txtNomeUsuario'];
        if($objFunc->inserir($nome, $tamanho, $horaentrega, $dataentrega, $local, $quantidade, $nomeusuario)){
            $objFunc->redirect('../TelaPedidos.php');
        }
    }
?>