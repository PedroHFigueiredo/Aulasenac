<?php
include_once("../config/conexao.php");

    $genero = $_POST["genero"];

    $query = "INSERT INTO  tbl_genero(genero) VALUES ('$genero')";
    $consultar_genero = mysqli_query($conexao, $query);

    if ($consultar_genero) {
        echo("Cadastro eferuado com Sucesso <a href= 'index.php'></a>");
        
    }else{
        echo("Erro ao Cadastrar");
    }
    

?>
