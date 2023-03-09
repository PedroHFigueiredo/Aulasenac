<?php

include_once("../config/conexao.php");

if($_POST){

    $id = $_POST["id"];
    $genero = $_POST["genero"];

    $query = "UPDATE tbl_genero SET genero = '$genero' WHERE id = $id ";
    $gravar = mysqli_query($conexao, $query);
    
if($gravar){
    header("Location: gestao-genero.php");
}else{
    //Senao do $Gravar
}

}else{
    header("Location: gestao-genero.php");
    //Senao do $_POST

}