<?php include_once("config/seguranca.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Conta</title>
</head>
<body>
    <?php
    echo"Ola,".$_SESSION["USUARIO"]."!";

    ?>
    
</body>
</html>