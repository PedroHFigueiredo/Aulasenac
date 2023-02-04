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

    <form action="inserir-categoria.php" method="POST">
        <label for="">Nome</label>
            <input type="text" name="nome_categoria">
        <label for="">Img</label>
            <input type="text" name="img_categoria">
        <label for="">slug</label>
            <input type="text" name="slug_categoria">

        <button>Gravar</button>

    </form>
    
</body>
</html>