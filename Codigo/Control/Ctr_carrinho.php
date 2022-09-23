<?php
    require_once '../Model/carrinho.php';
    $objFunc = new Carrinho();

    if(isset($_POST['insert']))
    {
        $quantidade = $_POST['txtQuantidade'];
        if($objFunc->inserir($quantidade))
        {
            $objFunc->redirect('../Carrinho.php');
        }
    }

    if(isset($_POST['editar']))
    {
        $codigo = $_POST['editar'];
        $quantidade = $_POST['txtQuantidade'];

        if($objFunc->editar($quantidade, $codigo))
        {
            $objFunc->redirect('../Carrinho.php');
        }
    }

    if(isset($_POST['deletar']))
    {
        $codigo = $_POST['deletar'];
        if($objFunc->deletar($codigo))
        {
            $objFunc->redirect('../Carrinho.php');
        }
    }

?>