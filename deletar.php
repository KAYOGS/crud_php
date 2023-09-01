<?php
    include('conexao.php');
        $idProd = $_GET['idProd'];
        $query = $dbh->prepare('delete from cadastro where idProd=:idProd');
        $query->execute(array(
            ':idProd' => $idProd
        ));
?>

<!DOCTYPE html>
<html lang = "pt-br">
    <head>
        <title>Deletado</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    </head>
        <body>
            <h1>DELETADO COM SUCESSO!</h1>
         </body>
</html>