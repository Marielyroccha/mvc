<?php

    if(!empty($_GET['id']))
    {
        include_once('./configuration/connect.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM clients WHERE id=$id";

        $result = $connection->query($sqlSelect);
        
        print_r($result);

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>select</h1>
</body>
</html>