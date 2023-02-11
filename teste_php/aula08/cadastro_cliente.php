<?php include_once("config/conexao.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Cliente</title>
    <style>
        body{
            font-family: Arial
        }
        .conteiner{
            display: flex;
            justify-content: center;
        }
        .contato {
            width: 100%;
            max-width: 500px;
        }

        .form{
            display: flex;
            flex-direction: column;
            
        }
        .coluna {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-family: Arial, Helvetica, sans-serif;
        }
        textarea{
            height: 150px;
        }
        
        h3{
            text-align: center;
            
            
        }
        .notifica{
            display: flex;
            padding: 12px 0px 12px 140px;
        }

    </style>
</head>
<body>
<section class="conteiner">
    <div class="contato">
        <h3>Formulario Cliente</h3>
        <form action="completar_cadastro.php" class="form"  method="POST">
            
                 <label>Nome:</label>
                <input type="text" class="coluna" name="nome" >
            
           
                 <label>Sobrenome:</label>
                <input type="text" class="coluna" name="sobrenome" >
            
            
                 <label>Data Nascimento:</label>
                <input type="date" class="coluna" name="data_nasc" >

                <label>Genero:</label>
                <select name="genero" class="coluna" >
            <?php
                    $query = "SELECT * FROM tbl_genero";
                    $consult_genero = mysqli_query($conexao, $query);
                    $result = mysqli_fetch_all($consult_genero, MYSQLI_ASSOC);

                    foreach($result as $genero) {
            ?>

                 <option value="<?=$genero["id"]?>">
                    <?=$genero["genero"]?>

                </option>

         <?php
                    }
                
        ?>

            </select>
            
            <div class="notifica">
                <input type="checkbox"  name="newsletter">
                 <label>Aceita receber notificações:</label>
            </div>

            <input class="coluna" type="submit" value="Enviar">
     
        </form>
    </div>
</section>

 
    
</body>
</html>


