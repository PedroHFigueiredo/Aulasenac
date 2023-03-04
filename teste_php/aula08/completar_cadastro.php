<?php include_once("config/conexao.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Completar Cadastro</title>
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
            <h3>Completar Cadastro</h3>

        <?php
            if(isset($_GET['msg'])){
                if($_GET["msg"] == "email"){
                    echo "E-mail está em Uso";
                }
            }
            
        ?>

        <form action="inserir-cliente-dados.php" class="form"  method="POST">
                 <table>CPF</table>
                 <input type="hidden" name="id-client" class="coluna" value='<?php echo $_GET["client"]?>'>
                 <input type="text" class="coluna" name="cpf" >
                
            
                 <table>RG:</table>
                <input type="text" class="coluna" name="rg" >
            
            
                 <table>Email:</table>
                <input type="text" class="coluna" name="email" >

                <table>Celular:</table>
                <input type="text" class="coluna" name="celular" >

                <table>Senha:</table>
                <input type="text" class="coluna" name="senha" >



            </select>
            

            <input class="coluna" type="submit" value="Enviar">
     
        </form>
    </div>
</section>

 
    
</body>
</html>
