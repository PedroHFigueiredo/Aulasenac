<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        .conteiner {
            display: flex;
            justify-content: center;
        }

        .contato {
            width: 100%;
            max-width: 500px;
        }

        .form {
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
        
    </style>
</head>

<body>
    <section class="conteiner">
        <div class="contato">
            <h3>Formulario de Contato</h3>
            <form class="form" method="POST" action="#">
                <input class="coluna" type="text" name="nome" placeholder="Nome" value="">
                <input class="coluna" type="text" name="email" placeholder="E-mail" value="">
                <textarea class="coluna" name="mensagem" placeholder="Digite sua mensagem"></textarea>
                <input class="coluna" type="submit" value="Enviar">


            </form>




        </div>


    </section>



    <?php 
$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['mensagem']);

echo"<h3>Obrigado por entrar em contato</h3>";

echo        "<p>Obrigado $nome </p>";
 echo       "<p>Do do E-mail $email </p>";

?>
</body>

</html>