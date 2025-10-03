<?php

require 'Aluno.class.php';
$arthurbaluno = new Aluno();

$arthurbcon = $arthurbaluno->conectar();

if( $con ){
    $al = $arthurbaluno->consulta("kiky@gmail.com");
    if( !$al ){
        $arthurbaluno->cadastrar(4368, "Quiteria", "kiky@gmail.com", "000.111.222-33");
    }else{
        echo"<script>alert('Esse aluno ja esta cadastrado!!')</script>";
    } 
}else{
    echo"<script>alert('Sem conexao com o banco. Tente mais tarde!')</script>";
}

