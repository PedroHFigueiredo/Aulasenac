<?php
include_once("../config/conexao.php");

$situacao = $_POST["situacao"];

$query = "INSERT INTO tbl_situacao(situacao) VALUES ('$situacao')";
$consultar_situacao = mysqli_query($conexao, $query);

if($consultar_situacao){
    echo("Cadastro efetuado com Sucesso <a href='index.php'></a>");
}else{
    echo("Erro ao Cadastrar");
}