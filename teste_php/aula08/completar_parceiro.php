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

        <form action="inserir-parceiro-dados.php" class="form"  method="POST">
                 
                 <input type="hidden" name="id_parceiro" class="coluna" value='<?php echo $_GET["id_parceiro"]?>'>
                 <!-- hidden -->
                 <label>E-mail:</label>
                <input type="text" class="coluna" name="email" >
            
                 <label>CNPJ:</label>
                <input type="text" class="coluna" name="cnpj" >

                <label>Telefone:</label>
                <input type="number" class="coluna" name="telefone" >

                <label>Endereço:</label>
                <input type="text" class="coluna" name="endereco" >

                <label>CEP:</label>
                <input type="text" class="coluna" name="cep" >
                
                <label>Bairro:</label>
                <input type="text" class="coluna" name="bairro" >

                <label>Numero:</label>
                <input type="text" class="coluna" name="numero" >

                <label>Cidade:</label>
                <input type="text" class="coluna" name="cidade" >

                <label>UF:</label>
                <input type="text" class="coluna" name="uf" >

                <label>Senha:</label>
                <input type="text" class="coluna" name="senha" >
                
            <input class="coluna" type="submit" value="Enviar">
     
        </form>
    </div>
</section>

 
    
</body>
</html>
