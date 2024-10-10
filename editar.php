<?php 
$id = $_GET['id'];
$nome = $_GET['nome'];
$quantidade = $_GET['quantidade'];
$preco = $_GET['preco'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar produto</title>
</head>

<body>
    <h1>ATUALIZAR CADASTRO</h1>
    <form action="editar_action.php" method="get">
    <input type="hidden" name="id" value="<?= $id?>">
        <label for="">Nome do produto:</label>
        <input type="text" name="nome_produto" value="<?=$nome; ?>" required>
        <br><br>
        <label for="">Quantidade:</label>
        <input type="number" name="quantidade_produto" value="<?=$quantidade?>" required min="0">
        <br><br>
        <label for="">Preço:</label>
        <input type="number" name="preco_produto" value="<?=$preco?>" required min="0" step="0.01">
        <br><br>
        <input type="submit" name="botao" value="ATUALIZAR">
    </form>
</body>
