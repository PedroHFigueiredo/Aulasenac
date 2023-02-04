<?php
include_once("config/conexao.php");

$nome_categoria = $_POST["nome_categoria"];
$img_categoria = $_POST["img_categoria"];
$slug_categoria = $_POST["slug_categoria"];

$query = "INSERT INTO tbl_categoria(nome, img, slug,id_situacao) 
VALUES ('$nome_categoria', '$img_categoria', '$slug_categoria', 1)";
$inserir_categoria = mysqli_query ($conexao, $query);

if($inserir_categoria){
    echo("Cadastro efetuado com Sucesso, <a href='cadastra-categoria.php'>Voltar</a>");

}else{
    echo("Erro ao cadastrar categoria, <a href='cadastra-categoria.php'>Voltar</a>");
}