<?php
require_once 'db.php';
$database = new Database();
$database->connect();
$pdo = $database->getConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $tipo = $_POST['tipo'];
    $imobiliaria_nome = $_POST['imobiliaria_nome'];
    $alugado = $_POST['alugado'];
    $nome_inquilino = $_POST['nome_inquilino'];
    $CPF = $_POST['CPF'];
    $pagamento = $_POST['pagamento'];
    $date = $_POST['dia']

    $stmt = $pdo->prepare("INSERT INTO imovel(id, tipo, imobiliaria_nome, alugado, nome_inquilino, CPF, pagamento, date) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$id, $tipo, $imobiliaria_nome, $alugado, $nome_inquilino, $CPF, $pagamento, $imovel_id, $date]);

    header("Location: index.php");
    exit();
}
?>

