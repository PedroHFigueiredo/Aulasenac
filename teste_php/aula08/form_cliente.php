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
        <form action="" class="form">
            
                 <table>Nome:</table>
                <input type="text" class="coluna" name="nome" method="POST">
            
           
                 <table>Sobrenome:</table>
                <input type="text" class="coluna" name="sobrenome" method="POST">
            
            
                 <table>Data Nascimento:</table>
                <input type="date" class="coluna" name="data_nasc" method="POST">

                <table>Genero:</table>
                <select name="genero" class="coluna" method="POST">
                    <option >SELECIONE:</option>
                    <option value="1">Maculino</option>
                    <option value="2">Feminino</option>
                    <option value="3">Outros</option>
                </select>
            
            <div class="notifica">
                <input type="checkbox"  name="btn" method="POST">
                 <table>Aceita receber notificações:</table>
            </div>

            <input class="coluna" type="submit" value="Enviar">
            
        </form>
    </div>
</section>

<?php 
$nome_cliente = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$data_nasc = $_POST["data_nasc"];
$genero = $_POST["genero"];

$query = "INSERT INTO tbl_clientes (nome, sobrenome, data_nasc, genero) 
VALUES ('$nome_cliente','$sobrenome','$data_nasc','$genero')" ;
$inserir_clinete = mysqli_query ($conexao, $query);



?>


    
</body>
</html>