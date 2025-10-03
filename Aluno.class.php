<?php
class Aluno{
    private $arthurbid;
    private $arthurbrm;
    private $arthurbnome;
    private $arthurbemail;
    private $arthurbcpf;
    private $arthurbpdo;

    public function conectar(){
        $dns    = "mysql:dbname=EtimPwiiAluno;host=localhost";
        $dbUser = "root";
        $dbPass = "";

        try {
            $this->pdo = new PDO($dns, $dbUser, $dbPass);
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function getId(){
        return $this->arthurbid;
    }
    public function getRm(){
        return $this->arthurbrm;
    }
    public function getNome(){
        return $this->arthurbnome;
    }
    public function getEmail(){
        return $this->arthurbemail;
    }
    public function getCpf(){
        return $this->arthurbcpf;
    }

    public function setRm($arthurbrm){
        $this->rm = $arthurbrm ;
    }
    public function setNome($arthurbnome){
        $this->nome = $arthurbnome ;
    }
    public function setEmail($arthurbemail){
        $this->email = $arthurbemail ;
    }
    public function setCpf($arthurbcpf){
        $this->cpf = $arthurbcpf ;
    }

    public function cadastrar($arthurbrm, $arthurbnome, $arthurbemail, $arthurbcpf){
        # criar uma variavel com a conulta SQL
        $arthursql = "INSERT INTO aluno set rm = :r, nome = :n, email = :e, cpf = :c";
        
        # se o metodo tem parametros, temos que usar o apelido para passar os valores 
        # e chamar o metodo prepare do PDO
        $arthurbsql = $this->pdo->prepare($arthurbsql);

        #para cada apelido, ligar com o valor do parametro passado
        $sql-> bindValue(":r", $arthurbrm);
        $sql-> bindValue(":n", $arthurbnome);
        $sql-> bindValue(":e", $arthurbemail);
        $sql-> bindValue(":c", $arthurbcpf);

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


