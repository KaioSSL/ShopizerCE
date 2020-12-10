<?php
    include_once ("Cliente.php");
    include_once ("PgBD.php");
    class ClienteDAO extends Cliente{
        
        public function insert(){
            //Instância do Banco de Dados que reserva uma conexão.
            $bd = new BD();
            //Chamada da PRC de Inserção de Cliente.
            $query = "BEGIN PRC_INSERT_CLIENTE(?,?,?,?,?,?); END;";
            //Preparo do Statement para realizar a execução da query.
            $stmt = $bd->prepare_statement($query);
            $stmt->bind_param("ssssss",$this->getCPF(),$this->getNome(),$this->getLogin(),$this->getSenha(),$this->getEmail(),$this->getNasc());
            try{
                return $stmt->execute(); 
            }catch(Exception $e){
                    echo 'Tratar Exceção ' . $e->getMessage();
            }
        }
        public function delete(){
            //Instância do Banco de Dados que reserva uma conexão.
            $bd = new BD();
            //Chamda da PRC de Deleção de Cliente.
            $query = "BEGIN PRC_DELETE_CLIENTE(?,?,?); END;";
            //Preparo do Statement para realizar a execução da query
            $stmt = $bd->prepare_statement($query);
            $stmt->bind_param("iss",$this->getId(),$this->getLogin(),$this->getSenha());
            try{
                return $stmt->execute();
            }catch(Exception $e){
                echo 'Tratar Exceção ' .$e->getMessage();
            }

        }
        public function update(){
            //Instância do Banco de Dados que reserva uma Conexão.
            $bd = new BD();
            //Chamada da PRC de Update dos Dados do Cliente.
            $query = "BEGIN PRC_UPDATE_CLIENTE(?,?,?,?,?,?,?); END;";
            //Preparo do Statement para realizar a execução da query.
            $stmt = $bd->prepare_statement($query);
            $stmt->bind_param("ssssssi",$this->getCPF(),$this->getNome(),$this->getLogin(),$this->getSenha(),$this->getEmail(),$this->getNasc(),$this->getId());
            try{
                return $stmt->execute();
            }catch(Exception $e){
                echo 'Tratar Exceção ' . $e->getMessage();
            }
        }
        public function select(){}

    }
