<?php
    //aqui pra o ctr funcionar, exige a referencia ao model
    require_once '../Model/Produtos.php';
    $objFunc = new produtos();
    //processo de validação
    if(isset($_POST['validar'])){
        $nome = $_POST['txtNome'];
        $descricao = $_POST['txtDescricao'];
        $preco = $_POST['txtPreco'];

        if($objFunc->validar($nome, $descricao, $preco)){
            $objFunc->redirect('../Produtos.php');
        }
        else{
            $objFunc->redirect('../TelaADM.php');
        }
    }
    //processo de inserção
    if(isset($_POST['insert'])){
        $nome = $_POST['txtNome'];
        $descricao = $_POST['txtDescricao'];
        $preco = $_POST['txtPreco'];
        if($objFunc->inserir($nome, $descricao, $preco)){
            $objFunc->redirect('../Produtos.php');
        }
    }
    //processo de edição
    if(isset($_POST['editar'])){
        $codigo = $_POST['editar'];
        $nome = $_POST['txtNome'];
        $descricao = $_POST['txtDescricao'];
        $preco = $_POST['txtPreco'];
        if($objFunc->editar($nome, $descricao, $preco, $codigo)){
            $objFunc->redirect('../Produtos.php');
        }
    }
    
    //processo de exclusão
    if(isset($_POST['deletar'])){
        $codigo = $_POST['deletar'];
        if($objFunc->deletar($codigo)){
            $objFunc->redirect('../Produtos.php');
        }
    }
?>