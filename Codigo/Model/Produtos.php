<?php
    require_once 'conexao.php';
    //Aqui era o registro dos produtos
    class produtos{
        private $conn; 
        public function __construct()
        {
            $dataBase = new dataBase();
            $db = $dataBase->dbConecction();
            $this->conn = $db;
        }
        // Inserção
        public function inserir($nome, $descricao, $preco){
            try{
                $sql = "INSERT INTO tb_produtos(nome, descricao, preco) 
                VALUES(:nome, :descricao, :preco)";

                $stmt = $this->conn->prepare($sql);
                $stmt->bindparam(":nome", $nome);
                $stmt->bindparam(":descricao", $descricao);
                $stmt->bindparam(":preco", $preco);
                $stmt->execute();
                return $stmt;
            }catch(PDOException $e){
                echo("Error: " . $e->getMessage());
            }finally{
                $this->conn = null;
            }
            
        } 
        // Validação
        public function validar($nome, $descricao, $preco){
            try{
                $sql = "select * from tb_produtos where nome = :nome, descricao = :descricao and preco = :preco";
                $stmt = $this->conn->prepare($sql);
                $stmt->bindparam(":nome", $nome);
                $stmt->bindParam(":descricao", $descricao);
                $stmt->bindParam(":preco", $preco);
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
        //Edição
        public function editar($nome, $descricao, $preco, $codigo){
            try{
                $sql ="UPDATE tb_produtos SET nome = :nome, descricao = :descricao, preco = :preco WHERE codigo = :codigo";
                $stmt = $this->conn->prepare($sql);
                $stmt->bindParam(":nome", $nome);
                $stmt->bindParam(":descricao", $descricao);
                $stmt->bindParam(":preco", $preco);
                $stmt->bindParam(":codigo", $codigo);
                $stmt->execute();

                return $stmt;

            }catch(PDOException $e){
                echo("Error: ".$e->getMessage());
            }finally{
                $this->conn = null;
            }
        }
        //Remoção
        public function deletar($codigo){
            try{
               $sql = "DELETE FROM tb_produtos WHERE codigo = :codigo";
               $stmt = $this->conn->prepare($sql);
               $stmt->bindParam(":codigo", $codigo);

               $stmt->execute();

               return $stmt;

            }catch(PDOException $e){
                echo("Error: ".$e->getMessage());
            }finally{
                $this->conn = null;
            }
        }

        public function buscarTodos(){
            $query = "SELECT codigo, descricao, preco, nome FROM tb_produtos";
            $sql = $this->conn->prepare($query);
            $sql->execute();
            return $sql->fetchAll(\PDO::FETCH_ASSOC);
        }

        public function buscarPorCodigo($codigo){
            $query = "SELECT codigo, descricao, preco, nome FROM tb_produtos WHERE codigo = :codigo";
            $sql = $this->conn->prepare($query);
            $sql->bindValue(':codigo', $codigo);
            $sql->execute();
            return $sql->fetchAll(\PDO::FETCH_ASSOC);
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