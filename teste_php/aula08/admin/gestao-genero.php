<?php 
include_once("../config/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tito's Market - Cadastro de Genero </title>
</head>
<body>
    <a href="index.php">Voltar</a>
    <h4>Gestão Genero</h4>
    <table>
        <thead>
            <tr>
                <th>Genero</th>
            </tr>
        </thead>
    <?php 
    $queryConsultgenero = "SELECT * FROM tbl_genero";
    $consulta = mysqli_query($conexao, $queryConsultgenero);
    $resultado = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

    foreach($resultado as $genero){
     echo"<tr>";
    echo    "<th>".$genero["genero"]."</th>";
    echo"   <th><a href='?acao=editar&id=".$genero['id']."'>Editar</a></th>";
    echo"   <th><a href='deletar-genero.php?id=".$genero['id']."'>Deletar</a></th>";
    echo" </tr>";

    }
    
    
    ?>
    </table>

    <main>
        <h4>Gestão de Categoria</h4>
        <table >

        <?php   
        if(isset($_GET["msg"])){
            if($_GET["msg"] == "sucessogen"){
                echo"genero cadastrada com sucesso";
            }
            if($_GET["msg"] == "errogen"){
                echo"Erro ao cadastrar genero";
            }
            if($_GET["msg"] == "sucessodel"){
                echo"genero deletado com sucesso";
            }
            if($_GET["msg"] == "errodel"){
                echo"Erro ao deletado genero";
            }
        }
        
        ?>

        </table>



    </main>

    <?php
        if(isset($_GET["acao"])){
                if($_GET["acao"] == "editar"){
                    $queryConsultgenero = "SELECT * FROM tbl_genero WHERE id = ".$_GET["id"];
                    $consultargenero = mysqli_query($conexao, $queryConsultgenero);
                    $resultado = mysqli_fetch_all($consultargenero, MYSQLI_ASSOC);

                    foreach($resultado as $genero){
                    echo' <h4>Editar Genero</h4>

    <form action="editar-genero.php" method="POST">
                <input type="hidden" name="id" value="'.$genero["id"].'">
                 <label for="">Genero</label>
                 <input type="text" name="genero" value="'.$genero["genero"].'">
                     <button>Salvar</button>

    </form>';
                    }
        ?> 
    <?php
                }
        }else{
            echo'<h4>Cadastro de  genero</h4>
            <form action="inserir-genero.php" method="POST">
                 <label for="">Genero</label>
                    <input type="text" name="genero">
                <button>Gravar</button>
        </form>';
        }
    
        ?>
</body>
</html>