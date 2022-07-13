<!-- Consultas e regras de negocio
getall faz um select, executa a query no banco de dados
pega o banco com o $this connection que esta em connect.php 
executa query e retorna array, converte em array associativo
e retorna para variavvel resultquery-->

<?php

    require_once('./configuration/connect.php');

    class ClientModel extends Connect{
        private $table;

        function __construct()
        {
            parent::__construct();
            $this->table = 'clients';
        }

        function getAll()
        {
            $sqlSelect = $this->connection->query("SELECT * FROM $this->table");
            $resultQuery = $sqlSelect->fetchAll();
            return $resultQuery;
        }

        function delete()
        {
            $id = $_GET['id'];
            $sqlSelect = "SELECT * FROM clients WHERE id=$id";
            $result = $this->connection->query($sqlSelect);
            
            print_r($result);

        }

    }

?>