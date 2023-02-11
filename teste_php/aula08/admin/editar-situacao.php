<?php

include_once("../config/conexao.php");

if($_POST){

    $id = $_POST["id"];
    $situacao = $_POST["situacao"];

    $querysitucao = "UPDATE tbl_situacao SET situacao = '$situacao' WHERE id = $id ";
    $gravar = mysqli_query($conexao, $querysitucao);
    
if($gravar){
    header("Location: gestao-situacao.php");
}else{
    //Senao do $Gravar
}

}else{
    header("Location: gestao-situacao.php");
    //Senao do $_POST

}