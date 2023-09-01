<?php
    include('conexao.php');
    $query = $dbh->prepare('SELECT * FROM cadastro');
    $query->execute();

    $produtos = $query->fetchAll();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar produto</title>
</head>

<body>
    <form action="atualizarPRODUTO.php" method="post">
        <input type="hidden" name="idProd" value="<?php echo $_GET['idProd']; ?>">
        <label for="">Nome</label>
        <input type="text" name="nome" id="">
        <label for="">Quantidade</label>
        <input type="text" name="quantidade" id="">
        <label for="">Preço</label>
        <input type="text" name="preco" id="">
        <input type="submit" value="atualizar">
    </form>
</body>
</html>
