<?php
include_once("../config/conexao.php");

    $tipo_doc = $_POST["tipo_docs"];

    $query = "INSERT INTO  tbl_tipo_docs(tipo_doc) VALUES ('$tipo_doc')";
    $consultar_tipo_doc = mysqli_query($conexao, $query);

    if ($consultar_tipo_doc) {
        echo("Cadastro eferuado com Sucesso <a href= 'index.php'></a>");
        
    }else{
        echo("Erro ao Cadastrar");
    }

?>
