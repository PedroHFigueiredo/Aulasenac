<?php 
include_once("../config/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tito's Market - Cadastro de situacao </title>
</head>
<body>
    <a href="index.php">Voltar</a>
    <h4>Gestão situacao</h4>
    <table>
        <thead>
            <tr>
                <th>situacao</th>
            </tr>
        </thead>
    <?php 
    $queryConsultsituacao = "SELECT * FROM tbl_situacao";
    $consulta = mysqli_query($conexao, $queryConsultsituacao);
    $resultado = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

    foreach($resultado as $situacao){
     echo"<tr>";
    echo    "<th>".$situacao["situacao"]."</th>";
    echo"   <th><a href='?acao=editar&id=".$situacao['id']."'>Editar</a></th>";
    echo"   <th><a href='deletar-situacao.php?id=".$situacao['id']."'>Deletar</a></th>";
    echo" </tr>";

    }
    
    
    ?>
    </table>

    <main>
        <h4>Gestão de Categoria</h4>
        <table >

        <?php   
        if(isset($_GET["msg"])){
            if($_GET["msg"] == "sucessosit"){
                echo"situacao cadastrada com sucesso";
            }
            if($_GET["msg"] == "errosit"){
                echo"Erro ao cadastrar situacao";
            }
        }
        
        ?>

        </table>



    </main>

    <?php
        if(isset($_GET["acao"])){
                if($_GET["acao"] == "editar"){
                    $queryConsultsituacao = "SELECT * FROM tbl_situacao WHERE id = ".$_GET["id"];
                    $consultarsituacao = mysqli_query($conexao, $queryConsultsituacao);
                    $resultado = mysqli_fetch_all($consultarsituacao, MYSQLI_ASSOC);

                    foreach($resultado as $situacao){
                    echo' <h4>Editar situacao</h4>

    <form action="editar-situacao.php" method="POST">
                <input type="hidden" name="id" value="'.$situacao["id"].'">
                 <label for="">situacao</label>
                 <input type="text" name="situacao" value="'.$situacao["situacao"].'">
                     <button>Salvar</button>

    </form>';
                    }
        ?> 
    <?php
                }
        }else{
            echo'<h4>Cadastro de  situacao</h4>
            <form action="inserir-situacao.php" method="POST">
                 <label for="">situacao</label>
                    <input type="text" name="situacao">
                <button>Gravar</button>
        </form>';
        }
    
        ?>
</body>
</html>