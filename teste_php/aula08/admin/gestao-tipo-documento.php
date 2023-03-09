<?php 
include_once("../config/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tito's Market - Cadastro de tipo Documento </title>
</head>
<body>
    <a href="index.php">Voltar</a>
    <h4>Gestão tipo_docs</h4>
    <table>
        <thead>
            <tr>
                <th>Tipo de Documento</th>
            </tr>
        </thead>
    <?php 
    $queryConsulttipo_docs = "SELECT * FROM tbl_tipo_docs";
    $consulta = mysqli_query($conexao, $queryConsulttipo_docs);
    $resultado = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

    foreach($resultado as $tipo_docs){
     echo"<tr>";
    echo"<th>".$tipo_docs["tipo_doc"]."</th>";
    echo"<th><a href='?acao=editar&id=".$tipo_docs['id']."'>Editar</a></th>";
    echo"<th><a href='deletar-tipo_docs.php?id=".$tipo_docs['id']."'>Deletar</a></th>";
    echo"</tr>";

    }
    
    
    ?>
    </table>

    <main>
        <h4>Gestão Tipo documentos</h4>
        <table >

        <?php   
        if(isset($_GET["msg"])){
            if($_GET["msg"] == "sucessotipo_docs"){
                echo"tipo_docs cadastrada com sucesso";
            }
            if($_GET["msg"] == "errodel"){
                echo"Erro ao deletado tipo_docs";
            }
        }
        
        ?>

        </table>



    </main>

    <?php
        if(isset($_GET["acao"])){
                if($_GET["acao"] == "editar"){
                    $queryConsulttipo_docs = "SELECT * FROM tbl_tipo_docs WHERE id = ".$_GET["id"];
                    $consultartipo_docs = mysqli_query($conexao, $queryConsulttipo_docs);
                    $resultado = mysqli_fetch_all($consultartipo_docs, MYSQLI_ASSOC);

                    foreach($resultado as $tipo_docs){
                    echo' <h4>Editar tipo_docs</h4>

    <form action="editar-tipo-documento.php" method="POST">
                <input type="hidden" name="id" value="'.$tipo_docs["id"].'">
                 <label for="">tipo_docs</label>
                 <input type="text" name="tipo_docs" value="'.$tipo_docs["tipo_doc"].'">
                     <button>Salvar</button>

    </form>';
                    }
        ?> 
    <?php
                }
        }else{
            echo'<h4>Cadastro de  tipo_docs</h4>
            <form action="inserir-tipo-documento.php" method="POST">
                 <label for="">tipo_docs</label>
                    <input type="text" name="tipo_docs">
                <button>Gravar</button>
        </form>';
        }
    
        ?>
</body>
</html>