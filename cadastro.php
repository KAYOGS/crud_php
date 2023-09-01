<?php
include('conexao.php');
    try{
    if(isset($_POST['nome'],$_POST['quantidade'],$_POST['preco']) && $_POST['nome']!='' && $_POST['preco']!=''){
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

    $query = $dbh->prepare('insert into cadastro (nome, quantidade, preco) values(:nome, :quantidade, :preco)');

    $query->execute(array(
        ':nome' => $nome,
        ':quantidade' => $valor,
        ':preco' => $quantidade
    ));

    print_r($dbh);
?>