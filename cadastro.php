<?php
require "Aluno.class.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $arthurbrm    = $_POST['rm'] ?? '';
    $arthurbnome  = $_POST['nome'] ?? '';
    $arthurbemail = $_POST['email'] ?? '';
    $arthurbcpf   = $_POST['cpf'] ?? '';

    $arthurbaluno = new Aluno();

    if ($arthurbaluno->conectar()) {
   
        if ($arthurbaluno->consultar($arthurbemail)) {
            echo "<script>alert('Já existe um aluno cadastrado com esse e-mail.'); window.history.back();</script>";
        } else {
            if ($arthurbaluno->cadastrar($arthurbrm, $arthurbnome, $arthurbemail, $arthurbcpf)) {
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

