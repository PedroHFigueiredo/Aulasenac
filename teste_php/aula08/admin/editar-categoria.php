<?php

include_once("../config/conexao.php");

if($_POST){

    $id = $_POST["id"];
    $nome = $_POST["nome_categoria"];
    $img = $_POST["img_categoria"];
    $slug = $_POST["slug_categoria"];

    $query = "UPDATE tbl_categoria SET nome = '$nome', img = '$img', slug = '$slug' WHERE id = $id ";
    $gravar = mysqli_query($conexao, $query);
    
if($gravar){
    header("Location: gestao-categoria.php");
}else{
    //Senao do $Gravar
}

}else{
    header("Location: gestao-categoria.php");
    //Senao do $_POST

}