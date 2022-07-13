<!--funcao getall
quando classe instanciada, tambem instancia a model em new client model
function getall a variavel resultdata esta recebendo dados do getall da model
print_r na variavel resultdata, que aparecera na tela  -->

<?php

    require_once('./models/Client.php');

    class clientsController{
        private $model;

        function __construct()
        {
            $this->model = new ClientModel();
        }

        function getAll()
        {
            $resultData = $this->model->getAll();
            require_once('./views/index.php');
        }

        function delete()
        {
            $resultData = $this->model->delete();
            require_once('./views/index.php');
        }

    }

?>