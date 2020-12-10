<?php
    class PgBD{
        // As variaveis para conexão com o banco de dados
        private $driver = "pgsql";
        private $host = "localhost";
        private $user = "postgres";
        private $db = "ShopyzerCE";
        private $senha = "1234";
        private $port = '5432';

        private $connection_string;

        //As variaveis que iremos utilizar na manipulação da conexão com o banco de dados
        private $link;

        function getLink(){
            return $this->link;
        }
        
        function __construct(){
            $this->connection_string = $this->driver.":host=".$this->host.";port=".$this->port.";dbname=".$this->db.";user=".$this->user.";password=".$this->senha;
            $this->connect();
        }
        
        function connect(){
            try{
                $this->link = new PDO($this->connection_string);
            }catch(Exception $e){
                echo 'Tratar Exceção '.$e->getMessage();
            }
        }
        
        function disconnect(){
        }
        
        //Função responsável por executar uma query e retornar os resultados
        function query($_query){}
        
        //Função responsável por preparar um statement
        function prepare_statement($_query){
            $this->connect();
            if($_stmt = $this->link->prepare($this->link,$_query)){
                return $_stmt;
            }else{
                // Caso ocorra um erro, exibe uma mensagem com o Erro
                print "Ocorreu um erro ao preparar o Statement>";
                print "<br /><br />";
                print "Erro no MySQL: <b>".mysqli_error($this->link)."</b>";
                die();  
                $this->disconnect();
            }
        }
        
        
        //Função responsável por retornar o ultimo registro da coluna
        function lastId($table,$column){
            $lastId = mysqli_fetch_array($this->query("SELECT max($column) as LastId FROM $table"));
            return $lastId['LastId'] +1 ;
            
        }
       
        //Função responsaável por criar um select
        /*function createSelect($selectName,$query,$column){
            $consulta = $this->query($query);
            echo "<select name=$boxname>";
            while($_linha = mysqli_fetch_array($consulta)){
                echo "<option value=$_linha[0]>$_linha[$column]</option>";
            }
            echo "</select>";
        }*/

        function build_select($selectName,$query,$columnId,$columnDes){
        }
    }
?>