<!-- rotas / chamada de métodos
requerindo controler
pegando acao passada por parametro (getall por defaut)
instanciando controller
chamando get all no controller -->

<?php

    require_once('./controllers/clientsController.php');

    $action = !empty($_GET['a']) ? $__GET['a'] : 'getAll';
    
    $controller = new clientsController();

    $controller->{$action}();

?>