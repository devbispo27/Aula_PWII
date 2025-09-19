<?php
require "Aluno.class.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $rm    = $_POST['rm'] ?? '';
    $nome  = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $cpf   = $_POST['cpf'] ?? '';

    $aluno = new Aluno();

    if ($aluno->conectar()) {
   
        if ($aluno->consultar($email)) {
            echo "<script>alert('Já existe um aluno cadastrado com esse e-mail.'); window.history.back();</script>";
        } else {
            if ($aluno->cadastrar($rm, $nome, $email, $cpf)) {
                echo "<script>alert('Cadastro realizado com sucesso!'); window.location.href='index.html';</script>";
            } else {
                echo "<script>alert('Erro ao cadastrar. Tente novamente.'); window.history.back();</script>";
            }
        }
    } else {
        echo "<script>alert('Erro na conexão com o banco de dados.'); window.history.back();</script>";
    }
}
?>
