<?php
    require_once 'conexao.php';

    class tb_vendas2{
        private $conn; 
        public function __construct()
        {
            $dataBase = new dataBase();
            $db = $dataBase->dbConecction();
            $this->conn = $db;
        }

        public function listarPedido($codigo_vendas){
            try{
                $sql="select quantidade, nome, tamanho, dataentrega, horaentrega, local, nomeusuario from tb_vendas2 where codigo_vendas = :codigo_vendas";
                $stmt = $this->conn->prepare($sql);
                $stmt->bindValue(":codigo_vendas", $codigo_vendas);

                $stmt->execute();

                $run = $stmt->fetchAll(\PDO::FETCH_ASSOC);

                return $run;
            }
            catch(PDOException $e){
                echo("Erro: ".$e->getMessage());
            }
            finally{
                $this->conn = null;
            }
        }

        public function runQuery($sql){
            $stmt = $this->conn->prepare($sql);
            return $stmt;
        }
        public function redirect($url){
            header("Location: $url");
        } 
    }

?>