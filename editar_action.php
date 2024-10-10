
<?php require "configPDO.php";

$id = $_GET['id'];
$nome = $_GET['nome_produto'];
$quantidade = $_GET['quantidade_produto'];
$preco = $_GET['preco_produto'];

$sql = $pdo->prepare("UPDATE produtos SET nome_produto = :nome, quantidade_produto = :quantidade, preco_produto = :preco WHERE ID_produto = :id");
$sql->bindValue(':nome', $nome);
$sql->bindValue(':quantidade', $quantidade);
$sql->bindValue(':preco', $preco);
$sql->bindValue(':id', $id);

if ($sql->execute()) {
    header("Location:tabela.php");
} else {
    echo "ERRO AO ATUALIZAR! retornando...";
    sleep(5000);
    header("Location:tabela.php");
}

?>