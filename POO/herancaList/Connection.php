<?php

abstract class Connection
{
    public string $host = "localhost";
    public string $user = "root";
    public string $pass = "";
    public string $dbname = "celke";
    public int $port = 3306;
    public object $connection;

    public function connect()
    {
        try{

            // Usar a porta na conexão
            $this->connection = new PDO("mysql:host={$this->host};port={$this->port};dbname=" . $this->dbname, $this->user, $this->pass);

            //echo "Conexão com banco de dados realizada com sucesso!";

            return $this->connection;

        }catch(PDOException $e){
            echo "Erro: " . $e->getMessage();
            die('Erro ao conectar ao banco de dados');
        }
    }

}