<?php
    require_once 'conexao.php';
    // Aqui pode mudar, n sei que nome deu ao arquivo de código do cliente
    class conta_user{
        private $conn; 
        public function __construct()
        {
            $dataBase = new dataBase();
            $db = $dataBase->dbConecction();
            $this->conn = $db;
        }
        // Aqui, a função de inserir novas informações
        public function inserir($nome, $login, $numero_celular, $endereco, $bairro, $sobrenome, $senha, $email, $cep, $complemento){
            try{
                $sql = "INSERT INTO conta_user(nome, login, numero_celular, endereco, bairro, sobrenome, senha, email, cep, complemento) 
                VALUES(:nome, :login, :numero_celular, :endereco, :bairro, :sobrenome, :senha, :email, :cep, :complemento)";

                $stmt = $this->conn->prepare($sql);
                $stmt->bindparam(":nome", $nome);
                $stmt->bindparam(":login", $login);
                $stmt->bindparam(":numero_celular", $numero_celular);
                $stmt->bindparam(":endereco", $endereco);
                $stmt->bindparam(":bairro", $bairro);
                $stmt->bindparam(":sobrenome", $sobrenome);
                $stmt->bindparam(":senha", $senha);
                $stmt->bindparam(":email", $email);
                $stmt->bindparam(":cep", $cep);
                $stmt->bindparam(":complemento", $complemento);
                $stmt->execute();
                return $stmt;
            }catch(PDOException $e){
                echo("Error: " . $e->getMessage());
            }finally{
                $this->conn = null;
            }
        }
        // Aqui embaixo seria a validação se a informação inserida está correta
        // Precisa alterar aqui os valores a serem validados a depender do que tá escrito no banco de dados
        public function validar($login, $senha){
            try{
                $sql = "select codigo, nome, email from conta_user where login = :login and senha = :senha";
                $stmt = $this->conn->prepare($sql);
                $stmt->bindValue(":login", $login);
                $stmt->bindValue(":senha", $senha);
                $stmt->execute();
                
                $run = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                //tratar possivel erro
                return $run[0];
                
            }
            catch(PDOException $e){
                echo("Erro: ".$e->getMessage());
            }
            finally{
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

        public function editar($codigo,$nome,$email,$numero_celular,$cep,$endereco, $senha){
            try{
                $sql ="UPDATE conta_user SET nome = :nome, email = :email, numero_celular = :numero_celular,cep = :cep,endereco = :endereco, senha = :senha WHERE codigo = :codigo";
                $stmt = $this->conn->prepare($sql);
                $stmt->bindValue(":codigo", $codigo);
                $stmt->bindValue(":nome", $nome);
                $stmt->bindValue(":email", $email);
                $stmt->bindValue(":numero_celular", $numero_celular);
                $stmt->bindValue(":cep", $cep);
                $stmt->bindValue(":endereco", $endereco);
                $stmt->bindValue(":senha", $senha);
                
                $stmt->execute();
    
                return $stmt->rowCount();
    
            }catch(PDOException $e){
                echo("Error: ".$e->getMessage());
            }finally{
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