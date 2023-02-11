<?php
include_once ("../config/conexao.php");

if($_GET){
    $id = $_GET["id"];


    $query = "DELETE FROM tbl_genero WHERE id = $id";
    $deletar_genero = mysqli_query($conexao, $query);

    if($deletar_genero){
        header("Location: gestao-genero.php?msg=sucessodel");

    }else{
        header("Location: gestao-genero.php?msg=errodel");
    }
}