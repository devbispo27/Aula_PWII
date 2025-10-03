<?php
session_start();

if( isset($_SESSION['nome'])){
    $arthurbnome = $_SESSION['nome'];
    echo "<h1>Oi $arthurbnome, bem vindo!";
}else{
    echo"<h1>Que pena, voce nao esta logado!!";

}
