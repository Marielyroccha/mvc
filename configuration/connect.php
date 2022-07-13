<!-- Conexao com banco de dados -->

<?php

    define('HOST', 'localhost:3307');
    define('DATABASENAME', 'crud-mvc-poo-php-gn');
    define('USER', 'root');
    define('PASSWORD', '');

    class Connect{
        protected $connection;

        function __construct()
        {
            $this->connectDatabase();
        }

        function connectDatabase()
        {
            try
            {
                $this->connection = new PDO('mysql:host='.HOST.';dbname='.DATABASENAME, USER, PASSWORD);
            }
            catch(PDOException $e)
            {  
                echo "Error!".$e->getMessage();
                die();
            }
        }
    }

?>