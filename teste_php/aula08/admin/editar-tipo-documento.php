<?php

include_once("../config/conexao.php");

if($_POST){

    $id = $_POST["id"];
    $tipo_docs = $_POST["tipo_docs"];
   

    $query_tipo_docs = "UPDATE tbl_tipo_docs SET tipo_doc = '$tipo_docs' WHERE id = $id ";
    $gravar = mysqli_query($conexao, $query_tipo_docs);
    
if($gravar){
    header("Location: gestao-tipo-documento.php");
}else{
    //Senao do $Gravar
}

}else{
    header("Location: gestao-tipo-documento.php");
    //Senao do $_POST

}