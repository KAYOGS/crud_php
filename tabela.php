<?php
    include('conexao.php');
    $query = $dbh->prepare('SELECT * FROM cadastro');
    $query->execute();

    $produtos = $query->fetchAll();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Tabela Produto</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="stylesheet" href="atualizar.php">
    </head>
    <body>
        <div class="principal">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Quantidade</th>
                        <th>Preço</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php
                        foreach($produtos as $produtos){
                            echo '<tr>';
                            echo '<td>'.$produtos['idProd'].'</td>';
                            echo '<td>'.$produtos['nome'].'</td>';
                            echo '<td>'.$produtos['quantidade'].'</td>';
                            echo '<td>'.$produtos['preco'].'</td>';
                            echo '<td><a href="atualizar.php?idProd=' .$produtos['idProd'].'">Edit</a></td>';
                            echo '<td><a href="deletar.php?idProd=' .$produtos['idProd'].'">Deletar</a></td>';
                            echo '</tr>';
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
