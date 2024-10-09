<?php require "configPDO.php";

// converte os caracteres especias em html, prevenindo códigos maliciosos
$nome = htmlspecialchars($_POST['nome_produto']);
$quantidade = htmlspecialchars($_POST['quantidade_produto']);
$preco = htmlspecialchars($_POST['preco_produto']);

if ($nome && $quantidade && $preco) {
    // prepara os comandos
    $sql = $pdo->prepare("INSERT INTO produtos (nome_produto, quantidade_produto, preco_produto) VALUES (:nome, :quantidade, :preco);");
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':quantidade', $quantidade);
    $sql->bindValue(':preco', $preco);

    // executar parametros 
    $sql->execute();
    header("Location:tabela.php");
} else {

    header("Location:cadastrar.php");
}
