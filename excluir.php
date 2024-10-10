<?php
require "configPDO.php";

$id = $_GET['id'];
$sql = $pdo->prepare("DELETE FROM produtos WHERE ID_produto = :id");
$sql->bindValue(':id', $id);

try {
    $sql->execute();
    header("Location:tabela.php");
} catch (Exception $e) {
    echo 'Caught exception: ', $e->getMessage(), "\n";
}
?>
