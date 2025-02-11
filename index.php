<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Cadastro de Imóveis</title>
    <link rel="stylesheet" href="style.css">
    <?php 
        require_once 'db.php'; 
        $database = new Database(); 
        $database->connect(); 
        $pdo = $database->getConnection(); 
    ?>
</head>
<body>
    <div class="box">
    <h1>Cadastro de Imóveis</h1> 
    
    <form action="cadastro.php" method="POST"> 
        <label for="id">Código do Imóvel:</label>
        <input type="text" id="id" name="id" required><br> 

        <label for="tipo">Tipo de Imóvel:</label>
        <input type="text" id="tipo" name="tipo" required><br>

        <label for="imobiliaria">Imobiliária:</label>
        <input type="text" id="nome" name="imobiliaria_nome" required><br> 
        
        <label for="alugado">Alugado?</label>
        <input type="text" id="alugado" name="alugado" required><br> 




        <label for="Inquilino"> Inquilino </label>
        <input type="text" id="nome_inquilino" name="nome_inquilino"><br>

        <label for="cpf"> CPF </label>
        <input type="text" id="cpf" name="CPF"><br>

        <label for="pagamento"> Pagamento </label>
        <input type="text" id="pagamento" name="pagamento"><br>

        <label for="data"> Data do Pagamento</label>
        <input type="date" id="data" name="dia"><br>

        <input type="submit" value="Cadastrar" style="background-color: #211f6b; color: white; padding: 10px 20px; border: none; border-radius: 12px; cursor: pointer; font-size: 16px; transition: background-color 0.3s ease;"> <!-- Botão de envio do formulário com estilo inline -->
    </form>


</div>
    

</body>
</html>
