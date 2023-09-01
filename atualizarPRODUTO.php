<?php
include('conexao.php');

    try{
    if(isset($_POST['idProd'], $_POST['nome'],$_POST['quantidade'],$_POST['preco']) && $_POST['nome']!='' && $_POST['preco']!=''){
        $idProd = $_POST['idProd'];
        $nome = $_POST['nome'];
        $valor = $_POST['quantidade'];
        $quantidade = $_POST['preco'];
        
    }else{
        echo 'Variaveis nao definidas';
        die();
    }
    }catch(PDOExcpetion $e){
        throw new MyDatabaseException( $Exception->getMessage( ) , (int)$Exception->getCode( ) );
    }

    echo '<br>';

    $query = $dbh->prepare('UPDATE cadastro set nome=:nome, quantidade=:quantidade, preco=:preco where idProd=:idProd;');

    
    echo $idProd;
    

    $query->execute(array(
        ':nome' => $nome,
        ':quantidade' => $quantidade,
        ':preco' => $valor,
        ':idProd' => $idProd
    ));
?>
