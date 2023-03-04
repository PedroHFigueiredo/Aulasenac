<?php
include_once("config/conexao.php");

if($_POST){
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $queryUsuario = "SELECT * FROM tbl_acessos WHERE  usuario= '$usuario'";
    $consultarDados = mysqli_query($conexao, $queryUsuario);
    $resultado = mysqli_fetch_all($consultarDados, MYSQLI_ASSOC);

    if($resultado){
        // verificar SENHA

        $salt = md5($usuario.$senha); // Criar palavra-chave
        $custo = "06";
        $senha_digitada = crypt($senha, '$2b$'. $custo . '$'.  $salt . '$');

        $comparar_senha = hash_equals($resultado[0]["senha"], $senha_digitada);

        if($comparar_senha){
            session_start();
                $_SESSION["ID_USUARIO"]= $resultado[0]["id_usuario"];
                $_SESSION["USUARIO"]= $resultado[0]["usuario"];
                $_SESSION["ID_SITUACAO"]= $resultado[0]["id_situacao"];
    
                $queryUsuario = "SELECT * FROM tbl_clientes WHERE id_cliente='".$_SESSION["ID_USUARIO"]."'";
                 $consultarUsuario = mysqli_query($conexao, $queryUsuario);
                $resultadoUsuario = mysqli_fetch_all($consultarUsuario, MYSQLI_ASSOC);
    
            //$_SESSION["NOME_USUARIO"] = $resultadoUsuario[0]["nome"];
           //$_SESSION["SOBRENOME_USUARIO"] = $resultadoUsuario[0]["sobrenome"];
    
            header("Location: minha-conta.php");
        }
    }else{
        header("Location: login.php?erroLogin=erro");
    }

}else{
    header("Location: login-adm.php");
}
