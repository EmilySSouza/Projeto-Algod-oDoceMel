<?php
session_start();
require_once '../Model/Pedidos.php';
$objFunc = new tb_vendas2();

if(isset($_POST['listarPedido'])){
    $id_user = $_POST['id_user'];
    $quantidade = $_POST['txtQuantidade'];
    $tamanho = $_POST['txtTamanho'];
    $nome = $_POST['txtNome'];
    $dataentrega = $_POST['txtDataentrega'];
    $horaentrega = $_POST['txtHoraentrega'];
    $local = $_POST['txtLocal'];
    $nomeusuario = $_POST['txtNomeusuario'];

    if($objFunc->listarPedido($codigo_vendas, $quantidade, $tamanho, $dataentrega, $horaentrega, $local, $nomeusuario)>0){
        $objFunc->redirect('../TelaPedidos.php');
    }
}

?>