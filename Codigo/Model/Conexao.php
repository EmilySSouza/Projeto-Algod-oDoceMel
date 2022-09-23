<?php
    class dataBase{
        private $userName = "root";
        private $senha = "";
        public $conn;
        public function dbConecction(){
            $this->conn = null;
            // "('mysql:host=localhost; dbname=site')" seria o nome do host q acredito q por padrão já é localhost,
            // mas o dbname seria o nome do banco de dados.
            // aliás, esqueci do porque "userName" está em camel mas acredito que é o certo a se manter
            try{
                $this->conn = new PDO('mysql:host=localhost; dbname=TCC2', $this->userName, $this->senha);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $e){
                echo("Error: ".$e->getMessage());
                //echo $e->getMessage();
            }
            return $this->conn;
        }
    }
?>