<?php
    require_once 'Conexao.php';

    class conta_adm{
        private $conn; 
        public function __construct()
        {
            $dataBase = new dataBase();
            $db = $dataBase->dbConecction();
            $this->conn = $db;
        }
        public function validar($login, $senha){
            try{
                #exit;
                $sql = "select * from conta_adm where login = :login and senha = :senha";
                $stmt = $this->conn->prepare($sql);
                $stmt->bindParam(":login", $login);
                $stmt->bindParam(":senha", $senha);
                $stmt->execute();
                
                if($stmt->rowCount() > 0){
                    return true;
                }
                else{
                    return false;
                }
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