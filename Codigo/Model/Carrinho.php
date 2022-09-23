<?php

    require_once 'conexao.php';

    class Carrinho
    {
        private $conn;

        public function __construct()
        {
            $dataBase = new dataBase();
            $db = $dataBase->dbConecction();
            $this->conn = $db;
        }

        public function inserir($quantidade)
        {
            try
            {
                $sql = "INSERT INTO vendas(codigo)
                VALUES(:codigo)";
                $stmt = $this->conn->prepare($sql);
                $stmt->bindParam(":codigo", $codigo);
                $stmt->execute();
                return $stmt;
            }
            catch(PDOException $e)
            {
                echo("Error: ".$e->getMessage());
            }
            finally
            {
                $this->conn = null;
            }
        }

        public function editar($quantidade, $id)
        {
            try{
                $sql = "UPDATE vendas SET quantidade = :quantidade WHERE codigo = :codigo";
                $stmt = $this->conn->prepare($sql);
                $stmt->bindParam(":quantidade", $quantidade);
                $stmt->bindParam(":codigo", $codigo);
                $stmt->execute();

                return $stmt;
            }
            catch(PDOException $e)
            {
                echo("Error: ".$e->getMessage());
            }
            finally
            {
                $this->conn = null;
            }
        }

        public function deletar($id)
        {
            try
            {
                $sql = "DELETE FROM vendas WHERE codigo = :codigo";
                $stmt = $this->conn->prepare($sql);
                $stmt->bindParam(":codigo", $codigo);

                $stmt->execute();

                return $stmt;
            }
            catch(PDOException $e)
            {
                echo("Error: ".$e->getMessage());
            }
            finally
            {
                $this->conn = null;
            }
            
        }

        public function runQuery($sql)
        {
            $stmt = $this->conn->prepare($sql);
            return $stmt;
        }

        public function redirect($url)
        {
            header("Location: $url");
        }
    }

?>
