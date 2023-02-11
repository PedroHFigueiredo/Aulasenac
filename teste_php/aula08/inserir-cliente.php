<?php
include_once("config/conexao.php");

if (($_POST)) {

    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $data_nasc = $_POST["data_nasc"];
    $genero = $_POST["genero"];
    $newsletter = $_POST["newsletter"];


    $query = "INSERT INTO tbl_clientes(nome, sobrenome, data_nasc, id_genero, newsletter, id_situacao) 
            VALUES ('$nome', '$sobrenome', '$data_nasc', '$genero', '$newsletter', 1)";

    $inserir = mysqli_query($conexao, $query);
    $id_client = mysqli_insert_id($conexao);
    if ($inserir) {
        ("Location: completar-cadastro.php?client ='.$id_client");
        
    }else{
        header("Location: cadastro_cliente.php");
    }
    
}else{
    header('Location: cadastro_cliente.php');
}

?>