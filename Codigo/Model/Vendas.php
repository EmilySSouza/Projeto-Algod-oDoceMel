<?php

    require_once 'conexao.php';

    class Vendas
    {
        private $conn;

        public function __construct()
        {
            $dataBase = new dataBase();
            $db = $dataBase->dbConecction();
            $this->conn = $db;
        }
        

        public function inserir($nome, $tamanho, $horaentrega, $dataentrega, $local, $quantidade, $nomeusuario){
            try{
                $sql = "INSERT INTO tb_vendas2(nome, tamanho, horaentrega, dataentrega, local, quantidade, nomeusuario) 
                VALUES(:nome, :tamanho, :horaentrega, :dataentrega, :local, :quantidade, :nomeusuario)";

                $stmt = $this->conn->prepare($sql);
                $stmt->bindparam(":nome", $nome);
                $stmt->bindparam(":tamanho", $tamanho);
                $stmt->bindparam(":horaentrega", $horaentrega);
                $stmt->bindparam(":dataentrega", $dataentrega);
                $stmt->bindparam(":local", $local);
                $stmt->bindparam(":quantidade", $quantidade);
                $stmt->bindParam(":nomeusuario", $nomeusuario);
                $stmt->execute();
                return $stmt;
            }catch(PDOException $e){
                echo("Error: " . $e->getMessage());
            }finally{
                $this->conn = null;
            }
        }

        public function findById($codigo){
            try{
                $sql = "select nome, sobrenome, login, email, senha, numero_celular, cep, endereco, complemento FROM conta_user WHERE codigo = :codigo";
                $stmt = $this->conn->prepare($sql);
                $stmt->bindValue(":codigo", $codigo);

                $stmt->execute();
                
                $run = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                //tratar possivel erro
                return $run;
          
    
            }
            catch(PDOException $e){
                echo("Erro: ".$e->getMessage());
            }
            finally{
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