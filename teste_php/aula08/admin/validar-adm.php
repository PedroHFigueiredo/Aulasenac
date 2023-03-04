<?php
include_once("../config/conexao.php");

if($_POST){
    $usuario_adm = $_POST['usuario_adm'];
    $senha_adm = $_POST['senha_adm'];

    $query = "SELECT * FROM tbl_acessoadm WHERE usuario_adm = '$usuario_adm' AND senha_adm = '$senha_adm'";
    $consultaAdm = mysqli_query($conexao, $query);
    $resultadoAdm = mysqli_fetch_all($consultaAdm, MYSQLI_ASSOC);

    if($resultadoAdm){
         $_SESSION["ID_ADM"]= $resultadoAdm[0]["id"];
         $_SESSION['USUARIO_ADM'] = $resultadoAdm[0]['usuario_adm'];
         $_SESSION['ID_SITUACAO'] = $resultadoAdm[0]['id_situacao'];



   // $queryUsuarioADM = "SELECT * FROM tbl_acessoAdm WHERE id='".$_SESSION["ID_ADM"]."'";
   // $consultasAdm = mysqli_query($conexao,$queryUsuarioADM);
   // $resultadosAdm = mysqli_fetch_all($consultasAdm, MYSQLI_ASSOC);

   
    
       // $_SESSION['IDADM'] = $resultadosAdm[0]['usuario_adm'];
       // $_SESSION['SITUACAO'] = $resultadosAdm[0]['id_situacao'];

    header("Location: minha-conta-adm.php");

    }else{
       header("Location: login-adm.php");
    }


}else{
    header("Location: login-adm.php");
}


?>