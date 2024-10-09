<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>casdastro</title>
</head>
<body>
<form action="cadastrar_action.php" method="post">
<h1>MERCADO DO SEU JOSÉ</h1>
<h2>Cadastrar produtos</h2>
<div>
    <a href="tabela.php">Tabela de produtos</a>    
</div><br>
<label for="">Nome do produto:</label>
<input type="text" name="nome_produto" required>
<br><br> 
<label for="">Quantidade:</label>
<input type="number" name="quantidade_produto" required min="0" >
<br><br>
<label for="">Preço:</label>
<input type="number" name="preco_produto" required min="0" step="0.01">
<br><br>
<input type="submit" value="CADASTRAR">
</form>    

</body>
</html>