<?php

require_once "conexao.php";

$nome = $_POST["nome"];
$data_nascimento = $_POST["nascimento"];
$endereco = $_POST["endereco"];
$sexo = $_POST["sexo"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$senha_hash = password_hash($senha, PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios
        (nome, data_nascimento, endereco, sexo, telefone, email, senha)
        VALUES
        (:nome, :data_nascimento, :endereco, :sexo, :telefone, :email, :senha)";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    ":nome" => $nome,
    ":data_nascimento" => $data_nascimento,
    ":endereco" => $endereco,
    ":sexo" => $sexo,
    ":telefone" => $telefone,
    ":email" => $email,
    ":senha" => $senha_hash
]);

echo "Cadastro realizado com sucesso!";