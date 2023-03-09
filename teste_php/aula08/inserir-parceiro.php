<?php
include_once("config/conexao.php");

if (($_POST)) {

    $nome_fantasia = $_POST["nome_fantasia"];
    $razacao_social = $_POST["razacao_social"];
    $ie = $_POST["ie"];
    $im = $_POST["im"];
  
    // Criação da HASH - DATA NOME E SOBRENOME
    $token_parceiro = sha1(md5(date('d/m/y').$nome_fantasia . $razacao_social));



    $query = "INSERT INTO tbl_parceiros(nome_fantasia, razacao_social, ie, im, id_situacao, `hash`) 
            VALUES ('$nome_fantasia', '$razacao_social', '$ie', '$im', 1, '$token_parceiro')";

    $inserir = mysqli_query($conexao, $query);
    if ($inserir) {
        header("Location: completar_parceiro.php?id_parceiro=".$token_parceiro);
        
    }else{
        header("Location: cadastro_parceiro.php");
    }
    
}else{
    header('Location: cadastro_parceiro.php');
}

?>