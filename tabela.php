<?php require 'configPDO.php';

$lista = [];
$sql = $pdo->query("SELECT * FROM produtos ");

if ($sql->rowCount() > 0) {
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de produtos</title>
</head>
<body>
<h1>LISTA DE PRODUTO CADASTRADOS</h1>
<a href="cadastrar.php">cadastrar produtos</a>
<br><br>
<form action="" method="post">
    <table border="2">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Quantidade</th>
            <th>Preço</th>
        </tr>
        <?php foreach ($lista as $pd) : ?>
            <tr>
                <td><?= $pd["ID_produto"] ?></td>
                <td><?= $pd["nome_produto"] ?></td>
                <td><?= $pd["quantidade_produto"] ?></td>
                <td><?= $pd["preco_produto"] ?></td>
                <td><a href="editar.php?id=<?= $pd["ID_produto"]; ?>&nome=<?= $pd["nome_produto"]; ?>&quantidade=<?= $pd["quantidade_produto"]; ?>&preco=<?= $pd["preco_produto"] ?>">Editar</a></td>  
                <td><a href="excluir.php?id=<?= $pd["ID_produto"]; ?>">Excluir</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</form>
</body>
</html>
