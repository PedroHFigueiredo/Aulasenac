<?php 
include_once("../config/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tito's Market - Cadastro de Categoria </title>
</head>
<body>
    <a href="index.php">Voltar</a>
    <h4>Gestão Categorias</h4>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Visibilidade</th>
                <th>Situação</th>
                <th>Ações</th>
            </tr>
        </thead>
    <?php 
    $queryConsultCat = "SELECT * FROM tbl_categoria";
    $consulta = mysqli_query($conexao, $queryConsultCat);
    $resultado = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

    foreach($resultado as $categoria){
     echo"<tr>";
    echo    "<th>".$categoria["nome"]."</th>";
    echo    "<th>".$categoria["visibilidade"]."</th>";
    echo"    <th>".$categoria["id_situacao"]."</th>";
    echo"   <th><a href='?acao=editar&id=".$categoria['id']."'>Editar</a></th>";
    echo"   <th><a href='deletar-categoria.php?id=".$categoria['id']."'>Deletar</a></th>";
    echo" </tr>";

    }
    
    
    ?>
    </table>

    <main class="container">
        <h4>Gestão de Categoria</h4>
        <table class="table table-bordered">

        <?php   
        if(isset($_GET["msg"])){
            if($_GET["msg"] == "sucessocad"){
                echo"Categoria cadastrada com sucesso";
            }
            if($_GET["msg"] == "errocad"){
                echo"Erro ao cadastrar categoria";
            }
            if($_GET["msg"] == "sucessodel"){
                echo"Categoria deletado com sucesso";
            }
            if($_GET["msg"] == "errodel"){
                echo"Erro ao deletado categoria";
            }
        }
        
        ?>

        </table>



    </main>

    <?php
        if(isset($_GET["acao"])){
                if($_GET["acao"] == "editar"){
                    $queryConsultCategoria = "SELECT * FROM tbl_categoria WHERE id = ".$_GET["id"];
                    $consultarCategoria = mysqli_query($conexao, $queryConsultCategoria);
                    $resultado = mysqli_fetch_all($consultarCategoria, MYSQLI_ASSOC);

                    foreach($resultado as $categoria){
                    echo' <h4>Editar Categoria</h4>

    <form action="editar-categoria.php" method="POST">
                <input type="hidden" name="id" value="'.$categoria["id"].'">
                 <label for="">Nome</label>
                 <input type="text" name="nome_categoria" value="'.$categoria["nome"].'">
                 <label for="">Img</label>
                 <input type="text" name="img_categoria"  value="'.$categoria["img"].'">
                 <label for="">slug</label>
                 <input type="text" name="slug_categoria"  value="'.$categoria["slug"].'">
                     <button>Salvar</button>

    </form>';


                    }
                    
                    
        ?> 
        

    <?php
                }
        }else{
            echo'<h4>Cadastro de  Categoria</h4>
            <form action="inserir-categoria.php" method="POST">
                 <label for="">Nome</label>
                    <input type="text" name="nome_categoria">
                <label for="">Img</label>
                     <input type="text" name="img_categoria">
                <label for="">slug</label>
                    <input type="text" name="slug_categoria">
                <button>Gravar</button>
        
        </form>';
        }
    
        ?>
        
        
    
    
</body>
</html>