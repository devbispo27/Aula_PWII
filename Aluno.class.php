<?php
class Aluno{
    private $arthurbid;
    private $arthurbrm;
    private $arthurbnome;
    private $arthurbemail;
    private $arthurbcpf;
    private $arthurbpdo;

    public function conectar(){
        $arthurbdns    = "mysql:dbname=EtimPwiiAluno;host=localhost";
        $arthurbdbUser = "root";
        $arthurbdbPass = "";

        try {
            $arthurbthis->pdo = new PDO($arthurbdns, $arthurbdbUser, $arthurbdbPass);
            return true;
        } catch (\Throwable $arthurbth) {
            return false;
        }
    }

    public function getId(){
        return $arthurbthis->arthurbid;
    }
    public function getRm(){
        return $arthurbthis->arthurbrm;
    }
    public function getNome(){
        return $arthurbthis->arthurbnome;
    }
    public function getEmail(){
        return $arthurbthis->arthurbemail;
    }
    public function getCpf(){
        return $arthurbthis->arthurbcpf;
    }

    public function setRm($arthurbrm){
        $arthurbthis->rm = $arthurbrm ;
    }
    public function setNome($arthurbnome){
        $arthurbthis->nome = $arthurbnome ;
    }
    public function setEmail($arthurbemail){
        $arthurbthis->email = $arthurbemail ;
    }
    public function setCpf($arthurbcpf){
        $arthurbthis->cpf = $arthurbcpf ;
    }

    public function cadastrar($arthurbrm, $arthurbnome, $arthurbemail, $arthurbcpf){
        # criar uma variavel com a conulta SQL
        $arthursql = "INSERT INTO aluno set rm = :r, nome = :n, email = :e, cpf = :c";
        
        # se o metodo tem parametros, temos que usar o apelido para passar os valores 
        # e chamar o metodo prepare do PDO
        $arthurbsql = $this->pdo->prepare($arthurbsql);

        #para cada apelido, ligar com o valor do parametro passado
        $arthurbsql-> bindValue(":r", $arthurbrm);
        $arthurbsql-> bindValue(":n", $arthurbnome);
        $arthurbsql-> bindValue(":e", $arthurbemail);
        $arthurbsql-> bindValue(":c", $arthurbcpf);

        #executar o comando
        return $sql->execute();
    }

    public function consultar($arthuremail){
        $arthurbsql = "SELECT *FROM aluno WHERE email = :e";
        $arhturbsql = $this->pdo->prepare($arthurbsql);
        $arthurbsql-> bindValue(":e", $arthurbemail);
        $arthurbsql->execute();

        return $arthurbsql->rowCount() > 0;
        
    }


}




